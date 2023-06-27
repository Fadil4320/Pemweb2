<?php
$model = new Produk();
$data_produk = $model->dataProduk();
?>
<!-- Isi content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
              <li class="breadcrumb-item active">Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th><th>Kode</th><th>Nama</th>
                            <th>Harga Beli</th><th>Harga Jual</th>
                            <th>Stok</th><th>Minimal Stok</th>
                            <th>Jenis Produk</th><th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no =1 ;
                        foreach($data_produk as $row){
                        ?>
                            <tr>
                                <td><?=$no?></td>
                                <td><?=$row['kode']?></td>
                                <td><?=$row['nama']?></td>
                                <td><?=$row['harga_beli']?></td>
                                <td><?=$row['harga_jual']?></td>
                                <td><?=$row['stok']?></td>
                                <td><?=$row['min_stok']?></td>
                                <td><?=$row['prod']?></td>
                                <td>
                                  <form action="produk_controller.php" method="post">
                                    <a href="index.php?hal=produk_detail&id=<?= $row['id']?>">
                                      <button type="button" class="btn btn-info btn-sm" tittle="Detail Produk">
                                      <i class="fa-solid fa-eye fa-beat"></i>
                                      </button>
                                    </a>
                                    <a href="index.php?hal=produk_edit&idedit=<?= $row['id']?>">
                                      <button type="button" class="btn btn-warning btn-sm" tittle="Edit Produk">
                                      <i class="fa-solid fa-pen-to-square fa-beat"></i>
                                      </button>
                                    </a>
                                      <button type="button" class="btn btn-danger btn-sm" name="proses" value="hapus" 
                                      onclick="return confirm('Apakah Anda Yakin ingin menghapus data produk yg bernama <?= $row['nama'] ?>')" tittle="Delete Produk">
                                      <i class="fa-solid fa-trash fa-beat"></i>
                                      </button>
                                      <input type="hidden" name="idx" value="<?= $row['id']?>">
                                  </form>
                                </td>
                            </tr>
                        <?php 
                        $no++;   
                        } 
                        ?>
                        <a href="index.php?hal=produk_form" class="bg-gradient-primary"><button class="btn-primary">Tambah Produk</button></a>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /Isi content -->
<?php
include_once('footer.php');
?>