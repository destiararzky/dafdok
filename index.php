<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rumah Sakit Urip Sumoharjo</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords"
    content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  
  <script src="vue/vue.js"></script>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login/index.php?pesan=belum_login");
	}
	?>
	
  <!--banner-->
  <section style="background-color: rgba(31, 191, 20, 0.6)">
    <div>
      <nav>
        <div class="navbar-header navbar-fixed-top" style="height: 60px; ">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          </button>
        </div>
        <br><br><br><br>
      </nav>
      <nav class=" navbar-default navbar-fixed-top" style=" margin-top: 0px; background-color: rgba(0, 143, 69, 0.7);">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header" id="myNavbar">
              <ul class="nav navbar-nav" style="margin-left: 5px;">
                <li class="active"><a href="#banner">HOME</a></li>
                <li class=""><a href="#about">ABOUT</a></li>
                <li class=""><a href="#doctor-team">DOCTORS</a></li>
                <li class=""><a href="#contact">CONTACT</a></li>
                <li class=""><a href="Pendaftaran.php">DAFTAR DOKTER</a></li>
				        <li class=""><a href="logout.php">LOGOUT</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="banner-info"style="padding-top:28px;">
            <div class="banner-logo text-center">
              <img src="img/uriplogo.png" widht=40px; height=40px; class="img-responsive">
            </div>
            <div class="banner-text text-center"><br>
			<h2>Selamat datang, <?php echo $_SESSION['username']; ?>!</h2>
              <h1 class="white" style="font-family:arial;">BEKERJA SAMBIL BERAMAL DAN BEROBAT SAMBIL BERAMAL</h1>
              <p>Jl. Urip Sumoharjo, Kota Bandar Lampung<br> Lampung, Indonesia 35122</p>
              <a href="Pendaftaran.php" class="btn btn-appoint">DAFTAR DOKTER</a><br><br>
            </div>
            <div class="overlay-detail text-center">
              <a href="#about"><i class="fa fa-angle-down"></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ banner-->
  <!--service-->
  <section id="about" class="section-padding">
    <div class="container">
      <div class="col-md-12">
        <center>
          <h2 class="ser-title" style="color: black;">ABOUT</h2>
          <hr class="botm-line">
        </center>
        <br><br>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <h2 class="ser-title">Story</h2>
          <hr class="botm-line">
          <p>RS Urip Sumoharjo Merupakan RS Swasta yang bernuansa Islam yang mulai beroperasi sejak tanggal 10 September 2001 dan sesuai dengan Keputusan Menteri Kesehatan RI Nomor 492/menkes/SK/V/2008, RS Urip Sumoharjo saat ini merupakan rumah sakit swasta utama setara tipe B Non Pendidikan. Status Akriditasi Tingkat Paripurna Nomor : KARS-SERT/ 670/ III/ 2017.<br><br>
          </div>
        <div class="col-md-4 col-sm-4">
          <h2 class="ser-title">Visi</h2>
          <hr class="botm-line">
          <p>Menjadi rumah sakit rujukan di Sumatera bagian Selatan.</p>
        </div>
        <div class="col-md-4 col-sm-4">
          <h2 class="ser-title">Misi</h2>
          <hr class="botm-line">
          <p>1. Menyelenggarakan Pelayanan Kesehatan yang bermutu, ramah dan profesional.<br>
            2. Menyelenggarakan pelayanan kesehatan secara cepat, tepat, dan informatif.<br>
            3. Menyelenggarakan pelayanan kesehatan yang berorientasi pada perkembangan tekhnologi.<br>
            4. Turut serta memelihara dan meningkatkan taraf kesehatan seluruh lapisan masyarakat dengan biaya terjangkau.<br>
            5. Mengembangkan profesionalisme Sumber Daya Manusia yang berkesinambungan hingga mampu bersaing ditingkat taraf nasional</p>
        </div>
      </div>
    </div>
  </section>
  <!--/ service-->
  <!--doctor team-->
  <section id="doctor-team" class="section-padding" style="background-color: rgba(31, 191, 20, 0.6)">
    <div class="container">
      <div class="row">
        <center>
          <h2 class="ser-title" style="color: white;">DOCTORS</h2>
          <hr class="botm-line">
        </center>
        <br><br><br>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/doctor1.jpg" alt="..." class="team-img">
            <div id="app" class="caption">
              <br>
              <button class="btn badge" @click="btnClick" @mouseover="hover = true" @mouseout="hover = false" >dr.Khairani, Sp.THT</button>
              <br>
              <p v-if="hover">Spesialis THT</p>
              <br>
              
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/doctor2.jpg" alt="..." class="team-img">
            <div id="app2" class="caption">
              <br>
              <button class="btn badge" @click="btnClick" @mouseover="hover = true" @mouseout="hover = false" >dr. Ridhuan Irawan, Sp.PD</button>
              <br>
              <p v-if="hover">Spesialis Penyakit Dalam</p>
              <br>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/doctor4.jpg" alt="..." class="team-img">
            <div id="app3" class="caption">
              <br>
              <button class="btn badge" @click="btnClick" @mouseover="hover = true" @mouseout="hover = false" >dr.M. Iqbal, Sp.A</button>
              <br>
              <p v-if="hover">Spesialis Anak</p>
              <br>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/doctor3.jpg" alt="..." class="team-img">
            <div id="app4" class="caption">
              <br>
              <button class="btn badge" @click="btnClick" @mouseover="hover = true" @mouseout="hover = false" >dr. Farida Oktarina, Sp.M</button>
              <br>
              <p v-if="hover">Spesialis Mata</p>
              <br>
            </div>
          </div>
        </div>
      </div>
    </div> -->
  </section>
  <!-- / doctor team-->
  <!--contact-->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <center>
          <h2 class="ser-title">Contact us</h2>
          <hr class="botm-line">
        </center>
        <br><br>
        <div class="col-md-4 col-sm-4">
          <div class="space"></div>
          <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>Jl. Urip Sumoharjo, Bandarlampung<br> Lampung, Indonesia, 35122</p>
          <div class="space"></div>
          <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>info@rsuripsumoharjo.com</p>
          <div class="space"></div>
          <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>08117270537</p>
        </div>
      </div>
    </div>
  </section>
  <!--/ contact-->
  <script>
    var app = new Vue({
      el: "#app",
      data: {
        hover: false
      },
      methods: {
          btnClick: function(){
              alert(`dr.Khairani, Sp.THT. Specialis Dokter THT`);
          }
      }
    })
    var app2 = new Vue({
      el: "#app2",
      data: {
        hover: false
      },
      methods: {
          btnClick: function(){
              alert(`dr. Ridhuan Irawan, Sp.PD. Specialis Dokter Penyakit Dalam`);
          }
      }
    })
    var app3 = new Vue({
      el: "#app3",
      data: {
        hover: false
      },
      methods: {
          btnClick: function(){
              alert(`dr.M. Iqbal, Sp.A. Specialis Dokter Anak`);
          }
      }
    })
    var app4 = new Vue({
      el: "#app4",
      data: {
        hover: false
      },
      methods: {
          btnClick: function(){
              alert(`dr. Farida Oktarina, Sp.M. Specialis Dokter Mata`);
          }
      }
    })
  </script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <!-- <script src="contactform/contactform.js"></script> -->

</body>

</html>