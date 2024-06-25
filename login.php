<?php include "koneksi.php";
?>
<h1 align="center"> MASUKAN USER DAN PASSWORD</h1>
<pre>
    <form action="login_proses.php" enctype="multipart/form-data" method="post">

    User : <input type="text" name="user" id="user">
    Password : <input type="password" name="password" id="password">

    <input type="submit" value="Login" id="Login">
 
    </form>
</pre>