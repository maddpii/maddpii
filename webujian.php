<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0 bg-dark">

    <!-- Example Code -->
    
        
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <img src="gambar/logo takapedia.webp" width="100px" height="50px">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="webujian.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kalkulator.php">calculator</a>
            </li>
            <li class="nav-item dropdown">
             <?php include "valid_session.php";?>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Kategori
          </a>
          <ul class="dropdown-menu">
            <li><?php
 $koneksi=mysqli_connect("localhost", "root", "", "datarafiibaru");
  $ba ="SELECT * FROM kategorigame" ;

 $result =mysqli_query($koneksi,$ba);

  while ($data = mysqli_fetch_array($result)){
  // echo "<a href=?pil=$data[1]> $data[2] </a> <br>";

  ?>
 <a class="dropdown-item" href="?pil=<?php echo $data[1];?>"><?php echo $data[2]?>
 <?php } ?>	
</a>
</li>
</ul>
</li>
</ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    
    <div id="carouselExampleAutoplaying" class="carousel slide mb-5  " data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item">
          <img src="gambar/caroselaoshi2.webp" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect>
        </div>
        <div class="carousel-item">
          <img src="gambar/carosel2.webp" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect>
        </div>
        <div class="carousel-item active">
          <img src="gambar/caroselbanner.jpg" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"></rect>
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
    <h3 class="owl-featured noborder text-center text-light p-4 "><strong>POPULER</strong> GAMES</h3>
    <div class="d-flex flex-row mx-auto mb-4 p-3">
    <?php
$koneksi=mysqli_connect("localhost", "root", "", "datarafiibaru");

if (!isset($_GET['pil'])) {$_GET['pil']="" ;}
$ba ="SELECT * FROM contengame where kode like '%$_GET[pil]%'" ;

$result =mysqli_query($koneksi,$ba);

while ($data = mysqli_fetch_array($result)){
   // echo "<a href=?pil=$data[1]> $data[2] </a> <br>";

?>
    <div class="card mx-3 bg-info-subtle" style="width: 18rem;">
        <img src="gambar/<?php echo $data['file1'] ?>" class="card-img-top file1" alt="File 1">
        <img src="gambar/<?php echo $data['file2'] ?>" class="card-img-top file2" alt="File 2">
        <div class="card-body">
            <h5 class="card-title"><?php echo $data[2] ?></h5>
            <p class="card-text"><?php echo $data[3] ?></p>
            <a href="pilihanjoki.php" class="btn btn-primary">Pilih Joki</a>
        </div>
    </div>
<?php
}
?>
<style>
.file2 {
    display: none;
}

.card:hover .file2 {
    display: block;
}

.card:hover .file1 {
    display: none;
}

  
</style>
    </div>
    


    <footer class="footer">
        <div class="containerf">
            <div class="roww">
                <div class="footer-coll">
                    <h4>Sosial Media</h4>
                    <ul>
                        <li><a href="#">Tiktok takapedia</a></li>
                        <li><a href="#">Instagram takapedia</a></li>
                        <li><a href="#">Youtube Takapedia</a></li>
                        <li><a href="#">Discord takapedia</a></li>
                    </ul> 
                </div>
                <div class="footer-coll">
                    <h4>Peta Situs</h4>
                    <ul>
                        <li><a href="#">Beranda</a></li>
                        <li><a href="#">Cek Transaksi</a></li>
                        <li><a href="#">Hubungi Kami</a></li>
                        <li><a href="#">Ulasan</a></li>
                        <li><a href="#">Dasbord</a></li>
                    </ul> 
                </div>
                <div class="footer-coll">
                    <h4>Legalitas</h4>
                    <ul>
                        <li><a href="#">Kebijakan Pribadi</a></li>
                        <li><a href="#">Syarat & Ketentuan</a></li>
                        
                    </ul> 
                </div>
                <div class="footer-coll">
                    <h4>follow us</h4>
                    <div class="sosial-link">
                        <a href="#"><i class="fab fa-facebook-f"></i></a> 
                        <a href="#"><i class="fab fa-youtube "></i></a> 
                        <a href="#"><i class="fab fa-instagram"></i></a> 
                        <a href="#"><i class="fab fa-whatsapp"></i></a> 
                    </div> 
                </div>
            </div>
        </div>                
</footer> 

     

    <div class="copyright text-light">
      &copy; All Rights Reserved, Company LTD
		</div>
				
        <style>
@import url('https://fonts.googleapis.com/ css2?family=Poppins:wght@300;400;500;600;700&display=swap');

body{
    line-height: 1.5;
    font-family: 'Poppins', sans-serif;
}
*{
    margin:0;
    padding:0;
    box-sizing: border-box;
} 

.containerf{
     max-width: 1170px;
     margin:auto;
}
.roww{
    display: flex ;
    flex-wrap: wrap;
}
ul{
    list-style:none;
}
.footer{
    background-color: #24262b;
    padding: 70px 0;
}
.footer-coll{
    width: 25%;
    padding:0 15px;
}
.footer-coll h4{
    font-size: 18px;
    color: #ffffff;
    text-transform: capitalize;
    margin-bottom: 35px;
    font-weight:500;
    position: relative;
}
.footer-coll h4::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    background-color:#e91e63 ;
    height: 2px ;
    box-sizing: border-box;
    width: 50px;
}
.footer-coll ul li:not(:last-child){
    margin-bottom: 10px;

}
.footer-coll ul li a{
    font-size: 16px;
    text-transform: capitalize;
    color: #ffffff;
    text-decoration: none;
    font-weight: 300;
    color: #bbbbbb;
    display: block;
    transition: all 0.3s ease ;
}
.footer-coll ul li a:hover{
    color: #ffffff;
    padding-left: 8px;
}
.footer-coll .sosial-link a{
    display: inline-block;
    height: 40px;
    width: 40px;
    background-color: rgb(255,255,255,0.2);
    margin: 0 10px 10px 0;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    color: #ffffff;
    transition: all 0.5s ease ;
}

.footer-coll .sosial-link a:hover{
    color: #24262b;
    background-color: #ffffff;
}

/*responsive*/
@media(max-width : 767px){
    .footer-coll{
        width: 50%;
        margin-bottom: 30px;
    
    }
}
@media(max-width : 574px){
    .footer-coll{
        width: 100%;
     
    
    }
}

footer.copyright {
  text-align: center;
  margin-top: 20px;

}
</style>
  </body>
</html>