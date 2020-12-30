<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daftar Periksa</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords"
    content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<?php
include "koneksi.php";
?>
  <section>	
      <nav class="navbar navbar-default" style="margin-top: 0px; background-color: rgba(0, 143, 69, 0.7);">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header" id="myNavbar">
              <ul class="nav navbar-nav" style="margin-left: 5px;">
                <li class="active"><a href="../index.php">HOME</a></li>
                <li class=""><a href="../index.php">ABOUT</a></li>
                <li class=""><a href="../index.php">DOCTORS</a></li>
                <li class=""><a href="../index.php">CONTACT</a></li>
                <li class=""><a href="../Pendaftaran.php">DAFTAR DOKTER</a></li>
				        <li class=""><a href="../logout.php">LOGOUT</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
  </section>

	<nav>
    <br>
    <a class="btn btn-warning" style="margin-left :20px;" href="../Pendaftaran.php">Kembali ke Pendaftaran</a>
  </nav>
	
 <div class="container">
		  <div class="col-md-12">
		  <br>

        </div>
        <div class="main">
		
            <div class="content">
                <table class="table1" width="100%" cellpadding="0" cellspacing="0">              
			<br><br>
	<center>
	<h3>DAFTAR DOKTER</h3>
  <br><br><br><br>
	</center>
<form action="cek_daftar.php" method="POST">
<div class="content">
    <table class="table-form"  width="100%" >
        <tr>
            <td width="20%"><label>Nama Lengkap</label></td>
            <td colspan="3"><input name="nama" id="nama" type="text"></td>
        </tr>
        
        <tr>
            <td valign="top"><label>Keluhan</label></td>
            <td valign="top" colspan="2">
                <textarea name="keluhan" id="keluhan" class="form1" cols="50" rows="8"></textarea>
            </td>
        </tr>
        
        <tr>
            <td><label>Tinggi Badan (cm)</label></td>
            <td colspan="3"><input name="tinggi" id="tinggi" type="number"></td>
        </tr>
        <tr>
            <td><label>Berat Badan (kg) </label></td>
            <td colspan="3"><input name="berat" id="berat" type="number" ></td>
        </tr>
		<tr>
            <td><label>No. HP</label></td>
            <td colspan="3"><input name="no_hp" id="no_hp" type="number" ></td>
        </tr>
        <tr>
            <td><label>Email</label></td>
            <td colspan="3"><input name="email" id="email" type="text"></td>
        </tr>
		<tr>
            <td><label>Alamat</label></td>
            <td colspan="3"><input name="alamat" id="alamat" type="text"></td>
        </tr>
    </table>
	<input type="submit" name="submit" class="btn btn-appoint" value="Simpan">
</div>
        </div>
		</form>
    </div>
<br><br><br>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
