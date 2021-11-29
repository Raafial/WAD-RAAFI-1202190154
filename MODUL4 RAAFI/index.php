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
<title>Index</title>
</head>

<body style="background-color:#FBECE9">
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

    <!-- Navbar -->
    <?php if($warna === "cyan") :?>
    <nav class="navbar navbar-light" style="background-color: #13CDE3; padding-left: 15%; padding-right: 15%;">
        <a style="color:black; font-weight: bold; font-size: 20px;">EAD Travel</a>  
        <?php if ($login === true ) :?>
          <div class="nav-item dropdown">
            <a style = "float:left; color:black;" type="button" href="bookings.php">
          <svg style="width:24px;height:24px" viewBox="0 0 24 24">
        <path fill="currentColor" d="M17,18C15.89,18 15,18.89 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20C19,18.89 18.1,18 17,18M1,2V4H3L6.6,11.59L5.24,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42A0.25,0.25 0 0,1 7.17,14.75C7.17,14.7 7.18,14.66 7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.58 17.3,11.97L20.88,5.5C20.95,5.34 21,5.17 21,5A1,1 0 0,0 20,4H5.21L4.27,2M7,18C5.89,18 5,18.89 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20C9,18.89 8.1,18 7,18Z" />
        </svg>
        </a>
          <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

    <div class="container">

        <div class="header p-5 mb-2 bg-dark text-white"> <h1>EAD TRAVEL</h1></div>
        
        <!-- Card 1 -->
        <div class="card1">
            <div class="card" style="height:530px">
                <img src="img/raja_ampat.jpg" class="card-img-top" style= "height :230px;">
                <div class="card-body" >
                  <h5 class="card-title">Raja Ampat, Papua</h5>
                  <p class="card-text">Kepulauan Raja Ampat merupakan rangkaian empat gugusan pulau yang berlokasi di barat bagian Kepala Burung Pulau Papua. Secara administrasi, gugusan ini berada di bawah Kabupaten Raja Ampat, Provinsi Papua Barat.</p>
                  <div class="position-absolute bottom-0 start-50 translate-middle-x mb-4" style="width: 80%;">
                  <hr>
                  <h5 class="card-title"> Rp. 7.000.000 </h5>
                  <?php if($login === true) : ?>
                  <button type="button" class="btn btn-primary text-center gap-2 col-12 mx-auto" data-bs-toggle="modal" data-bs-target="#Parai">Pesan Tiket</button>
                  <?php else : ?>
                    <a type="button" class="btn btn-primary text-center gap-2 col-12 mx-auto" href="login.php">Pesan Tiket</a>
                  <?php endif ; ?>
                  </div>
                </div>
              </div>
        </div>
                    <!-- Modal -->
                    <div class="modal fade" id="Parai" tabindex="-1" aria-labelledby="Raja Ampat" aria-hidden="true">
                    <div class="modal-dialog">
                    <form action = "" method="POST">
                        <div class="modal-content">
                        <div class="modal-body">
                        <div class="mb-0">
                        <label for="tanggal" class="form-label">Tanggal Perjalanan</label>
                        <input type="date" class="form-control" id="tanggal" placeholder="mm / dd / yy" name="tanggal" required name="tanggal">
                        <input type="hidden" class="form-control" name="harga" value="7000000">
                        <input type="hidden" class="form-control" name="nama_tempat" value="Raja Ampat">
                        <input type="hidden" class="form-control" name="lokasi" required value="Papua">
                        <input type="hidden" class="form-control" name="id" required value= <?= $_SESSION['id'] ?> >
                    </div>
                        </div>
                        <div class="modal-footer mb-0">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name= "add" class="btn btn-primary">Tambahkan</button>
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
                <img src="img/bromo.jpg" class="card-img-top" style= "height :230px;" >
                <div class="card-body">
                  <h5 class="card-title">Gunung Bromo, Malang</h5>
                  <p class="card-text">Gunung Bromo adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten.</p>
                  <div class="position-absolute bottom-0 start-50 translate-middle-x mb-4" style="width: 80%;" >
                  <hr>
                  <h5 class="card-title"> Rp. 2.000.000 </h5>
                  <?php if($login === true) : ?>
                  <button type="button" class="btn btn-primary text-center gap-2 col-12 mx-auto" data-bs-toggle="modal" data-bs-target="#Nusa">Pesan Tiket</button>
                  <?php else : ?>
                    <a type="button" class="btn btn-primary text-center gap-2 col-12 mx-auto" href="login.php">Pesan Tiket</a>
                  <?php endif ; ?>
                </div>
                </div>
              </div>
        </div>
                    <!-- Modal -->
                    <div class="modal fade" id="Nusa" tabindex="-1" aria-labelledby="Gunung Bromo" aria-hidden="true">
                    <div class="modal-dialog">
                    <form action = "" method="POST">
                        <div class="modal-content">
                        <div class="modal-body">
                        <div class="mb-0">
                        <label for="tanggal" class="form-label">Tanggal Perjalanan</label>
                        <input type="date" class="form-control" id="tanggal" placeholder="mm / dd / yy" name="tanggal" required name="tanggal">
                        <input type="hidden" class="form-control" name="harga" value="2000000">
                        <input type="hidden" class="form-control" name="nama_tempat" value="Gunung Bromo">
                        <input type="hidden" class="form-control" name="lokasi" required value="Malang">
                        <input type="hidden" class="form-control" name="id" required value= <?= $_SESSION['id'] ?> >

                    </div>
                        </div>
                        <div class="modal-footer mb-0">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name= "add" class="btn btn-primary">Tambahkan</button>
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
                <img src="img/tanah_lot.jpg" class="card-img-top" style= "height :230px;">
                <div class="card-body">
                  <h5 class="card-title">Tanah Lot, Bali</h5>
                  <p class="card-text">Tanah Lot adalah salah satu Pura (Tempat Ibadah Umat Hindu) yang sangat disucikan di Bali, Indonesia. Di sini ada dua pura yang terletak di atas batu besar, Satu terletak di atas bongkahan batu dan satunya terletak di atas tebing.</p>
                  <div class="position-absolute bottom-0 start-50 translate-middle-x mb-4" style="width: 80%;">
                  <hr>
                  <h5 class="card-title"> Rp. 5.000.000 </h5>
                  <?php if($login === true) : ?>
                  <button type="button" class="btn btn-primary text-center gap-2 col-12 mx-auto" data-bs-toggle="modal" data-bs-target="#Rinjan">Pesan Tiket</button>
                  <?php else : ?>
                    <a type="button" class="btn btn-primary text-center gap-2 col-12 mx-auto" href="login.php">Pesan Tiket</a>
                  <?php endif ; ?>
                  </div>
                </div>
              </div>
        </div>        
