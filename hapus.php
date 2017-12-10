<?php 
session_start();

  include "DB.php";
  
  $dbku=new DB();
  $koneksi=$dbku->open();
  
  $nim=$_GET['nim'];
  $sql="DELETE FROM mahasiswa where nim='$nim'";

  mysqli_query($koneksi,$sql) or die("Gagal eksekusi SQL :<br> $sql" );
  $_SESSION['statusSimpan'] = "Data behasil dihapus";  
  header("Location: http://localhost/d2web/showdata.php");  
?>  