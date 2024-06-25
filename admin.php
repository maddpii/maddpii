<style>
    a{
        text-decoration:none;
    }
</style>    


<table border="1" width="1024" align="center">
    <tr>
        <td colspan="2" align="center" >SELAMAT DATANG DI ADMINISTRATOR<br><img src="latihan adobe banner png.png"></td>
            <tr>

            <tr>
                <td width="313" valign="top">

                <a href="?file=isi_content.php">tambah content</a> <br>
                <a href="?file=tampil_content.php">tampil content</a><br></td>

                <td width="711" valign="top"><p>

                <?php

                if(isset($_GET['file'])){
                echo $_GET['file'];
                include "$_GET[file]";
                }
                
                ?>
                <br>
            </td>
            </tr>
            </table>        