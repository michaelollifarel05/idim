<?php
require_once '../koneksi.php';

class HakAkses
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllAkses()
    {
        $conn = $this->db->connect();
        $sql = "SELECT * FROM hakakses";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        
        return $result;
    }
}

class Barang
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllBarang()
    {
        $conn = $this->db->connect();
        $sql = "SELECT * FROM barang";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        
        return $result;
    }
}
?>
