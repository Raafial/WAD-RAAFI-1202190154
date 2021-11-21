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
        <section id="title">
            <div class="container-md" style="margin-left: auto; margin-right:auto; max-width : 80%; margin-top : 20px;">
                <h3
                    style="text-align: center; color:black; height:40px; vertical-align: middle; line-height: 40px;">
                    <b>Detail Buku</b>
                </h3>
            </div>
            <img src="img/buku.jpg" style="margin-top:50px" class="center" width="500px" height="800px">
            <p style="text-align: center; margin-top:50px; background-color:rgb(0, 17, 255); height:3px; vertical-align: middle;"></p>

            <div class="heading"> 
                    <h6 style="text-align: left; height: 40px; vertical-align: middle; line-height: 30px; margin-bottom: 40px;">
                        <b>Judul :</b>
                    </h6>
            </div>

            <div class="heading"> 
                    <h6 style="text-align: left; height: 40px; vertical-align: middle; line-height: 30px; margin-bottom: 40px;">
                        <b>Penulis :</b>
                    </h6>
            </div>

            <div class="heading"> 
                    <h6 style="text-align: left; height: 40px; vertical-align: middle; line-height: 30px; margin-bottom: 40px;">
                        <b>Tahun Terbit :</b>
                    </h6>
            </div>

            <div class="heading"> 
                    <h6 style="text-align: left; height: 40px; vertical-align: middle; line-height: 30px; margin-bottom: 40px;">
                        <b>Deskripsi :</b>
                    </h6>
            </div>

            <div class="heading"> 
                    <h6 style="text-align: left; height: 40px; vertical-align: middle; line-height: 30px; margin-bottom: 40px;">
                        <b>Bahasa :</b>
                    </h6>
            </div>

            <div class="heading"> 
                    <h6 style="text-align: left; height: 40px; vertical-align: middle; line-height: 30px; margin-bottom: 40px;">
                        <b>Tag :</b>
                    </h6>
            </div>

            <div class="btn-group left">
                <button type="button" class="btn btn-primary" style="width: 535px; margin-left: 0px">Sunting</button>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-danger" style="width: 535px; margin-left: 40px">Hapus</button>
            </div>
        </section>
    </div>
    <!--Content-->

    <!-- Footer-->
    <footer class="text-center text-lg-start bg-light text-muted ">

        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"style="margin-top:60px">
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