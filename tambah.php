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
        <form action="simpan.php" method="POST" >
            
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">NIM</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="NIM" name="tnim">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nama Mahasiswa</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Nama" name="tnama">
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Email" name="temail">
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Telp</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Telp" name="ttelp">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-9">
                   <textarea class="form-control" name="talamat" placeholder="Alamat" ></textarea>
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