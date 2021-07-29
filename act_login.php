<?php 

	session_start();
	include 'config.php';
	$user = @$_POST['username'];
	$p = @$_POST['password'];
	$pass =md5($p);
	$role = @$_POST['role'];

		$query=mysqli_query($kon,"select * from tb_login where username='$user' and pass='$pass'");
		$jml=mysqli_num_rows($query);
		
		if ($jml>0) {
			
			$data=mysqli_fetch_array($query);
			
			$_SESSION['login']=true;
			
			echo"<script>
				alert('Login Sukses');
				window.location=('index.php');
				</script>";
		}else{
			echo"<script>
				alert('Login Gagal Username Dan Password Anda Salah');
				window.location=('login.php?err=1');
				</script>";
		}
	
?>