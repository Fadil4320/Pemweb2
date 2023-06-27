<?php
class Pesanan{
    private $koneksi;
    public function __construct(){
        global $dbh; //panggil instance object di koneksi.php
        $this->koneksi = $dbh;
    }
    public function dataPesanan(){
        $sql = "SELECT c.*, j.nama AS psna
        FROM pesanan c
        INNER JOIN pelanggan j ON j.id = c.pelanggan_id
        ORDER BY c.id DESC";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}
?>