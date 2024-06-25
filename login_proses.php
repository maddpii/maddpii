<?php
session_start();
include "koneksi.php";
$log="SELECT * FROM login where user='$_POST[user]'";
$logry=mysqli_query($conn,$log);
$datalog=mysqli_fetch_array($logry);

if($datalog > 0){ 
      $data= mysqli_fetch_assoc($logry);
    
      if($datalog['status']=="klien"){
        $_SESSION['user']=$_POST['user'] ;
    
        $_SESSION['status']= "klien" ;

        echo "<script> alert('Client') </script> ";

        echo "<script> window.location.href='webujian.php' </script>";
    
      }
      else if($datalog['status']=="admin"){
      $_SESSION['user']=$_POST['user'] ;
    
      $_SESSION['status']= "admin" ;
      
      echo "<script> alert('admin') </script> "; 

      echo "<script> window.location.href='admin/iindex.php' </script>";
      
      }
    
    else {
         echo "<div class='alert alert-danger' role='alert'>
         USer dan Password Tidak Ditemukan
       </div>
       <script> window.location.href='login.php' </script>";
    }
    }
    
?>