<?php 

class Buku_model {
    private $dbh; //database handler
    private $stmt;

    // jangan simpan password dan username disini, ini hanya contoh
    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=daftarbuku';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    

    public function getAllBuku(){
        $this->stmt = $this->dbh->prepare('SELECT * FROM bukuperpus');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

;?>