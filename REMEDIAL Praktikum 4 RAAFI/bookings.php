<?php 
require "connect.php";;
$harga = 0;
$no = 1;
$id = $_SESSION['id'];
$tampil = open("SELECT * FROM booking WHERE user_id = '$id' ");

if (!isset($_COOKIE["warna"])) {
    setcookie("warna", "cyan",time()+300);
    $warna= "cyan";
  } else {
    if ($_COOKIE["warna"] === 'cyan') {
        $warna = "cyan";
      } 
    else {
        $warna = "black";
      }
  }
  
 

  if(isset($_SESSION["nama"])) {
    $login = true;
  } else{
    header("location: login.php");
  }

?>

<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>
    .containerform{
        margin : 70px auto;
        width: 70%;
        padding: 10px 5% ;
    }
</style>
<!-- Favicon -->
<link href="img/favicon.ico" rel="icon">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 

<!-- CSS Libraries -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="style.css" rel="stylesheet">

<title>Bookings</title>
</head>

<body>

  <!-- Top Bar Start -->
  <div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="logo">
                            <a href="index.php">
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

  <?php if($warna === "cyan") :?>
    <nav class="navbar navbar-light" style="background-color: #202c45; padding-left: 15%; padding-right: 15%;">
        <a style="font-weight: bold; font-size: 20px; text-decoration:none;" class= "text-light" href="index.php">WESTCOAST</a>  
        <?php if ($login === true ) :?>
          <div class="nav-item dropdown">
            <a style = "float:left; color:black;" class= "text-light" type="button" href="bookings.php">
          <svg style="width:24px;height:24px" viewBox="0 0 24 24">
        <path fill="currentColor" d="M17,18C15.89,18 15,18.89 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20C19,18.89 18.1,18 17,18M1,2V4H3L6.6,11.59L5.24,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42A0.25,0.25 0 0,1 7.17,14.75C7.17,14.7 7.18,14.66 7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.58 17.3,11.97L20.88,5.5C20.95,5.34 21,5.17 21,5A1,1 0 0,0 20,4H5.21L4.27,2M7,18C5.89,18 5,18.89 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20C9,18.89 8.1,18 7,18Z" />
        </svg>
        </a>
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?= $_SESSION["nama"] ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="width:100%;" >
            <li><a class="dropdown-item" href="profile.php">Profile</a></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul>
        </div>
      <?php endif ; ?>
      </nav>
      
    <?php else : ?>
    <nav class="navbar navbar-light" style="background-color: black; padding-left: 15%; padding-right: 15%;">
    <a style="color:white; font-weight: bold; font-size: 20px; text-decoration:none;" href="index.php">EAD Travel</a>  
        <?php if ($login === true ) :?>
          <div class="nav-item dropdown">
            <a style = "float:left; color:black;" type="button" href="bookings.php">
          <svg style = "width:24px;height:24px; color:white; " viewBox="0 0 24 24">
        <path fill="currentColor" d="M17,18C15.89,18 15,18.89 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20C19,18.89 18.1,18 17,18M1,2V4H3L6.6,11.59L5.24,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42A0.25,0.25 0 0,1 7.17,14.75C7.17,14.7 7.18,14.66 7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.58 17.3,11.97L20.88,5.5C20.95,5.34 21,5.17 21,5A1,1 0 0,0 20,4H5.21L4.27,2M7,18C5.89,18 5,18.89 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20C9,18.89 8.1,18 7,18Z" />
        </svg>
        </a>
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?= $_SESSION["nama"] ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="width:100%;" >
            <li><a class="dropdown-item" href="profile.php">Profile</a></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul>
        </div>
    <?php endif ;?>
    </nav>
<?php endif ;?>
 
      <div class="containerform p-4 mb-5 ">
        <table class="table table-striped table-dark">
        <tr style="border-bottom: 1px solid black; text-align: left;">
            <th style="padding:0 100px 0 0;">No</th>
            <th style="padding:0 100px 0 0;">Package Name</th>
            <th style="padding:0 100px 0 0;">Service Detail</th>
            <th style="padding:0 100px 0 0;">Booking Date</th>
            <th style="padding:0 100px 0 0;">Price</th>
            <th style="padding:0 100px 0 0;">Action</th>
        </tr>

        <?php foreach ($tampil as $data) : ?>
            <tr>
            <th><?= $no?></th>
            <td><?= $data['nama_tempat']?></td>
            <td><?= $data['lokasi']?></td>
            <td><?= $data['tanggal']?></td>
            <td>Rp. <?= $data['harga'] ?></td>
            <td> <a class="btn btn-danger" name= "id" href="delete.php?id='<?= $tampil[0]["id"]?>'">Hapus</a> </td>
            <?php 
            $no += 1; 
            $harga += $data['harga'];
            ?>
        </tr>

            <?php endforeach ; ?>

        <tr>
            <th>Total</th>
            <td></td>
            <td></td>
            <td></td>
            <td>Rp. <?= $harga ?></td>
            <td></td>
        </tr>
    </table>
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