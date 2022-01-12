<?php
require "connect.php";

$alert = 0 ;

if(isset($_POST["daftar"])) {
    
    if(daftar($_POST) > 0 ) {
        $alert = 1;
    } else {
        $alert = 2;
    }    
    
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
        margin : 80px auto;
        width: 450px;
        background-color: rgb(255, 255, 255);
    }
</style>

<!-- Favicon -->
<link href="img/favicon.ico" rel="icon">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 

<!-- CSS Libraries -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


<!-- Template Stylesheet -->
<link href="style.css" rel="stylesheet">

<title>Registrasi</title>
</head>

<body style="background-color:#F1F1F1">
<body>

    <!-- Top Bar Start -->
    <div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="logo">
                            <a href="index.html">
                                <h1>Auto<span>Wash</span></h1>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 d-none d-lg-block">
                        <div class="row">
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Opening Hour</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="fa fa-phone-alt"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Call Us</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Email Us</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div>
                      <a href="login.php" style="color:black; font-weight: 450px; font-size: 20px; text-decoration: none;" class= "text-secondary"> Login </a>
                    </div>
                    <a style="margin-left:20px; text-decoration: none; font-weight: 600; font-size: 20px;" class= "text-light"> Register </a>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->

<?php if ($alert === 1) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    Berhasil Registrasi
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php elseif ($alert === 2) : ?> 
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    Gagal Registrasi
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif ; ?>
 
    <div class="containerform p-3 mb-5">
        <h1 style="text-align: center;">Register</h1>
        <hr>
        <form action="" method="POST">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Alamat E-Mail" required>
            </div>
            <div class="mb-3">
              <label for="nohp" class="form-label">Nomor Handphone</label>
              <input type="number" class="form-control" id="nohp" name="nohp" placeholder="Masukkan Nomor Handphone" required>
            </div>
            <div class="mb-3">
              <label for="pw" class="form-label">Kata Sandi</label>
              <input type="password" class="form-control" id="pw" name="pw" placeholder="Kata Sandi Anda" required>
            </div>
            <div class="mb-4">
              <label for="kpw" class="form-label">Konfirmasi Kata Sandi</label>
              <input type="password" class="form-control" id="kpw" name="kpw" placeholder="Konfirmasi Kata Sandi Anda" required>
            </div>
            <center><button type="submit" class="btn btn-primary d-grid gap-2 col-4 mx-auto mb-3" name="daftar" >Daftar</button></center>
        </form>
        <p style="text-align: center;">Anda sudah punya akun? <a href="login.php">Login</a></p>
    </div>


    <!-- Footer Start -->
    <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Get In Touch</h2>
                            <p><i class="fa fa-map-marker-alt"></i>99 Kemang, Jakarta Selatan, IDN</p>
                            <p><i class="fa fa-phone-alt"></i>+62 345 9110</p>
                            <p><i class="fa fa-envelope"></i>westcoast@gmail.com</p>
                            <div class="footer-social">
                                <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
                    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
  </body>
</html>