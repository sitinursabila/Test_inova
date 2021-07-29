<?php
if(!isset($_SESSION["login"])){
  header("location: login.php");
  exit;
}
include"config.php";
  $id = @$_POST['id'];
  $nama = @$_POST['nama'];
  $alamat= @$_POST['alamat'];
  $usia= @$_POST['usia'];
  $tanggal = @$_POST['tanggal'];
  $telp = @$_POST['telp'];
  $status = @$_POST['status'];
  $tindakan = @$_POST['tindakan'];
  $biaya = @$_POST['biaya'];

  mysqli_query($kon, "UPDATE tb_rekam_medis SET nama = '$nama', alamat = '$alamat', usia= '$usia', tanggal = '$tanggal', telp = '$telp', status = '$status',tindakan = '$tindakan',biaya = '$biaya' WHERE id = '$id'");
                header("location: data_pasien.php");
           

?>