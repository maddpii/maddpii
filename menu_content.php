<?php
$koneksi=mysqli_connect("localhost", "root", "", "datarafiibaru");
$ba ="SELECT * FROM kategori" ;

$result =mysqli_query($koneksi,$ba);

while ($data = mysqli_fetch_array($result)){
    echo "<a href=?pil=$data[1]> $data[2] </a> <br>";
}
?>