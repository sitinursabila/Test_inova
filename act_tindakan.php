<?php
if(!isset($_SESSION["login"])){
    header("location: login.php");
    exit;
  }
    include 'config.php';

if (isset($_POST['save'])) {
    
    
 
    $nama_tindakan = @$_POST['nama_tindakan'];
    $kode_tindakan = @$_POST['kode_tindakan'];
    $biaya = @$_POST['biaya'];
   
    $query = mysqli_query($kon, "INSERT INTO tb_tindakan VALUES ('','$kode_tindakan','$nama_tindakan', '$biaya')");
    header("location: tindakan.php");
    exit;
}
            
?>