<?php 

class Buku_model {
    private $tabel = 'bukuperpus'; //database handler
    private $db;

    public function __construct(){
        $this->db = new Database;
        
    }

    public function getAllBuku(){
       $this->db->query('SELECT * FROM '. $this->tabel);
       return $this->db->resultSet();
    }

    public function getBukuById($id){
        $this->db->query('SELECT * FROM '. $this->tabel.' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}

;?>