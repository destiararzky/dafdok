<?php
include "koneksi.php";

$username=$_POST["username"];
$password=($_POST["password"]);


  $sql="insert into user (username,password) values
		('$username','$password')";

  $hasil=mysqli_query($kon,$sql);

  if ($hasil) {
	echo '<script language="javascript">
              alert ("Registrasi Berhasil Di Lakukan!");
              window.location="index.php";
              </script>';
              exit();
  }
else {
	echo "Gagal simpan data User";
	exit;
}  

?>