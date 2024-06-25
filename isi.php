<?php
$kokesi=mysqli_connect("localhost", "root", "", "datarafiibaru");

if (isset ($_GET['pil'])){

$a ="SELECT * FROM conten where no='$_GET[pil]";

$hasil =mysqli_query($koneksi,$a);

while ($data = mysqli_fetch_array($hasil)) {
    echo "$data[nama_link] <br> " ;
    echo "$data[isi] <br> " ;
    echo "<img src=img/$data[file] width=100 height=50> <br>";

}
}
else {
    echo "click menu yang anda pilih";
}
?>