<?php
if(!isset($_SESSION["login"])){
    header("location: login.php");
    exit;
  }
    include 'config.php';

if (isset($_POST['save'])) {
    
    
 
    $nama_obat = @$_POST['nama_obat'];
    $jenis_kelamin = @$_POST['jenis_kelamin'];
    $usia = @$_POST['usia'];
    $jabatan = @$_POST['jabatan'];
    $gaji = @$_POST['gaji'];
    $query = mysqli_query($kon, "INSERT INTO tb_pegawai VALUES ('','$nama_obat', '$jenis_kelamin', '$usia', '$jabatan', '$gaji')");
    header("location: pegawai.php");
    exit;
}
            
?>