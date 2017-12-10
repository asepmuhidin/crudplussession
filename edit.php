<?php
  session_start() ;
  include "DB.php";

  $dbku=new DB();
  $koneksi=$dbku->open();

  $nim=$_GET['nim'];  

  $sql="select * from mahasiswa where nim='$nim'";

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
  <body>I
    <div class="container">
        <h3>Tambah Data Mahasiswa</h3>
        <form action="update.php" method="POST" >
            
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">NIM</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="NIM" name="tnim"
                     value="<?php echo $datasiswa[0]['nim']; ?>" >
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nama Mahasiswa</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Nama" name="tnama"
                    value="<?php echo $datasiswa[0]['nama']; ?>">
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Email" name="temail"
                    value="<?php echo $datasiswa[0]['email']; ?>">
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Telp</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Telp" name="ttelp"
                    value="<?php echo $datasiswa[0]['telp']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-9">
                   <textarea class="form-control" name="talamat" placeholder="Alamat" >
                    <?php echo $datasiswa[0]['alamat']; ?>
                   </textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3"></label>
                <div class="col-sm-9">
                    <input type="submit" class="form-control btn btn-primary" 
                    name="bsimpan"  value="Simpan">
                </div>
            </div>

        </form>    
    </div>
  </body>
</html>  