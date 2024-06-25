<?php

include "koneksi.php" ;

$simpan="INSERT into login (USER,PASSWORD) values

('$_POST[USER]','$_POST[PASSWORD]')" ;

if (mysqli_query($conn, $simpan)) {
    echo "data sudah tersimpan
    <meta http-equiv='refresh' content='1;url=isiuser.php'>";
    
}
else {
    echo "data tidak terimpan
    <meta http-equiv='refresh' content='1;url=isiuser.php'>" ;
}

mysqli_close($conn);
?>