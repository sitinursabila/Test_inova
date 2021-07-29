<?php
session_start();
if (isset($_SESSION["login"])) {
header("location: login.php");
 exit;
 }
	include 'config.php';
	$user = @$_POST['username'];
	$p = @$_POST['password'];
	$pass =md5($p);
	$role = @$_POST['role'];

    $query1=mysqli_query($kon,"select * from tb_login where username='$user' and pass='$pass'");
    $jml=mysqli_num_rows($query1);
    if ($jml>0) {
        $_SESSION['login2']=true;

        $data=mysqli_fetch_array($query1);
        echo"<script>
            alert('Login Sukses');
            window.location=('halpas.php');
            </script>";				
    }else{
        echo"<script>
            alert('Login Gagal Username Dan Password Anda Salah');
            window.location=('login2.php?err=2');
            </script>";
    }


?>