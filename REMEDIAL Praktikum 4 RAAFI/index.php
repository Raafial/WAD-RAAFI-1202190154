<?php
require 'connect.php';
$login = false;
$alert = 0 ;

if (!isset($_COOKIE["warna"])) {
  setcookie("warna", "cyan",time()+300);
  $warna= "cyan";
} else {
  if ($_COOKIE["warna"] === 'cyan') {
    $warna = "cyan";
  } else {
    $warna = "black";
  }
}

if(isset($_SESSION["nama"])) {
  $login = true;
} else{
  $login = false;
}

if(isset($_POST["add"])) {
  if(add($_POST) > 0 ) {
    $alert = 1;
  } else {
    $alert = 2;
  }    

}

?>

<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    .container{
        display: grid;
        width: 70%;
        grid-template-areas : "upper upper upper" "card1 card2 card3";
        grid-template-columns:  1fr 1fr 1fr ;
        margin-top: 30px;
       

    }
    .header{
        grid-area: upper ;
        display : flex;
        justify-content: center;
        align-items: center;
    }
    .card1{
        grid-area: card1 ;
    }
    .card2{
        grid-area: card2 ;
    }
    .card3{
        grid-area: card3 ;
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

<title>Index</title>
</head>


<body>
  <?php if ($alert === 1) : ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    Berhasil memesan tiket
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
    <?php elseif ($alert === 2) : ?> 
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Pendaftaran Gagal </strong> Mohon Isi Dengan Benar
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif ; ?>

          <!-- Top Bar Start -->
          <div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-10 col-md-10 mb-4">
                        <div class="logo">
                            <a href="">
                                <h1>Auto<span>Wash</span></h1>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        <!-- Top Bar End -->
          
    <!-- Navbar -->
    <?php if($warna === "cyan") :?>
    <nav class="navbar navbar-light" style="background-color: #202c45; padding-left: 15%; padding-right: 15%;">
        <a style="font-weight: bold; font-size: 20px;" class= "text-light">WESTCOAST</a> 
        <div>
          <a href="#home" style="color:black; font-weight: 600px; font-size: 20px; text-decoration: none;" class= "text-light"  > <b>Home</b> </a>
          <a href="#bookings" style=" margin-left:20px; color:black; font-weight: 450px; font-size: 20px; text-decoration: none;" class= "text-secondary"  > <b>Bookings</b> </a>
          <a href="#about" style=" margin-left:20px; color:black; font-weight: 450px; font-size: 20px; text-decoration: none;" class= "text-secondary"  > <b>Our Teams</b> </a>
        </div>
        
        
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
          <?php else : ?> 
        <div>
            <a href="register.php" style="color:black; font-weight: 600; font-size: 18px; text-decoration: none;" class= "text-dark"  > Register </a>
            <a href="login.php"  style="margin-left:20px; text-decoration: none; font-weight: 600; font-size: 18px;" class= "text-dark"> Login </a></div>

      <?php endif ; ?>
      </nav>

    <?php else : ?>
    
    <nav class="navbar navbar-light" style="background-color: black; padding-left: 15%; padding-right: 15%;">
    <a style="color:white; font-weight: bold; font-size: 20px;">EAD Travel</a>  
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
          <?php else : ?> 
        <div>
            <a href="register.php" style="color:black; font-weight: 600; font-size: 18px; text-decoration: none;" class= "text-dark"  > Register </a>
        <a href="login.php"  style="margin-left:20px; text-decoration: none; font-weight: 600; font-size: 18px;" class= "text-dark"> Login </a></div>

    <?php endif ;?>
    </nav>
    <!-- Navbar -->
<?php endif ;?>
        
        <!-- Home -->
        <section id="home">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/carousel-3.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/carousel-2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/carousel-1.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        </section>
        <!-- Home -->
        
        <section id="bookings" style="margin-top:80px">
        <div class="section-header text-center mt-4" >
            <p>Choose Your Plan</p>
            <h2>AutoWash - Westcoast Services</h2>
        </div>
    <div class="container">
        
        <!-- Card 1 -->
        <div class="card1">
            <div class="card" style="height:530px">
                <img src="img/2.jpg" class="card-img-top" style= "height :230px;">
                <div class="card-body" >
                  <h5 class="card-title"><b>Package 01</b></h5>
                  <p class="card-text">Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                  <div class="position-absolute bottom-0 start-50 translate-middle-x mb-4" style="width: 80%;">
                  <hr>
                  <h5 class="card-title"> Rp. 150.000 </h5>
                  <?php if($login === true) : ?>
                  <button type="button" class="btn btn-custom text-center gap-2 col-12 mx-auto" data-bs-toggle="modal" data-bs-target="#Parai">Book</button>
                  <?php else : ?>
                    <a type="button" class="btn btn-custom text-center gap-2 col-12 mx-auto" href="login.php">Book</a>
                  <?php endif ; ?>
                  </div>
                </div>
              </div>
        </div>
                    <!-- Modal -->
                    <div class="modal fade" id="Parai" tabindex="-1" aria-labelledby="Wash and Wax" aria-hidden="true">
                    <div class="modal-dialog">
                    <form action = "" method="POST">
                        <div class="modal-content">
                        <div class="modal-body">
                        <div class="mb-0">
                        <label for="tanggal" class="form-label">Booking Date</label>
                        <input type="date" class="form-control" id="tanggal" placeholder="mm / dd / yy" name="tanggal" required name="tanggal">
                        <input type="hidden" class="form-control" name="harga" value="150000">
                        <input type="hidden" class="form-control" name="nama_tempat" value="Package 01">
                        <input type="hidden" class="form-control" name="lokasi" required value="Wash & Wax">
                        <input type="hidden" class="form-control" name="id" required value= <?= $_SESSION['id'] ?> >
                    </div>
                        </div>
                        <div class="modal-footer mb-0">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name= "add" class="btn btn-primary">Add</button>
                        </div>
                        </form>
                        </div>
                    </div>
                    </div>
                    <!-- Modal -->
                    <!-- Card 1 -->
        
        <!-- Card 2 -->
        <div class="card2">
            <div class="card" style="height:530px">
                <img src="img/1.jfif" class="card-img-top" style= "height :230px;" >
                <div class="card-body">
                  <h5 class="card-title"><b>Package 02</b></h5>
                  <p class="card-text">Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                  <div class="position-absolute bottom-0 start-50 translate-middle-x mb-4" style="width: 80%;" >
                  <hr>
                  <h5 class="card-title"> Rp. 500.000 </h5>
                  <?php if($login === true) : ?>
                  <button type="button" class="btn btn-custom text-center gap-2 col-12 mx-auto" data-bs-toggle="modal" data-bs-target="#Nusa">Book</button>
                  <?php else : ?>
                    <a type="button" class="btn btn-custom text-center gap-2 col-12 mx-auto" href="login.php">Book</a>
                  <?php endif ; ?>
                </div>
                </div>
              </div>
        </div>
                    <!-- Modal -->
                    <div class="modal fade" id="Nusa" tabindex="-1" aria-labelledby="Package 02" aria-hidden="true">
                    <div class="modal-dialog">
                    <form action = "" method="POST">
                        <div class="modal-content">
                        <div class="modal-body">
                        <div class="mb-0">
                        <label for="tanggal" class="form-label">Tanggal Perjalanan</label>
                        <input type="date" class="form-control" id="tanggal" placeholder="mm / dd / yy" name="tanggal" required name="tanggal">
                        <input type="hidden" class="form-control" name="harga" value="500000">
                        <input type="hidden" class="form-control" name="nama_tempat" value="Package 02">
                        <input type="hidden" class="form-control" name="lokasi" required value="Wash and Detailing">
                        <input type="hidden" class="form-control" name="id" required value= <?= $_SESSION['id'] ?> >

                    </div>
                        </div>
                        <div class="modal-footer mb-0">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name= "add" class="btn btn-primary">Add</button>
                        </div>
                        </form>
                        </div>
                    </div>
                    </div>
                    <!-- Modal -->
                    <!-- Card 2 -->
                    
                    


        <!-- Card 3 -->
        <div class="card3">
            <div class="card" style="height:530px">
                <img src="img/3.jpg" class="card-img-top" style= "height :230px;">
                <div class="card-body">
                  <h5 class="card-title"><b>Package 03</b></h5>
                  <p class="card-text">Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                  <div class="position-absolute bottom-0 start-50 translate-middle-x mb-4" style="width: 80%;">
                  <hr>
                  <h5 class="card-title"> Rp. 2.000.000 </h5>
                  <?php if($login === true) : ?>
                  <button type="button" class="btn btn-custom text-center gap-2 col-12 mx-auto" data-bs-toggle="modal" data-bs-target="#Rinjan">Book</button>
                  <?php else : ?>
                    <a type="button" class="btn btn-custom text-center gap-2 col-12 mx-auto" href="login.php">Book</a>
                  <?php endif ; ?>
                  </div>
                </div>
              </div>
        </div>        
</div>              
                    <!-- Modal -->
                    <div class="modal fade" id="Rinjan" tabindex="-1" aria-labelledby="Package 03" aria-hidden="true">
                    <div class="modal-dialog">
                    <form action = "" method="POST">
                        <div class="modal-content">
                        <div class="modal-body">
                        <div class="mb-0">
                            
                        <label for="tanggal" class="form-label">Tanggal Perjalanan</label>
                        <input type="date" class="form-control" id="tanggal" placeholder="mm / dd / yy" name="tanggal" required name="tanggal">
                        <input type="hidden" class="form-control" name="harga" value="2000000">
                        <input type="hidden" class="form-control" name="nama_tempat" value="Package 03">
                        <input type="hidden" class="form-control" name="lokasi" required value="Wash and Coating">
                        <input type="hidden" class="form-control" name="id" required value= <?= $_SESSION['id'] ?> >

                    </div>
                        </div>
                        <div class="modal-footer mb-0">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name= "add" class="btn btn-primary">Add</button>
                        </div>
                        </form>
                        </div>
                    </div>
                    </div>
                    <!-- Modal -->
                    <!-- Card 3 -->
                  </section>
        
        <!-- Team Start -->
        <section id="about" style="margin-top:80px">
        <div class="team">
            <div class="grid">
                <div class="section-header text-center mt-4">
                    <p>Meet Our Team</p>
                    <h2>Our Engineers & Workers</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-1.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Donald John</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-2.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Adam Phillips</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-3.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Thomas Olsen</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-4.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>James Alien</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="grid">
                <div class="section-header text-center">
                    <p>Get In Touch</p>
                    <h2>Contact for any query</h2>
                </div>
                    <div class="col-md-7">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                <div class="control-group">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit" id="sendMessageButton">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15864.266292373652!2d106.80570796977537!3d-6.25496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f110e6204273%3A0x3d9b69fbc42bebf!2sScuto%20Platinum%20Kemang!5e0!3m2!1sen!2sid!4v1640317253330!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
                    
    <!-- Footer Start -->
    <div class="footer">
            <div class="">
                <div class="row">
                    <div class="col-lg-3 col-md-6" style="margin-left:100px">
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