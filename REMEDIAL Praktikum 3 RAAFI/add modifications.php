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
    <section id="Booking">
        <section id="nav">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="home.php">
            <img src="img/1.png"  width="70px" height="70px" style="margin-left: 80px">
        </a>
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="card-body" style="text-align: right; ">
                            <a class="btn btn-danger" href="add modifications.php">Add Car Mods</a>
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
                    <b>Add Car Mods</b>
                </h3>
            </div>
        </section>
    </div>
    <!--Title-->

    <div class="container mx-auto my-5">
    <?php
    include './pengaturan/connect.php';include './pengaturan/create.php';
    ?>

            <form action="home.php" method="post" enctype="multipart/form-data">
                <div class="row justify-content-center" style="">
                    <div class="col-lg-12 col-lg-offset-12 ">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="deskripsi"><b>Car Model</b></label>
                                    <input required type="text" name="judul" id="" class="form-control" placeholder="Your Car Model" aria-describedby="helpId">
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi"><b>Owner</b></label>
                                    <input class="form-control" name="penulis" type="text" value="Raafi Albar" aria-label="readonly input example" readonly>
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi"><b>Year</b></label>
                                    <input required type="text" name="terbit" id="" class="form-control" placeholder="Ex: 2020" aria-describedby="helpId">
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi"><b>Descriptions</b></label>
                                    <textarea required class="form-control" name="desc" id="" rows="3" placeholder="Add Your Referention"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi"><b>Color</b></label>
                                    <label class="radio-inline" style="margin-left:15px" for="gridRadios2">
                                        <input class="form-check-input" type="radio" name="Blas" id="gridRadios2" value="Paint">
                                        Paint
                                    </label>
                                    <label class="radio-inline" style="margin-left:75px" for="gridRadios3">
                                        <input class="form-check-input" type="radio" name="Blas" id="gridRadios3" value="Stop Lamp">
                                        Wrap
                                    </label>
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi"><b>Mods</b></label>
                                    <label for="radio-inline" style="margin-left:40px">
                                        <input type="checkbox" class="form-check-input" name="DAG[]" id="" value="Rims" >&nbsp;Rims&nbsp;
                                    </label>

                                    <label for="radio-inline" style="margin-left:40px">
                                        <input type="checkbox" class="form-check-input" name="DAG[]" id="" value="Front Lips" >&nbsp;Front Lips&nbsp;
                                    </label>

                                    <label for="radio-inline" style="margin-left:40px">
                                        <input type="checkbox" class="form-check-input" name="DAG[]" id="" value="Side Skirt" >&nbsp;Side Skirt&nbsp;
                                    </label>

                                    <label for="radio-inline" style="margin-left:40px">
                                        <input type="checkbox" class="form-check-input" name="DAG[]" id="" value="Diffuser" >&nbsp;Diffuser&nbsp;
                                    </label>
                    
                                    <label for="radio-inline" style="margin-left:40px">
                                        <input type="checkbox" class="form-check-input" name="DAG[]" id="" value="Exhaust" >&nbsp;Exhaust&nbsp;
                                    </label>

                                    <label for="radio-inline" style="margin-left:40px">
                                        <input type="checkbox" class="form-check-input" name="DAG[]" id="" value="Side Mirrors" >&nbsp;Side Mirrors&nbsp;
                                    </label>

                                    <label for="radio-inline" style="margin-left:40px">
                                        <input type="checkbox" class="form-check-input" name="DAG[]" id="" value="Stop Lamp" >&nbsp;Stop Lamp&nbsp;
                                    </label>
                                    <p class="help-block text-danger"></p>
                    
                                <div class="form-group">
                                    <h6 ><b>Add Your Car Referention</b></h6>
                 
                                <div class="col-md-12">
          
                                <div class="custom-file">
                                    <input type="file" name="inputImg" class="custom-file-input" id="customFile">
                                </div>
                
                                <div class="form-group  text-center" style="margin-top: 30px">
                                    <button type="submit" name="submit" class="btn btn-danger">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>


            

     
        </div>
              </div>
                  </form>

  </div>
    
    
</body>
</html>