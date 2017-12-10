<?php
  session_start() ;
  include "DB.php";

  $dbku=new DB();
  $koneksi=$dbku->open();
  $sql="select * from mahasiswa";
  $datasiswa=$dbku->getData($koneksi,$sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Data Mahasiswa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
  </head>
  <body>
    <div class="container">
      <h1>Data Mahasiswa</h1>
      
      <?php  if( isset( $_SESSION['statusSimpan'] ) ) {?>

      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses </strong><?php echo $_SESSION['statusSimpan']; ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>

      <?php } ?>

      <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
  <table class="table table-striped  table-dark">
  <thead>
    <tr>
      <th scope="col">NIM</th>
      <th scope="col">Nama Mahasiswa</th>
      <th scope="col">Email</th>
      <th scope="col">Telp</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($datasiswa as $rec) {?>
    <tr>
      <th scope="row"><?php echo $rec['nim'];?></th>
      <td><?php echo $rec['nama'];?></td>
      <td><?php echo $rec['email'];?></td>
      <td><?php echo $rec['telp'];?></td>
      <td><?php echo $rec['alamat'];?></td>
      <td>
          <a href="edit.php?nim=<?php echo $rec['nim'];?>" class="btn btn-success btn-sm">Edit</a>
          <a href="hapus.php?nim=<?php echo $rec['nim'];?>" class="btn btn-danger btn-sm">Hapus</a>
      </td>
    </tr>
<?php }?>
  </tbody>
</table>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>