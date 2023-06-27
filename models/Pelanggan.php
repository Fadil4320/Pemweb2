<?php
class Pelanggan{
    private $koneksi;
    public function __construct(){
        global $dbh; //panggil instance object di koneksi.php
        $this->koneksi = $dbh;
    }
    public function dataPelanggan(){
        $sql = "SELECT c.*, l.nama AS plgn
        FROM pelanggan c
        INNER JOIN kartu l ON l.id = c.kartu_id
        ORDER BY c.id DESC";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}
?>