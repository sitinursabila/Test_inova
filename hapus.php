<?php 
if(!isset($_SESSION["login"])){
    header("location: login.php");
    exit;
  }
    include 'config.php';

    $id = $_GET['id'];

    mysqli_query($kon, "DELETE FROM tb_rekam_medis WHERE id = '$id'");

    header("location: rekam_medis.php");
?>