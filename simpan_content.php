<?php
include "koneksi.php" ;

echo $_POST['namalink'] ;
echo "<br>";
echo $_POST['namalink2'] ;
echo "<br>";
echo $_POST['harga'] ;
echo "<br>";
echo $_POST['isi'] ;
echo "<br>";

echo $_POST['file1'] ;




$simpan="INSERT into pi (namalink,rank,harga,isi,file1) values
('$_POST[namalink]','$_POST[namalink2]', '$_POST[harga]','$_POST[isi]', '$_POST[file1]')" ;

if (mysqli_query($conn, $simpan)) {
    echo "data sudah tersimpan
    <meta http-equiv='refresh' content='1;url=table_barang.php'>";
    
}
else {
    echo "data tidak terimpan" ;
}

mysqli_close($conn);
?>