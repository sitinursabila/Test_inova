<?php
if(!isset($_SESSION["login"])){
    header("location: login.php");
    exit;
  }
    include 'config.php';

if (isset($_POST['save'])) {
    
    
 
    $kota = @$_POST['kota'];
    $kecamatan = @$_POST['kecamatan'];
    $desa = @$_POST['desa'];
   
    $query = mysqli_query($kon, "INSERT INTO tb_wilayah VALUES ('','$kota','$kecamatan', '$desa')");
    header("location: wilayah.php");
    exit;
}
            
?>