</div>              
                    <!-- Modal -->
                    <div class="modal fade" id="Rinjan" tabindex="-1" aria-labelledby="Tanah Lot" aria-hidden="true">
                    <div class="modal-dialog">
                    <form action = "" method="POST">
                        <div class="modal-content">
                        <div class="modal-body">
                        <div class="mb-0">
                            
                        <label for="tanggal" class="form-label">Tanggal Perjalanan</label>
                        <input type="date" class="form-control" id="tanggal" placeholder="mm / dd / yy" name="tanggal" required name="tanggal">
                        <input type="hidden" class="form-control" name="harga" value="5000000">
                        <input type="hidden" class="form-control" name="nama_tempat" value="Tanah Lot">
                        <input type="hidden" class="form-control" name="lokasi" required value="Bali">
                        <input type="hidden" class="form-control" name="id" required value= <?= $_SESSION['id'] ?> >

                    </div>
                        </div>
                        <div class="modal-footer mb-0">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name= "add" class="btn btn-primary">Tambahkan</button>
                        </div>
                        </form>
                        </div>
                    </div>
                    </div>
                    <!-- Modal -->
                    <!-- Card 3 -->
                    
    <!-- Footer -->  
    <?php if($warna === "cyan") :?>
        <footer class= "fixed-bottom text-center" style="background-color: #13CDE3; height: 50px;"> 
        <a class = "text-secondary" style= "text-decoration: none">@ 2021 Copyright: <a href="" style= "text-decoration: none;" type="button" data-bs-toggle="modal" data-bs-target="#foot"> RAAFI ALBAR_1202190154</a> </a> 
    </footer>
    <?php else :?>
        <footer class= "fixed-bottom text-center" style="background-color: black ; height: 50px;">  
        <a class = "text-secondary" style= "text-decoration: none">@ 2021 Copyright: <a href="" style= "text-decoration: none;" type="button" data-bs-toggle="modal" data-bs-target="#foot"> RAAFI ALBAR_1202190154</a> </a> 
    </footer>
<?php endif ;?>

      <div class="modal fade" id="foot" tabindex="-1" aria-labelledby="foot" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Created By</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <h5>Nama : Raafi Albar</h5>
              <h5>NIM  : 1202190154</h5>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
                    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>