<?php
include "koneksi.php";

$baca_ed="SELECT * from pi where no='$_GET[no]'";

$tamp_ed=mysqli_query($conn,$baca_ed);
$lihat_ed=mysqli_fetch_array($tamp_ed);

echo "<pre>
Nama Link : $lihat_ed[no] </pre>";
?>
<pre> <form action='update_content.php' method='post' enctype='multipart/form-data'>


    <input type='hidden' name='no' value='<?php echo "$lihat_ed[no]"?>'>

    Nama Link : <input type='text' name='namalink' value='<?php echo "$lihat_ed[namalink]"?>'>
    Isi       : <textarea name="isi">  <?php echo "$lihat_ed[isi]" ?> </textarea>
    File      : <input type='file' name='file' value='<?php echo "$lihat_ed[file]"?>'>

    <input type='submit' value="Kirim">
    </form></pre>