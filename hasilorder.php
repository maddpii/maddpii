<!DOCTYPE html>
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
            
</ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <?php
    include "koneksi.php";
     include "page-valid_session.php";
if (!isset($_GET['pil'])) {$_GET['pil']="" ;}
$ba ="SELECT * FROM pi where no='$_GET[pil]'" ;

$result =mysqli_query($conn,$ba);

$data = mysqli_fetch_array($result) ;

//echo "<a href=?pil=$data[1]..........$data[2]></a> <br>" ;
?>
    <div class="card mb-3 mt-5 p-4 " style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="gambar/foto bareng.jpg " width="400px" class="img-fluid rounded-start" >
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <!--<h5 class="card-title"><?php echo $data[3] ?></h5>-->
        <p class="card-text">Thank you, <?php echo "$_SESSION[user]" ?></p>
        <p class="card-text">TELAH MEMESAN JASA JOKI DI <a href="webujian.php">TAKAPEDIA</a></p>
        <p class="card-text">
        <ul>
        <li>Login via: <?php echo isset($_POST['loginvia']) ? htmlspecialchars($_POST['loginvia']) : 'Tidak tersedia'; ?></li>
        <li>Email: <?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : 'Tidak tersedia'; ?></li> 
        <li>request: <?php echo isset($_POST['request_hero']) ? htmlspecialchars($_POST['request_hero']) : 'Tidak tersedia'; ?></li>
        <li>Nickname: <?php echo isset($_POST['user']) ? htmlspecialchars($_POST['user']) : 'Tidak tersedia'; ?></li>
        <li>Password: <?php echo isset($_POST['password']) ? htmlspecialchars($_POST['password']) : 'Tidak tersedia'; ?></li>
        <li>paket joki: <?php echo isset($_POST['namabarang']) ? htmlspecialchars($_POST['namabarang']) : 'Tidak tersedia'; ?></li>
        <li>Jumlah joki: <?php echo isset($_POST['qty']) ? htmlspecialchars($_POST['qty']) : 'Tidak tersedia'; ?></li>
        <li>Pesan buat penjoki: <?php echo isset($_POST['notes']) ? htmlspecialchars($_POST['notes']) : 'Tidak tersedia'; ?></li>
        <li>jumlah: <?php echo isset($_POST['harga']) ? htmlspecialchars($_POST['harga']) : 'Tidak tersedia'; ?></li>
        
 
            
        </li>
        </ul>
        <?php
@include('koneksi.php');

$user=$_POST['user'];
$email=$_POST['email'];
$nmbrng=$_POST['namabarang'];
$qty = $_POST['qty'];
$harga = $_POST['harga'];

$qysimpan ="INSERT into hasilorder (email,user,namabarang,qty,harga)
values ('$email','$user', '$nmbrng', '$qty' ,'$harga')";

$spacc = mysqli_query($conn, $qysimpan);
?></p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
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