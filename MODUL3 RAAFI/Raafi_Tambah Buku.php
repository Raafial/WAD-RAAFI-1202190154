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
                            <a class="btn btn-primary" href="Raafi_Tambah Buku">Tambah Buku</a>
                        </div>
                    </div>
                </div>
            </nav>
        </section>
    </section>
    <!--Navbar-->

    <!--Title-->
    <div class="container">
        <section id="form">
            <div class="container-md" style="margin-left: auto; margin-right:auto; max-width : 80%; margin-top : 20px; margin-bottom : 30px;">
                <h3
                    style="text-align: center; color:black; height:40px; vertical-align: middle; line-height: 40px;">
                    <b>Tambah Data Buku</b>
                </h3>
            </div>
        </section>
    </div>
    <!--Title-->

    <div class="container mx-auto my-5">
    <?php
    include './pengaturan/connect.php';include './pengaturan/create.php';
    ?>

            <form action="Raafi_Home.php" method="post" enctype="multipart/form-data">
                <div class="row justify-content-center" style="">
                    <div class="col-lg-12 col-lg-offset-12 ">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="deskripsi"><b>Judul Buku</b></label>
                                    <input required type="text" name="Back1" id="" class="form-control" placeholder="Contoh: Pemrograman Web Bersama EAD" aria-describedby="helpId">
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi"><b>Penulis</b></label>
                                    <input class="form-control" name="Back2" type="text" value="Raafi_1202190154" aria-label="readonly input example" readonly>
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi"><b>Tahun Terbit</b></label>
                                    <input required type="text" name="Back3" id="" class="form-control" placeholder="Contoh: 1990" aria-describedby="helpId">
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi"><b>Deskripsi</b></label>
                                    <textarea required class="form-control" name="Back4" id="" rows="3" placeholder="Contoh: Buku ini menjelaskan tentang ..."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi"><b>Bahasa</b></label>
                                    <label class="radio-inline" style="margin-left:15px" for="gridRadios2">
                                        <input class="form-check-input" type="radio" name="Blas" id="gridRadios2" value="Indonesia">
                                        Indonesia
                                    </label>
                                    <label class="radio-inline" style="margin-left:75px" for="gridRadios3">
                                        <input class="form-check-input" type="radio" name="Blas" id="gridRadios3" value="Lainnya">
                                        Lainnya
                                    </label>
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi"><b>Tag</b></label>
                                    <label for="radio-inline" style="margin-left:40px">
                                        <input type="checkbox" class="form-check-input" name="DAG[]" id="" value="Pemrograman" >&nbsp;Pemrograman&nbsp;
                                    </label>

                                    <label for="radio-inline" style="margin-left:40px">
                                        <input type="checkbox" class="form-check-input" name="DAG[]" id="" value="Website" >&nbsp;Website&nbsp;
                                    </label>

                                    <label for="radio-inline" style="margin-left:40px">
                                        <input type="checkbox" class="form-check-input" name="DAG[]" id="" value="Java" >&nbsp;Java&nbsp;
                                    </label>

                                    <label for="radio-inline" style="margin-left:40px">
                                        <input type="checkbox" class="form-check-input" name="DAG[]" id="" value="OOP" >&nbsp;OOP&nbsp;
                                    </label>
                    
                                    <label for="radio-inline" style="margin-left:40px">
                                        <input type="checkbox" class="form-check-input" name="DAG[]" id="" value="MVC" >&nbsp;MVC&nbsp;
                                    </label>

                                    <label for="radio-inline" style="margin-left:40px">
                                        <input type="checkbox" class="form-check-input" name="DAG[]" id="" value="Kalkulus" >&nbsp;Kalkulus&nbsp;
                                    </label>

                                    <label for="radio-inline" style="margin-left:40px">
                                        <input type="checkbox" class="form-check-input" name="DAG[]" id="" value="Lainnya" >&nbsp;Lainnya&nbsp;
                                    </label>
                                    <p class="help-block text-danger"></p>
                    
                                <div class="form-group">
                                    <h6 ><b>Gambar</b></h6>
                 
                                <div class="col-md-12">
          
                                <div class="custom-file">
                                    <input type="file" name="inputImg" class="custom-file-input" id="customFile">
                                </div>
                
                                <div class="form-group  text-center" style="margin-top: 30px">
                                    <button type="submit" name="submit" class="btn btn-primary">+ TAMBAH</button>
                                </div>
                            </div>
                        </div>
                    </div>


            

     
        </div>
              </div>
                  </form>

  </div>

    <!-- Footer-->
    <p class="help-block text-danger"></p>
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