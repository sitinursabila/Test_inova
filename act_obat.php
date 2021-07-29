<?php
    include 'config.php';
    if(!isset($_SESSION["login"])){
        header("location: login.php");
        exit;
      }

if (isset($_POST['save'])) {
    
    
 
    $nama_obat = @$_POST['nama_obat'];
    $kategori = @$_POST['kategori'];
    $stok_obat = @$_POST['stok_obat'];
    $tgl_kadaluarsa = @$_POST['tgl_kadaluarsa'];
    $harga = @$_POST['harga'];
    $query = mysqli_query($kon, "INSERT INTO tb_obat VALUES ('','$nama_obat', '$kategori', '$stok_obat', '$tgl_kadaluarsa', '$harga')");
    header("location: obat.php");
    exit;
}
            
?>