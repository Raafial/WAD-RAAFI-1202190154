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
                  
                            <h6>Judul Buku</h6>
                  
                            <input required type="text" name="Back1" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  
                          </div>

              <div class="form-group">
      
                <h6 style="margin-top:5px;"> Penulis</h6>
     
                   <input required type="text" name="Back2" id="" class="form-control" placeholder="" aria-describedby="helpId">
      
              </div>

                               <div class="form-group">
                     
                                <h6 style="margin-top:5px;">Tahun Terbit</h6>
                          
                                     <input required type="text" name="Back3" id="" class="form-control" placeholder="" aria-describedby="helpId">
      
              </div>

      

              <div class="form-group">
                <h6 style="margin-top:5px;">Deskripsi</h6>
                 <textarea required class="form-control" name="Back4" id="" rows="3"></textarea>
              </div>

 <div class="my-2">
                   <label for=""><strong>Bahasa</strong></label>
                <div class="">
                          <label class="col-md-6 form-check">
                         <div class="row">
               
                      <div class="form-check col-md-6">
                            <input class="form-check-input" type="radio" name="Blas" id="gridRadios2" value="Indonesia">
                                 <label class="form-check-label" for="gridRadios2">
                           Indonesia
                        </label>
                       </div>
                             <div class="form-check col-md-6">
                                  <input class="form-check-input" type="radio" name="Blas" id="gridRadios3" value="Lainnya">
                          <label class="form-check-label" for="gridRadios3">
                                 Lainnya


                        </label>
                      </div>
          </div>
        </div>

              <div class="form-group">
                    <h6 style="margin-top:5px;">Tag</h6>
                 
                    <div class="col-md-12">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="DAG[]" id="" value="Pemograman" checked>&nbsp;Pemograman&nbsp;
             
                        <input type="checkbox" class="form-check-input" name="DAG[]" id="" value="Website" checked>&nbsp;Website&nbsp;
             
                              <input type="checkbox" class="form-check-input" name="DAG[]" id="" value="Java" checked>&nbsp;Java&nbsp;
             
                               <input type="checkbox" class="form-check-input" name="DAG[]" id="" value="OOP" checked>&nbsp;OOP&nbsp;
             
                            <input type="checkbox" class="form-check-input" name="DAG[]" id="" value="MVC" checked>&nbsp;MVC&nbsp;
                
                        <input type="checkbox" class="form-check-input" name="DAG[]" id="" value="Kalkulus" checked>&nbsp;Kalkulus&nbsp;
      
                  <input type="checkbox" class="form-check-input" name="DAG[]" id="" value="Lainnya" checked>&nbsp;Lainnya&nbsp;
             

                      </label>
                    </div>


              </div>


<div class="form-group">
                <h6 >Gambar</h6>
                 
                    <div class="col-md-12">
          <div class="custom-file">
                   <input type="file" name="inputImg" class="custom-file-input" id="customFile">
<!--                   <label class="custom-file-label" for="customFile">Choose file</label> -->
                </div>
                    <!-- <input class="form-control" type="file" name="Gambar" class="custom-file-input" id="customFile" multiple> -->
                    </div>


              </div>


             
                       <div class="form-group  text-center" style="margin-top: 30px">
          <button type="submit" name="submit" class="btn btn-primary">+ TAMBAH</button>
                
              </div>
                    </div>

                  </label>
                </div>
              </div>


            

     
        </div>
              </div>
                  </form>

  </div>

    <!-- Footer-->
    <footer class="text-center text-lg-start bg-light text-muted ">

        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom" style="margin-top:60px">
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