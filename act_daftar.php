<?php 

	session_start();
	include 'config.php';
	$user = @$_POST['username'];
	$p = @$_POST['password'];
	$pass =md5($p);
	$role = @$_POST['role'];
    $query = mysqli_query($kon, "INSERT INTO tb_login VALUES ('','$user', '$pass', '$role')");
    echo "<script>
				alert('Pendaftaran berhasil !');
				window.location=('login2.php');
	    </script>";
	
?>