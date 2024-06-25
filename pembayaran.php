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

	<div class="d-flex flex-row mx-auto mb-4 p-3">
              <section>
<?php
    include "koneksi.php";
if (!isset($_GET['pil'])) {$_GET['pil']="" ;}
$ba ="SELECT * FROM pi where no='$_GET[pil]'" ;

$result =mysqli_query($conn,$ba);

$data = mysqli_fetch_array($result) ;

//echo "<a href=?pil=$data[1]..........$data[2]></a> <br>" ;
?>
  <div class="card-group m-3 mx-auto" style="width: 35rem" data-bs-theme="info">
    <div class="card m-3 border rounded" style="width: 18rem; height: 27rem">
      <img src="gambar/<?php echo $data['6'] ?>" width="260" height="200" class="image ms-5">
      <div class="card-body">
        <h5 class="card-title"><?php echo $data['2'] ?></h5>
        <p class="card-text">Rp<?php echo $data['4'] ?></p>
      </div>
      <form method="post" action="hasilorder.php?pil=<?php echo $data[0] ?>">
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><input type="number" id="perhitungan" onclick="sayHalo();"value="1" name="qty" maxlength="3" max="999" min="1"  /> &times; <?php echo $data['4'] ?></li>
        
        <li class="list-group-item"><input type="text"  id="total" name="harga" readonly></li>


      </ul>
</div>
  </section>
<div class="container2 text-light">
        <h2>Masukkan Data Akun</h2>
        

            <label for="login-via ">Login Via:</label><br>
            <select id="loginvia" name="loginvia">
                <option value="email">Email</option>
                <option value="no_hp">No. Hp</option>
                <option value="moonton_id">Moonton ID</option>
            </select><br>
            <label for="email">Ketikan Email/No. Hp/Moonton ID:</label><br>
            <input type="text" id="email" name="email"><br>

            <label for="request-hero">Request Hero:</label><br>
            <input type="text" id="request-hero" name="request_hero"><br>

            <label for="user">User ID & Nick Name:</label><br>
            <input type="text" id="user" name="user"><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br>

            <label for="notes">Paketan joki:</label><br>
            <input type="text" id="namabarang" name="namabarang"><br>

            <label for="notes">Catatan Untuk Penjoki:</label><br>
            <textarea id="notes" name="notes"></textarea><br>

            <label for="notes">Total : Rp<b id="total2" ></label><br>
            
            <button type="submit" name="submit" class="btn btn-primary">Proceed to Checkout</button>
        </form>
        <p>Pastikan untuk membaca semua informasi, syarat & ketentuan sebelum melakukan pemesanan untuk memastikan bahwa Anda mendapatkan layanan terbaik dan sesuai ekspektasi.</p>
    </div>
	</div>
	</div>
  </div>
  <script>
var hg = <?php echo $data['harga']; ?>;
var nm = <?php echo $_SESSION['user']; ?>;

document.getElementById("total").innerHTML = hg;
document.getElementById("total2").innerHTML = hg;

function sayHalo() {
  var ra = document.getElementById('perhitungan').value;
  var rh = parseInt(ra) * hg;

  document.getElementById("total").value = "Rp" + rh;
  document.getElementById("total2").innerHTML = rh;

  return rh; // Pastikan untuk mengembalikan nilai true agar form dikirim
}
</script>




<footer class="footer">
        <div class="containerf">
            <div class="row">
                <div class="footer-col">
                    <h4>Sosial Media</h4>
                    <ul>
                        <li><a href="#">Tiktok takapedia</a></li>
                        <li><a href="#">Instagram takapedia</a></li>
                        <li><a href="#">Youtube Takapedia</a></li>
                        <li><a href="#">Discord takapedia</a></li>
                    </ul> 
                </div>
                <div class="footer-col">
                    <h4>Peta Situs</h4>
                    <ul>
                        <li><a href="#">Beranda</a></li>
                        <li><a href="#">Cek Transaksi</a></li>
                        <li><a href="#">Hubungi Kami</a></li>
                        <li><a href="#">Ulasan</a></li>
                        <li><a href="#">Dasbord</a></li>
                    </ul> 
                </div>
                <div class="footer-col">
                    <h4>Legalitas</h4>
                    <ul>
                        <li><a href="#">Kebijakan Pribadi</a></li>
                        <li><a href="#">Syarat & Ketentuan</a></li>
                        
                    </ul> 
                </div>
                <div class="footer-col">
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
				</div>
	<style>
    body {
    font-family: Arial, sans-serif;
}


.container2 {
    width: 700px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

label {
    display: block;
    margin-top: 20px;
}

input[type="text"], input[type="password"], textarea, select {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

input[type="submit"] {
    margin-top: 20px;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

p {
    margin-top: 30px;
    font-style: italic;
    color: #777;
}@import url('https://fonts.googleapis.com/ css2?family=Poppins:wght@300;400;500;600;700&display=swap');

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
.row{
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
.footer-col{
    width: 25%;
    padding:0 15px;
}
.footer-col h4{
    font-size: 18px;
    color: #ffffff;
    text-transform: capitalize;
    margin-bottom: 35px;
    font-weight:500;
    position: relative;
}
.footer-col h4::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    background-color:#e91e63 ;
    height: 2px ;
    box-sizing: border-box;
    width: 50px;
}
.footer-col ul li:not(:last-child){
    margin-bottom: 10px;

}
.footer-col ul li a{
    font-size: 16px;
    text-transform: capitalize;
    color: #ffffff;
    text-decoration: none;
    font-weight: 300;
    color: #bbbbbb;
    display: block;
    transition: all 0.3s ease ;
}
.footer-col ul li a:hover{
    color: #ffffff;
    padding-left: 8px;
}
.footer-col .sosial-link a{
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

.footer-col .sosial-link a:hover{
    color: #24262b;
    background-color: #ffffff;
}

/*responsive*/
@media(max-width : 767px){
    .footer-col{
        width: 50%;
        margin-bottom: 30px;
    
    }
}
@media(max-width : 574px){
    .footer-col{
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