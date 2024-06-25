<!DOCTYPE html>
<head>
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
		<meta charset="utf-8" />
		<title>Smarty - Multipurpose + Admin</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- THEME CSS -->
		<link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/layout.css" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="assets/css/header-1.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/layout-shop.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />
	</head>

	
	<body class="smoothscroll enable-animation bg-dark">

		
		
			<div id="header" class="sticky clearfix">

      <nav class="navbar navbar-expand-lg  bg-dark">
      <a class="logo pull-left" href="index.html">
							<img src="gambar/logo takapedia.webp" alt="" />
						</a>
  
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse"  id="navbarNav">
    <ul id="topMain" class="nav nav-pills nav-main">
      <li class="nav-item active">
        <a class="nav-link text-light" alt="hover" href="web_joki.php">Beranda</a>
      </li>
	  <li class="dropdown">
		<?php include "valid_session.php";?>
	  </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Cek Transaksi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Kalkulator</a>
      </li>
      <li class="nav-item">
      <li class="dropdown">
      <a class="dropdown-toggle text-light" data-bs-toggle="dropdown">Kategori</a>
  <ul class="dropdown-menu">                                                                                                                                                                                                                                                             
                                                                                                                                                                                                                                                                                    
                                                                                                                                                                                                                                                                                                        
  <li>
 <?php
 $koneksi=mysqli_connect("localhost", "root", "", "datarafiibaru");
  $ba ="SELECT * FROM kategorigame" ;

 $result =mysqli_query($koneksi,$ba);

  while ($data = mysqli_fetch_array($result)){
  // echo "<a href=?pil=$data[1]> $data[2] </a> <br>";

  ?>
 <a href="?pil=<?php echo $data[1];?>"><?php echo $data[2]?>
 <?php } ?>	
</a>
 </li>
 </ul>
</li>
 </li>
	</ul>
  </div>
</nav>
</div>
  
<!--carosel-->
        
<div id="carouselExampleAutoplaying" class="carousel slide mb-5  " data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item">
          <img src="gambar/carosel2.webp" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect>
        </div>
        <div class="carousel-item">
          <img src="gambar/caroselaoshi.webp" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect>
        </div>
        <div class="carousel-item active">
          <img src="gambar/caroselaoshi2.webp" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"></rect>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    
<!--carosel-->
<section>
<h3 class="owl-featured noborder text-center text-light "><strong>POPULER</strong> GAMES</h3>
<div class="shop-item nomargin">

<?php
$koneksi=mysqli_connect("localhost", "root", "", "datarafiibaru");

if (!isset($_GET['pil'])) {$_GET['pil']="" ;}
$ba ="SELECT * FROM contengame where kode like '%$_GET[pil]%'" ;

$result =mysqli_query($koneksi,$ba);

while ($data = mysqli_fetch_array($result)){
   // echo "<a href=?pil=$data[1]> $data[2] </a> <br>";

?>

<div class="container"  >
        <div class="d-flex flex-row mb-3 ">
          <div class="col">
            <div class="thumbnail border-dark bg-primary-subtle" style="width: 18rem;">
            <a  class="shop-item-image ">
                <img class="img-responsive" src="gambar/<?php echo $data[4]?>"  alt="shop first image">
                <!--<img class="img-responsive" src="gambar/<?php echo $data[5]?>"  alt="shop hover image">-->
                
                <div class="card-body">
</a>      
<div class="shop-item-summary text-center">
                  <b class="card-text-center fw-bold"><?php echo $data[3]?></b>

                  <div class="shop-item-buttons text-center">
                  <button class="btn btn-sm btn-outline-success" type="button"><a class="text-dark bold" href="pilihanjoki.php" ><?php echo $data[0]?> PILIH JOKI</a> </button>
</div>
                </div>
              </div>
          </div>
</div>
          <?php } ?>
</div>
</section>
<section>
<h3 class="owl-featured noborder text-center text-light "><strong>POPULER</strong> GAMES</h3>
<div class="shop-item nomargin">

<?php
$koneksi=mysqli_connect("localhost", "root", "", "datarafiibaru");

if (!isset($_GET['pil'])) {$_GET['pil']="" ;}
$ba ="SELECT * FROM contengame where kode like '%$_GET[pil]%'" ;

$result =mysqli_query($koneksi,$ba);

while ($data = mysqli_fetch_array($result)){
   // echo "<a href=?pil=$data[1]> $data[2] </a> <br>";

?>

<div class="container"  >
        <div class="d-flex flex-row mb-3 ">
          <div class="col">
            <div class="thumbnail border-dark bg-primary-subtle" style="width: 18rem;">
            <a  class="shop-item-image ">
                <img class="img-responsive" src="gambar/<?php echo $data[4]?>"  alt="shop first image">
                <!--<img class="img-responsive" src="gambar/<?php echo $data[5]?>"  alt="shop hover image">-->
                
                <div class="card-body">
</a>      
<div class="shop-item-summary text-center">
                  <b class="card-text-center fw-bold"><?php echo $data[3]?></b>

                  <div class="shop-item-buttons text-center">
                  <button class="btn btn-sm btn-outline-success" type="button"><a class="text-dark bold" href="pilihanjoki.php" ><?php echo $data[0]?> PILIH JOKI</a> </button>
</div>
                </div>
              </div>
          </div>
</div>
          <?php } ?>
</div>
</section>


<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h5>Venderpedia</h5>
        <ul>
          <li><a href="#">Beranda</a></li>
          <li><a href="#">Cek Transaksi</a></li>
          <li><a href="#">Hubungi Kami</a></li>
          <li><a href="#">Ulasan</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5>Dukungan</h5>
        <ul>
          <li><a href="#">WhatsApp</a></li>
          <li><a href="#">Email</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5>Legalitas</h5>
        <ul>
          <li><a href="#">Kebijakan Pribadi</a></li>
          <li><a href="#">Syarat & Ketentuan</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5>Social Media</h5>
        <ul>
          <li><a href="https://www.youtube.com/takassassin">Tiktok Takapedia</a></li>
          <li><a href="https://www.youtube.com/takassassin">Tiktok Takaaa</a></li>
          <li><a href="https://www.youtube.com/takassassin">Youtube Takassassin</a></li>
          <li><a href="https://www.instagram.com/taka_pedia/">Instagram Takapedia</a></li>
          <li><a href="https://discord.com/invite/VPYBUu8dtP">Discord Takapedia</a></li>
        </ul>
      </div>
    </div>
  </div>

<div class="copyright">
					<div class="container">
						<ul class="pull-right nomargin list-inline mobile-block">
							<li><a href="#">Terms &amp; Conditions</a></li>
							<li>&bull;</li>
							<li><a href="#">Privacy</a></li>
						</ul>

						&copy; All Rights Reserved, Company LTD
					</div>
				</div>

</footer>
</body>
</html>