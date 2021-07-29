<?php
include"config.php";
  $id = @$_POST['id'];
  $nama_obat = @$_POST['nama_obat'];
  $kategori= @$_POST['kategori'];
  $stok_obat= @$_POST['stok_obat'];
  $tanggal_kadaluarsa = @$_POST['tanggal_kadaluarsa'];
  $harga = @$_POST['harga'];
  

  mysqli_query($kon, "UPDATE tb_obat SET nama_obat = '$nama', kategori = '$kategori', stok_obat= '$stok_obat', tanggal_kadaluarsa = '$tanggal_kadaluarsa', telp = '$telp', status = '$status',tindakan = '$tindakan',biaya = '$biaya' WHERE id = '$id'");
                header("location: obat.php");
           

?>