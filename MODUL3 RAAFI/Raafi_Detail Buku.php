<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            .center {
                display: block;
                    margin-left: auto;
                    margin-right: auto;
                    width: 50%;
            }

        </style>
    </head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!--Navbar-->
    <section id="Navbar">
        <section id="nav">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <img src="img/logo-ead.png" width="150px" height="60px">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="card-body" style="text-align: right; ">
                            <a class="btn btn-primary" href="Raafi_Tambah Buku.php">Tambah Buku</a>
                        </div>
                    </div>
                </div>
            </nav>
        </section>
    </section>
    <!--Navbar-->

    <!--Content-->
    <div class="container">
        <?php
         include './pengaturan/connect.php';include './pengaturan/create.php';

                ini_set('display_errors', '1');ini_set('display_startup_errors', '1');error_reporting(E_ALL);ini_set('error_reporting', E_ALL);$IDBO = $_GET['id_buku'];
                $KUER = "SELECT * FROM buku_table where id_buku=$IDBO;";
                $CQL = mysqli_query($sambung, $KUER);
                ?>

        <div class="row">

          
            <<?php if ($row = mysqli_fetch_array($CQL)) {}  ?>

        <section id="title">
            <div class="container-md" style="margin-left: auto; margin-right:auto; max-width : 80%; margin-top : 20px;">
                <h3
                    style="text-align: center; color:black; height:40px; vertical-align: middle; line-height: 40px;">
                    <b>Detail Buku</b>
                </h3>
            </div>

            <div class="col-md-10 col-lg-offset-10 " style="margin-left: 8em">
                <div class="card card-home">
                    <img class="card-img-top Poto-pos" src="<?php echo $row['gambar'] ?>" alt="Card image cap">         
                <div class="card-body">
                
                <p> <b> Judul: </b></p> 
                <p><?php echo $row['judul_buku'] ?></p>

                <p class="card-text">

                <p> <b> Penulis: </b></p>                       
                <p><i ></i><?php echo $row['penulis_buku'] ?></p>

                <p> <b> Tahun Terbit: </b></p>
                <p><i ></i><?php echo $row['tahun_terbit'] ?></p>

                <p> <b> Deskripsi : </b></p>
                <p><?php echo $row['deskripsi'] ?></p>

                <p> <b> Bahasa: </b></p>
                <p><i></i><?php echo $row['bahasa'] ?></p>

                <p> <strong> Tag: </strong></p>
                <p><i></i><?php echo $row['tag'] ?></p>

            <div class="btn-group left">
                <button type="button" class="btn btn-primary" style="width: 400px; margin-left: 0px">Sunting</button>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-danger" style="width: 400px; margin-left: 40px">Hapus</button>
            </div>
        </section>
    </div>
    <!--Content-->

    <!-- Footer-->
    <footer class="text-center text-lg-start bg-light text-muted ">

        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom" style="margin-top:100px">
            <div class="center container p-4 ">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0 center">
                    <img src="img/logo-ead.png" width="40%" height="30%" class="center" style="margin-bottom: 0.5cm;">
                    <p class="center" style="text-align: center;"><b>Perpustakaan EAD</b></p>
                    <p class="center" style="text-align: center;">@ Raafi_1202190154</p>
                </div>
            </div>
        </section>
    </footer>
    <!-- Footer-->
    
</body>
</html>