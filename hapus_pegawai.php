<?php 
if(!isset($_SESSION["login"])){
    header("location: login.php");
    exit;
  }
    include 'config.php';

    $id = $_GET['id'];

    mysqli_query($kon, "DELETE FROM tb_pegawai WHERE id = '$id'");

    header("location: pegawai.php");
?>