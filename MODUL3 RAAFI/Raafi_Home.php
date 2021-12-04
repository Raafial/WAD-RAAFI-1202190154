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
        <!--Navbar-->
    
    <!--Content-->
   <div class="container">
    <?php
    include './pengaturan/connect.php';include './pengaturan/create.php';

    $KIR = "SELECT * FROM buku_table";
    $CQL = mysqli_query($sambung, $KIR);

    ?>

    <?php
    if (mysqli_num_rows($CQL) == 0) { ?><br><br><br><br>  
      <center> <h1 class="h-100" >Belum Ada Buku<hr ></h1> </center>
      <div class=" d-flex justify-content-center align-items-center">
        
        <h4 class="h-100">Silahkan Menambahkan Buku</h4>  
      </div>
    <?php } ?>
    <div class="row">
      <?php while ($row = mysqli_fetch_array($CQL)) {  ?>
        <p class="help-block text-danger"></p>
        <div class="col-md-8">
            <div class="card card-home">
                <img class="card-img-top Poto-pos" src="<?php echo $row['gambar'] ?>" alt="<?php echo $row['gambar'] ?>">
                <div class="card-body">
                <h3><?php echo $row['judul_buku'] ?></h3>
                <p class="card-text">
                <p><?php echo $row['deskripsi'] ?></p>
            </div>
         
            <div class="card-footer bg-transparent ">
                <a href="Raafi_Detail Buku.php?id_buku=<?php echo $row['id_buku'] ?>">
                    <p style="text-align: end;"><button type="button" class="btn btn-primary">Tampilkan Lebih Lanjut</button></p>
                </a>
            </div>
        </div>
     
      <?php } ?>
    </div>
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
    </section>
</body>
</html>