<?php 
    include 'config.php';

    $id = $_GET['id'];

    mysqli_query($kon, "DELETE FROM tb_obat WHERE id = '$id'");

    header("location: obat.php");
?>