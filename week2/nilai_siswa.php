<?php
require_once 'fungsi.php';
$proses = $_POST['proses'];
$nama_siswa = $_POST['name'];
$mata_kuliah = $_POST['Matkul'];
$uts = $_POST['nilai_uts'];
$uas = $_POST['nilai_uas'];
$tugas = $_POST['nilai_tugas']; 
$_nilai = $uts + $uas + $tugas / 3;
$hasil_ujian = kelulusan($_nilai);
$grade = grade($_nilai);

if(!empty($proses)){
echo "Nama : $nama_siswa";
echo "<br/>Mata Kuliah : $mata_kuliah";
echo "<br/>Nilai UTS: $uts";
echo "<br/>Nilai UAS : $uas";
echo "<br/>Nilai Tugas Praktikum : $tugas";
echo "<br/>Grade : $grade";
echo "<br/>Keterangan : $hasil_ujian";
echo "<br/>Data telah di $proses";
}
?>