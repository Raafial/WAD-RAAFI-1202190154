<?php
require "connect.php";
$alert = 0 ;

if(isset($_POST["login"])) {
    if(login($_POST) === false) {
        $alert = 1;
    }    
}

if(isset($_COOKIE['id'])) {
  $_SESSION['nama'] =  $_COOKIE["nama"] ;
  $_SESSION['id'] = $_COOKIE["id"] ;
}

if(isset($_SESSION["nama"])) {
  header("location: index.php");
}

?>

<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .containerform{
            margin : 150px auto;
            width: 380px;
            background-color: rgb(255, 255, 255);
        }

    </style>

    <title>Login</title>
</head>

<body style="background-color:#FBECE9">
<body>
  
        <!-- Navbar -->
        <nav class="navbar navbar-light" style="background-color: #13CDE3; padding-left: 2%; padding-right: 2%;">
            <a style="color:black; font-weight: bold; font-size: 25px;text-decoration:none;" href="index.php">EAD Travel</a>
            <div>
            <a  style="margin-left:1350px; text-decoration: none; font-weight: 600; font-size: 20px;" class= "text-dark"> Login </a></div>
            <a href="register.php" style="margin-left:10px; color:black; font-weight: 450px; font-size: 20px; text-decoration: none;" class= "text-secondary"  > Register </a>
        </nav>
        <!-- Navbar -->

  <?php if (isset($_COOKIE["logout"])) : ?> 
    <?php if ($_COOKIE["logout"] === 'true') : ?> 
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
    Berhasil Logout
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif ; ?>
    <?php endif ; ?>

  <?php if ($alert === 1) : ?> 
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    Gagal Login
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif ; ?>
    
        <div class="containerform p-3 mb-5 ">
            <h1 style="text-align: center;">Login</h1>
            <hr>
            <form action="" method="POST">
                <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan Alamat E-Mail" name = "email">
                </div>
                <div class="mb-3">
                <label for="pw" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" id="pw" placeholder="Kata Sandi Anda" name = "pw">
                </div>
                <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="remember">
                <label class="form-check-label" for="flexCheckDefault">Remember Me</label>
                </div>
                <center><button type="submit" class="btn btn-primary d-grid gap-2 col-5 mx-auto mb-4" name = "login">Login</button></center>
            </form>
            <p style="text-align: center;">Anda belum punya akun? <a href="register.php">Register</a></p>
        </div>
        
    
    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start" style="margin-top: 200px">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: #13CDE3;">
              © 2021 Copyright:
              <a class="text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">RAAFI ALBAR_1202190154</a>
            </div>
            <!-- Copyright -->
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Created By</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Nama : Raafi Albar
                </div>
                <div class="modal-body">
                  NIM  : 1202190154
                </div>
            </div>
    </footer>
    <!-- Footer -->
                    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
</body>
</html>