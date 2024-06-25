<style>
    a{
        text-decoration:none;
    }
</style>    
<?php include "valid_session.php";?>
<table border="1" width="1024" align="center">
    <tr>
        <td colspan="2" align="center" >SELAMAT DATANG DI ADMINISTRATOR<br><img src="latihan adobe banner png.png" alt=""></td>
            <tr>

            <tr>
                <td width="313" valign="top">
                <a href="mainadmin.php">mainadmin</a><br> 
                <a href="adminisi.php">tambah content</a> <br>
                <a href="admintampil.php">tampil content</a><br>
                <a href="tutupsession.php">Log out</a><br> </td>

                <td width="711" valign="top"><p>

                <?php

                
                include "edit_content.php";
                
                
                ?>
                <br>
            </td>
            </tr>
            </table>        