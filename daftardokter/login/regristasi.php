<html>
<head>
    <title>Pendaftaran Akun Pasien</title>    
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="kotak_regristasi">
		<p class="tulisan_regristasi">REGISTER</p>
    <form action="simpan-pendaftaran.php" method="post" name="form1">        
        <table>
            <tr>
                <label>Username</label>
                <input type="text" name="username" class="form_regristasi"  placeholder="Username">
            </tr>
			<tr>
                <label>Password</label>
                <input type="password" name="password" class="form_regristasi" placeholder="Password">
            </tr>
            <tr>
            <tr>
                <td></td>
                <label><input type="submit" name="submit" class="tombol_regristasi" value="Register"></label>
            </tr>
        </table>
    </form>
	<center>
				<a class="link" href="index.php">Kembali Ke Login</a>
			</center>
	</div>

</body>
</html>