<!doctype html>
<html lang="en">
<?php session_start();
include 'connect.php';
$db = new database();
$show = "";
if (isset($_SESSION['logged'])) {
    # code...
} else {
    $db->movePage("login.php");
}
?>

<head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/connect/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&family=EB+Garamond&family=Nunito:wght@700&family=Pacifico&display=swap" rel="stylesheet">
    <style>
        .p-0 {
            padding-right: 0;
            padding-left: 0;
        }

        img {
            object-fit: cover;
            height: 270px;
            display: block;
            position: relative;
            overflow: hidden;
            transition: all ease 1s;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style="background-color:#FBECE9">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #13CDE3">
        <a class="navbar-brand" href="index.php"><b>EAD Travel</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mr-auto"></ul>
            <div class="navbar-nav">
                <li class=" nav nav-item dropdown" style="text-color: #000000">
                    <a class=" dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $_SESSION['user-name'] ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="profile.php"><button type="button" class="btn btn-block">Profile</button></a>
                        <div class="dropdown-divider"></div>
                        <form action="" method="post">
                            <button type="submit" name="logout" class="btn btn-block">Logout</button>
                        </form>
                    </div>
                    <div class="col-md-3"></div>
                </li>
            </div>
        </div>
    </nav>
    <!-- Navbar -->


    <div class="container">
        <?php
        if (strpos($_SERVER['REQUEST_URI'], "in_") !== false) {
            $db->msgSuccess("Berhasil Login");
        }
        ?>
    </div>

    <div class="container <?php:$show?>">
        <div class="container content">
            <div class="row">
                <div class="col-sm-12 header">
                    <div style="width: 100%; text-align:center; padding:0px"> 
                        <div class="p-5 mb-2 bg-dark text-white">
                            <h1><b>EAD Travel</b></h1>
                        </div>
                    </div>
                </div>

                <!-- Card 1 -->
                <div class="col-sm-4 p-0">
                    <div class="card text-left" style="height: 100%;">
                        <img class="card-img-top" src="img/raja_ampat.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Raja Ampat, Papua</h4>
                            <p class="card-text">
                                <p>Kepulauan Raja Ampat merupakan rangkaian empat gugusan pulau yang berdekatan dan berlokasi di barat bagian Kepala Burung (Vogelkoop) Pulau Papua. Secara administrasi, gugusan ini berada di bawah Kabupaten Raja Ampat, Provinsi Papua Barat. Kepulauan ini sekarang menjadi tujuan para penyelam yang tertarik akan keindahan pemandangan bawah lautnya.</p>
                            </p>
                            <hr>
                            <p><b>Rp. 7.000.000</b></p>
                        </div>
                        <div class="card-footer bg-transparent w-100">
                            <form action="" method="post">
                                <button type="button" name="add-product" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal1">
                                    Pesan Tiket
                                </button>
                            </form>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-body">
                                <div class="container">
                                <div class="row">
                                <label for="tanggal" class="form-label">Tanggal Perjalanan</label>
                                <input type="date" class="form-control" id="tanggal" placeholder="mm / dd / yy" name="tanggal" required name="tanggal">

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
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 1 -->

                <!-- Card 2 -->
                <div class="col-sm-4 p-0">
                    <div class="card text-left">
                        <img class="card-img-top" src="img/bromo.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Gunung Bromo, Malang</h4>
                            <p class="card-text">
                                <p>Gunung Bromo adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten, yakni Kabupaten Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang, dan Kabupaten Malang. Gunung Bromo terkenal sebagai objek wisata utama di Jawa Timur.</p>
                            </p>
                            <hr>
                            <p><b>Rp. 2.000.000</b></p>
                        </div>
                        <div class="card-footer bg-transparent w-100">
                            <form action="" method="post">
                                <button type="button" name="add-product" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal2">
                                    Pesan Tiket
                                </button>
                            </form>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-body">
                                <div class="container">
                                <div class="row">
                                <label for="tanggal" class="form-label">Tanggal Perjalanan</label>
                                <input type="date" class="form-control" id="tanggal" placeholder="mm / dd / yy" name="tanggal" required name="tanggal">
                                
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
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->

                <!-- Card 3 -->
                <div class="col-sm-4 p-0">
                    <div class="card text-left" style="height: 100%;">
                        <img class="card-img-top" src="img/tanah_lot.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Tanah Lot, Bali</h4>
                            <p class="card-text">
                                <p>Tanah Lot adalah salah satu Pura (Tempat Ibadah Umat Hindu) yang sangat disucikan di Bali, Indonesia. Di sini ada dua pura yang terletak di atas batu besar. Satu terletak di atas bongkahan batu dan satunya terletak di atas tebing mirip dengan Pura Uluwatu. Pura Tanah Lot ini merupakan bagian dari pura Dang Kahyangan. Pura Tanah Lot merupakan pura laut tempat pemujaan dewa-dewa.</p>
                            </p>
                            <hr>
                            <p><b>Rp. 5.000.000</b></p>
                        </div>
                        <div class="card-footer bg-transparent w-100">
                        <form action="" method="post">
                                <button type="button" name="add-product" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal3">
                                    Pesan Tiket
                                </button>
                            </form>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-body">
                                <div class="container">
                                <div class="row">
                                <label for="tanggal" class="form-label">Tanggal Perjalanan</label>
                                <input type="date" class="form-control" id="tanggal" placeholder="mm / dd / yy" name="tanggal" required name="tanggal">
                                
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
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
            </div>   
        </div>
    </div>

        <!-- Footer -->
        <footer class="bg-light text-center text-lg-start" style="margin-top:50px">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: #13CDE3;">
                © 2021 Copyright:
                <a class="text-dark" data-toggle="modal" data-target="#exampleModal">RAAFI ALBAR_1202190154</a>
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
        
        <div class="container d-none">
            <?php
            for ($i = 0; $i < 3; $i++) {
                echo $_SESSION['user-name'] . '<br>';
                echo $_SESSION['user-id'] . '<br>';
            }
            ?>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/connect/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>