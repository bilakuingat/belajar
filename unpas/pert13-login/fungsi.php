<?php
// * koneksi

$conn = mysqli_connect("localhost", "root", "", "dblatihan");

function query($query)
{
    // & agar $conn bisa kedetect
    global $conn;
    $result = mysqli_query($conn, $query);
    // & $rows -> menyiapkan wadah/kotak. $result -> lemari. $row -> baju yg diambil tiap looping
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    // &  ambil data tiap el dari form utk disave ke var
    // &  nyimpen ke variabel
    // &  htmlspecchart utk antisipasi hack
    $nim        = htmlspecialchars($data["nim"]);
    $nama       = htmlspecialchars($data["nama"]);
    $email      = htmlspecialchars($data["email"]);
    $jurusan    = htmlspecialchars($data["jurusan"]);

    // * upload gambar
    $gambar     = upload();
    // & klo yg dikirm fungsi upload gagal, fungsi di-stop
    if (!$gambar) {
        return false;
        // @ kalo ketemu return false, yg dibahwanya tdk akan dijalankan
    }

    // * query insert data
    $query  = "INSERT INTO mahasiswa_unpas
                VALUES 
                ('','$nim','$nama','$email','$jurusan','$gambar')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function upload()
{
    // & gambar didapat dari "name" di index.php
    $namaFile       = $_FILES['gambar']['name'];
    $ukuranFile     = $_FILES['gambar']['size'];
    $error          = $_FILES['gambar']['error'];
    $tmpName        = $_FILES['gambar']['tmp_name'];

    // * cek apakah gambar diupload
    if ($error === 4) {
        echo "<script>
            alert ('pilih gambar dulu')
            </script>";
        return false;
    }

    // * cek apa yg diup gambar 
    $ektensiGambarValid  = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar      = explode('.', $namaFile);
    $ekstensiGambar      = strtolower(end($ekstensiGambar));

    // * cek ekstensi gambar yg diup
    if (!in_array($ekstensiGambar, $ektensiGambarValid)) {
        echo "<script>
            alert ('Harus upload gambar')
            </script>";
        return false;
    }
    // @ klo ekstensi tdk ada di array, maka...

    // * cek ukuran max
    // & 2jt -> 2mb
    if ($ukuranFile > 2000000) {
        echo "<script>
            alert ('Ukuran gambar terlalu besar')
            </script>";
        return false;
    }

    // * generate nama file baru. (agar tdk bentrok)
    $namaFileBaru   = uniqid();
    $namaFileBaru  .= '.';
    $namaFileBaru  .= $ekstensiGambar;

    // * lolos cek
    move_uploaded_file($tmpName, '../pert10/img/' . $namaFileBaru);
    return $namaFileBaru;
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa_unpas WHERE id=$id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    // &  ambil data tiap el dari form utk disave ke var
    // &  nyimpen ke variabel
    // &  htmlspecchart utk antisipasi hack
    $id         = $data["id"];
    // @ $id dpt dari hidden input
    $nim        = htmlspecialchars($data["nim"]);
    $nama       = htmlspecialchars($data["nama"]);
    $email      = htmlspecialchars($data["email"]);
    $jurusan    = htmlspecialchars($data["jurusan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // * cek apa ganti gambar
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar     = upload();
    }

    // * query insert data
    $query  = "UPDATE mahasiswa_unpas SET
                nim     = '$nim',
                nama    ='$nama',
                email   = '$email',
                jurusan ='$jurusan',
                gambar  ='$gambar'
                WHERE id = $id  
                ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function cari($keyword)
{

    $query = "SELECT * FROM mahasiswa_unpas WHERE 
    nama LIKE '%$keyword%' OR 
    nim LIKE '%$keyword%' OR
    email LIKE '%$keyword%' OR
    jurusan LIKE '%$keyword%'
    ";

    // * pake fungsi query yg sdh dibuat diatas
    return query($query);
}

function registrasi($data)
{
    global $conn;

    $username   = strtolower(stripslashes($data["username"]));
    $password   = mysqli_real_escape_string($conn, $data["password"]);
    $password2   = mysqli_real_escape_string($conn, $data["password2"]);

    // * cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
            alert ('Passwd tidak sama');
        </script>";
        return false;
        // @ return false -> diberhentikan
    }
    // * cek username ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert ('Username sdh ada')
        </script>";
        return false;
    }

    // * enkripsi passwd (opsional)
    $password   = password_hash($password, PASSWORD_DEFAULT);

    // * tambah userbaru
    mysqli_query($conn, "INSERT INTO user 
                        VALUES ('', '$username','$password')");
    return mysqli_affected_rows($conn);
}
