<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h2 style="text-align: center;">Form Nilai Mahasiswa</h2>
    <hr/>
    <div class="container">
        <!-- taro buka from disini-->
    <form method="POST" action="nilai_siswa.php">
  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Nama Mahasiswa</label> 
    <div class="col-8">
      <input id="name" name="name" placeholder="Masukan Nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="Matkul" name="Matkul" class="custom-select">
        <option value="DDP">Dasar - Dasar Pemrograman</option>
        <option value="WEB">Pemrograman Web</option>
        <option value="BASDAT">Basis Data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" placeholder="Masukkan Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" placeholder="Masukkan Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" placeholder="Masukkan Nilai Tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" value="Simpan" name="proses" class="btn btn-primary"/>
    </div>
  </div>
</form>
<!-- taro tutup from disini-->
<?php
// $proses = $_POST['proses'];
// $nama_siswa = $_POST['name'];
// $mata_kuliah = $_POST['Matkul'];
// $uts = $_POST['nilai_uts'];
// $uas = $_POST['nilai_uas'];
// $tugas = $_POST['nilai_tugas'];


// echo "Nama : $nama_siswa";
// echo "<br/>Mata Kuliah : $mata_kuliah";
// echo "<br/>Nilai UTS: $uts";
// echo "<br/>Nilai UAS : $uas";
// echo "<br/>Nilai Tugas Praktikum : $tugas";
// echo "<br/>Data telah di $proses";
?>
    </div>
</body>
</html>