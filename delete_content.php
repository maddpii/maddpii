<?php
include "koneksi.php";

$FG="DELETE from pi where no='$_GET[no]'";

if(mysqli_query($conn, $FG)) {
    echo "berhasil dihapus
    <meta http-equiv='refresh' content='1;url=mainadmin.php'>";
}
?>