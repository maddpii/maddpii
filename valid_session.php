<?php
session_start();
if(isset($_SESSION['user'])){ $user = $_SESSION['user'];?>


          <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           akun
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item text-success" href="#"><?php echo "$_SESSION[user]"?></a></li>
            <li><a class="dropdown-item" href="register.php">register</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-danger " href="page-login.php">Logout</a></li>
          </ul>
<?php }

else {
    echo "<meta http-equiv='refresh' content='1;url=page-login.php'>";
}
?>
