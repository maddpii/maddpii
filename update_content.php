<?php


$lokasi_file=$_FILES['file']['tmp_name'];
$nama_file=$_FILES['file']['name'];
move_uploaded_file($lokasi_file,$nama_file);

include "koneksi.php";

echo "
$_POST[namalink] <br>
$_POST[isi] <br>
$nama_file <br>
";

$upda="update conten set

        namalink='$_POST[namalink]',
        isi='$_POST[isi]',
        file='$nama_file'
        
        where no='$_POST[no]'" ;

if(mysqli_query($conn,$upda)) {
    echo "berhasil di update
     <meta http-equiv='refresh' content='1;url=mainadmin.php'>";
}

?>
