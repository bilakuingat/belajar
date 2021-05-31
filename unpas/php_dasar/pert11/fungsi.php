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
    $gambar     = htmlspecialchars($data["gambar"]);

    // * query insert data
    $query  = "INSERT INTO mahasiswa_unpas
                VALUES 
                ('','$nim','$nama','$email','$jurusan','$gambar')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
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
    $gambar     = htmlspecialchars($data["gambar"]);

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
