<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login RS Urip Sumoharjo</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo  '<script language="javascript">
              alert ("Mohon Login Dahulu Untuk Mengakses Layanan Kami");
              window.location="index.php";
              </script>';
              exit();
		}
	}
	?>
	
	<div class="kotak_login">
		<p class="tulisan_login">LOGIN</p>

		<form method="post" action="cek_login.php">
		<table>
			<label>Username</label>
			<input type="text" name="username" class="form_login">

			<label>Password</label>
			<input type="password" name="password" class="form_login">

			<input type="submit" class="tombol_login" value="LOGIN">
		</table>
			<br/>

			<center>
				<a class="link" href="regristasi.php">Register</a>
			</center>
			
		</form>
		
	</div>
	
	

</body>
</html>