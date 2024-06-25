<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<table class="table">
<thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">user</th>
      <th scope="col">password</th>
      <th scope="col">Keterangan</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
                                    $koneksi=mysqli_connect("localhost", "root", "", "datarafiibaru");

if (!isset($_GET['pil'])) {$_GET['pil']="" ;}
$ba ="SELECT * FROM login ";//where kode like '%$_GET[pil]%'" ;

$result =mysqli_query($koneksi,$ba);

while ($data = mysqli_fetch_array($result)){
   // echo "<a href=?pil=$data[1]> $data[2] </a> <br>";

?>
                                        <tr>
                                            <td><?php echo $data[0]?></td>
                                            <td><?php echo $data[1]?></td>
                                            <td><?php echo $data[2]?></td>
                                            <td><a  href="deleteuser.php?pil=<?php echo $data[0]?> "><input type="button" class="btn btn-danger btn-block mt-3"  value="hapus"></a></td>
                                            
                                        </tr>
                                        <?php } ?>
 

    
  </tbody>
  
</table>
<a  href="page-login.php"><input type="button" class="btn btn-primary btn-block mt-3"  value="kemali"></a>
</html>