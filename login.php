<?php
	
	include('config.php');
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$query="select * from users where
			username= '$user' and 
			password= '$pass'";
	
				
	$hasil = mysqli_query($conn,$query) or die('Query Error');
	
	$hitung = mysqli_num_rows($hasil);
	
	if($hitung ==0)
	{
		echo "<br>login gagal!";
		
		echo "<script>
		alert('Login Gagal');
		window.history.back();
		</script>";
		
	}
	else
	{	session_start();
		$_SESSION['login'] = 'ya';
		$data = mysqli_fetch_array($hasil);
		//$_SESSION['login'] = 1;
		
		echo "<script>
		alert('Login Berhasil');
		window.location='index.php';
		</script>";
		mysqli_close();
	}
?>
