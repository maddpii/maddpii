<?php

include "koneksi.php" ;






$status=$_GET['status'];
$user=$_GET['user'];
echo $user ; 
echo "<br>" ;
echo $_GET['password'] ;
echo "<br>";
echo $status ; 
echo "<br>" ;

$hastubah=password_hash($_GET['password'],PASSWORD_DEFAULT);

echo $hastubah;
$qysimpan = "INSERT into login (user,password,status) values ('$user','$hastubah','$status')";

$spacc = mysqli_query($conn, $qysimpan);

echo "<meta http-equiv='refresh' content='1;url=page-login.php'>";
mysqli_close($conn);
?>