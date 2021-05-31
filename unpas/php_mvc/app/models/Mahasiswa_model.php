<?php
class Mahasiswa_model
{
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // * manual 
    // private $mhs = [
    //     [
    //         "nama" => "Muhammad Cahyo",
    //         "nim" => "00921",
    //         "email" => "cahya@email.com",
    //         "jurusan" => "SI"
    //     ],
    //     [
    //         "nama" => "Muhammad josep",
    //         "nim" => "00911",
    //         "email" => "josep@email.com",
    //         "jurusan" => "SI"
    //     ],
    //     [
    //         "nama" => "Jose morino",
    //         "nim" => "00111",
    //         "email" => "mroin@email.com",
    //         "jurusan" => "TI"
    //     ]
    // ];


    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
