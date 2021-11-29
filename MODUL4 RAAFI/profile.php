<?php
require "connect.php";

$id = $_SESSION['id'];

$tampil = open("SELECT * FROM user WHERE id = '$id' ");
$alert=0;
if(isset($_POST['simpan'])) {
    if(change($_POST)) {
        $alert = 1;
    } else {
        $alert = 2;
    }
}

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
        margin : 100px auto;
        width: 50%;
        padding: 10px 5% ;
    }
</style>
<title>Profile</title>
</head>

<body style="background-color:#FBECE9">
<body>
      
<!-- Navbar -->
<?php if($warna === "cyan") :?>
    <nav class="navbar navbar-light" style="background-color: #13CDE3; padding-left: 15%; padding-right: 15%;">
        <a style="color:black; font-weight: bold; font-size: 20px; text-decoration:none;" href="index.php">EAD Travel</a>  
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
            <li><a class="dropdown-item" href="">Profile</a></li>
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
            <li><a class="dropdown-item" href="">Profile</a></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul>
        </div>
    <?php endif ;?>
    </nav>
<?php endif ;?>
<!-- Navbar -->

<?php if ($alert === 1) : ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
Berhasil update profile
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php elseif ($alert === 2) : ?> 
<div class="alert alert-danger alert-dismissible fade show" role="alert">
Gagal update profile
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif ; ?>

      <div class="containerform p-3 mb-5 bg-body rounded">
        <h1 style="text-align: center;">Profile</h1>
        <hr>
        <form action="profile.php" method="POST">

        <input type="hidden" class="form-control" name="pwlama" value= <?= $tampil[0]['password'] ?> >
        
                <div class="row mb-0">
                  <label for="email" class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                    <p><?= $tampil[0]['email'] ?></p>
                  </div>
                </div>

                <div class="row mb-3">
                    <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="nama" value= "<?= $tampil[0]['nama']?>" name="nama">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="hp" class="col-sm-3 col-form-label">Nomor Handphone</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="hp" value="<?= $tampil[0]['no_hp'] ?>" name="no_hp">
                    </div>
                </div>
                  <hr>

                <div class="row mb-3">
                    <label for="pw" class="col-sm-3 col-form-label">Kata Sandi</label>
                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="pw" placeholder="Password" name="pw">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="kpw" class="col-sm-3 col-form-label">Konfirmasi Kata Sandi</label>
                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="kpw" placeholder="Ulangi Password" name="kpw">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="warna" class="col-sm-3 col-form-label">Warna Navbar</label>
                    <div class="col-sm-9">
                    <select class="form-select" id="warna" name="warna">
                        <option <?php if ($_COOKIE['warna'] === "cyan") {echo 'selected'; }?> value="cyan">cyan</option>
                        <option <?php if ($_COOKIE['warna'] === 'dark boba') {echo 'selected'; }?> value="dark boba"> dark boba</option>
                      </select>
                    </div>
                </div>


            <div class="modal-footer m-0">
                <center><button type="submit" class="btn btn-primary col-4 mx-auto mb-3 " name="simpan" style="width: 100px">Simpan</button></center>
                <center><button type="submit" class="btn btn-warning col-4 mx-auto mb-3" style="width: 100px">Cancel</button></center>
            </div>
          </form>
    </div>

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