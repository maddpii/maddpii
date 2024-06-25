<?php
 
    include "koneksi.php";
if (!isset($_GET['pil'])) {$_GET['pil']="" ;}{
$ba ="DELETE FROM login where no='$_GET[pil]'" ;

$result =mysqli_query($conn,$ba);

echo "<div class='alert alert-success' role='alert'>
Berhasil Dihapus
</div>
<meta http-equiv='refresh' content='1;url=tampiluser.php'>";
}
?>