<?php
include "koneksi.php";

$BC ="SELECT * from pi";

$CD=mysqli_query($conn,$BC);

while($DE=mysqli_fetch_array($CD)){
    echo "<pre>
    NO       : $DE[no]
    Namalink : $DE[namalink]
    isi      : $DE[rank]
    isi      : $DE[harga]
    isi      : $DE[isi]
    file     : $DE[file1]
    file     : $DE[file2]
<img src=gambar/$DE[file1] width=300 height=300>

<a href=delete_content.php?no=$DE[no]>delete</a>
<a href=adminedit.php?no=$DE[no]>edit</a>

</pre>";
}
?>