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

    public function tambahDataBuku($data){
        $query = "INSERT INTO bukuperpus (judul, penulis, tahun, genre) VALUES (:judul, :penulis, :tahun, :genre)";
        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('penulis', $data['penulis']);
        $this->db->bind('tahun', $data['tahun']);
        $this->db->bind('genre', $data['genre']);

        $this->db->execute();
        return $this->db->rowCount();

    }

    public function hapusDataBuku($id){
        $query = "DELETE FROM bukuperpus WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataBuku($data){
        $query = "UPDATE bukuperpus SET judul=:judul, penulis=:penulis, tahun=:tahun, genre=:genre WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('penulis', $data['penulis']);
        $this->db->bind('tahun', $data['tahun']);
        $this->db->bind('genre', $data['genre']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();

    }
}

;?>