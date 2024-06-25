<?php include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  
</head>
<body class="bg-dark">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card mt-5">
          <div class="card-header text-center">
            <h3>Login</h3>
          </div>
          <div class="card-body">
          <form action="login_proses.php" enctype="multipart/form-data" method="post">
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="text" class="form-control" id="email" name="user">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
              <button type="submit" class="btn btn-primary btn-block">Login</button>
              <a  href="tampiluser.php"><input type="button"class="btn btn-primary btn-block mt-3" value="Lihat User"></a>
              <a  href="isiuser.php"><input type="button" class="btn btn-primary btn-block mt-3"  value="Tambah"></a>
              <a  href="register.php"><input type="button" class="btn btn-primary btn-block mt-3"  value="Register"></a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

   
    
