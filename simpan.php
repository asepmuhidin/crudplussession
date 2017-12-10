<?php 
 session_start();
  include "DB.php";
  
  $dbku=new DB();
  $koneksi=$dbku->open();

   $nim=$_POST['tnim'];
   $nama=$_POST['tnama']; 
   $email=$_POST['temail'];
   $telp=$_POST['ttelp'];
   $alamat=$_POST['talamat'];

   $sql="INSERT INTO mahasiswa(nim,nama,email,telp,alamat) VALUES
   ('$nim','$nama','$email','$telp','$alamat')";
   
   mysqli_query($koneksi,$sql) or die("Gagal eksekusi SQL :<br> $sql" );



   
   $_SESSION['statusSimpan'] = "Data behasil disimpan";
   header("Location: http://localhost/d2web/showdata.php");  

?>