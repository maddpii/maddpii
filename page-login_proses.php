<?php
session_start();
include "page-login.php";

$log = "SELECT * FROM login where user='$_POST[user]' and password='$_POST[password]'";

$logry =mysqli_query($conn,$log);
    
$lg=mysqli_fetch_array($logry);

if($lg['user']==$_POST['user']&&$lg['password']=$_POST['password']){

    $_SESSION['user']=$_POST['user'];
    echo "<script> alert ('user dan password ditemukan') </script>
    <script> window.location.href='webujian.php'; </script>";
}

else {
     echo "User atau Password tidak ditemukan";
}

?>