<?php

class Mahasiswa_model {
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getAllMahasiswaById($Id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE Id=:Id');
        $this->db->bind('Id', $Id);
        return $this->db->single();
    }
}