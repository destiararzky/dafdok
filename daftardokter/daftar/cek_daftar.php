<?php
  include "koneksi.php";
  $nama=$_POST["nama"];
  $keluhan=$_POST["keluhan"];
  $tinggi=$_POST["tinggi"];
  $berat=$_POST["berat"];
  $no_hp=$_POST["no_hp"];
  $email=$_POST["email"];
  $alamat=$_POST["alamat"];
  
  $sql  = "INSERT INTO daftar (nama, keluhan, tinggi, berat, no_hp, email, alamat) 
  VALUES ('$nama','$keluhan', '$tinggi', '$berat', '$no_hp', '$email', '$alamat')";
  
  $hasil  = mysqli_query($kon,$sql);
  if ($hasil) {
	echo '<script language="javascript">
              alert ("Registrasi Pasien Berhasil Di Lakukan! Nomor Antrian Akan Kami Kirim Ke E-mail Anda ");
              window.location="daftarperiksa.php";
              </script>';
              exit();
  }
else {
	echo "Gagal simpan data Pasien";
	exit;
}  
?>
