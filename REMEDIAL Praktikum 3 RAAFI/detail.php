<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./assets/style/styles.css">

</head>
<body>

    <style>
    .fax {
        color: orange;
      margin-right: 12px;
    }

    .Poto-pos {
      object-fit: cover;
       height: 50em;
      display: block;

        box-shadow: 0 0 25px #3d2173a1;
      transition: all ease 1s;
            position: relative;
      overflow: hidden;
           border-radius: 20px;
    }

    .card-home {
      margin: 20px;
    }

        .MOD {
            padding: 10px !important;
        }

        .MOD .MOD-dialog {
            width: 100%;
                        max-width: none;
                        height: 100%;
                        margin: 0;
                    }

        .MOD .MOD-content {
            height: 100%;
            border: 0;
            border-radius: 0;
        }

        .MOD .MOD-body {
            overflow-y: auto;
        }
  </style>

  <section id="home">

  <!--Navbar-->
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
  

    </nav>
    <!--Navbar-->

    <div class="container">
        <?php
         include './pengaturan/connect.php';include './pengaturan/create.php';include './pengaturan/delete.php';include './pengaturan/update.php';

                ini_set('display_errors', '1');ini_set('display_startup_errors', '1');error_reporting(E_ALL);ini_set('error_reporting', E_ALL);$IDBO = $_GET['id_buku'];
                $KUER = "SELECT * FROM buku_table where id_buku=$IDBO;";
                $CQL = mysqli_query($sambung, $KUER);
                ?>

        <div class="row">

          
            <?php if ($row = mysqli_fetch_array($CQL)) {  ?>
               
                <div class="col-md-10 col-lg-offset-10 " style="margin-left: 8em">
                


                    <div class="card card-home">
             
                    
                                    <img class="card-img-top Poto-pos" src="<?php echo $row['gambar'] ?>" alt="Card image cap">
                               
                                    <div class="card-body">
                                        <h3><?php echo $row['judul_buku'] ?></h3>
                    
                            <p class="card-text">
                                       
                                        
                                <div class="row">
                                    <div class="col-md-8">
                                       
                               <p> <strong> Model : </strong></p>
                                       <p><i ></i><?php echo $row['judul_buku'] ?></p>
                                       
                              <p> <strong> Owner: </strong></p>
                                       
                           <p><i ></i><?php echo $row['penulis_buku'] ?></p>
                                 
                                                <p> <strong> Year : </strong></p>
                                     
                                         <p><i ></i><?php echo $row['tahun_terbit'] ?></p>
                                               
                                 <p> <strong> Descriptions : </strong></p>
                                               
                                                <p><i ></i><?php echo $row['deskripsi'] ?></p>
                                               
                                                <p> <strong> Color : </strong></p>
                                        <p><i></i><?php echo $row['bahasa'] ?></p>
                                       
                                        <p> <strong> Mods : </strong></p>

 <?php
                 
                                       $fwv = json_decode($row['tag']);
                 
                                        $isBenefitEmpty = true;
                 
                                        if (!empty($fwv)) {
                 
                                            $isBenefitEmpty = false;
                 
                                            echo '<ul>';
                                            echo '<li>' . implode('</li><li>', $fwv) . '</li>';
                                            echo '</ul>';

                                        } else {
                                            $isBenefitEmpty = true;

                                            echo '<ul>';
                                            echo '<li>' . 'Tidak Ada Tag.' . '</li>';
                                            echo '</ul>';
                                        }
                                        ?>
                                      
                                    </div>
                                    
                                </div>
                        </div>

                        <form action="detail.php?id_buku=<?php echo $row['id_buku'] ?>" method="post">
                            <div class="card-footer bg-transparent">
                                <p style="text-align: center;">
                                 
                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalLong">
                                                    Edit
                                                </button>
                                    <button type="submit" value="<?php echo $row['id_buku'] ?>" name="TAKIS" class="btn btn-danger">Delete</button>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                     
                            <div class="modal-header">
                    
                                <h5 class="modal-title" id="exampleModalLongTitle">Sunting</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container mx-auto my-1">
                                    <form action="detail.php?id_buku=<?php echo $row['id_buku'] ?>" method="post" enctype="multipart/
                                        form-data">
                                        <div class="row">
                                            <div class="col-lg-12 col-lg-offset-12  ">
                        
                                                <div class="card h-100">
                                                    <div class="card-header bg-info"></div>
                              
                                                    <div class="card-body">

              <input type="hidden" name="id_buku" value=<?php echo $row['id_buku'] ?>>
           
              <div class="form-group">
                        <h6>Model</h6>
                        <input required type="text" name="judul" id="" class="form-control" value="<?php echo $row['judul_buku'] ?>" placeholder="" aria-describedby="helpId">

              </div>

                      <div class="form-group">
                        <h6 style="margin-top:5px;"> Owner</h6>
                        <input required type="text" name="penulis" id="" class="form-control" placeholder="" value="<?php echo $row['penulis_buku'] ?>" aria-describedby="helpId">
                      </div>

               <div class="form-group">
                <h6 style="margin-top:5px;">Year</h6>
               <input required type="text" name="terbit" id="" class="form-control" placeholder="" value="<?php echo $row['tahun_terbit'] ?>"aria-describedby="helpId">
              </div>

                                      <div class="form-group">
                                        <h6 style="margin-top:5px;">Descriptions</h6>
                                         <textarea required class="form-control" name="desc" id="" rows="3" value=""><?php echo $row['deskripsi'] ?></textarea>
                                      </div>

              <div class="">
                <h6 style="margin-top:5px;">Paint</h6>
                                                                <label class="col-md-6 form-check">
                                                  <div class="row">
                                                                        <div class="form-check col-md-6">
                                                      <input class="form-check-input" name="Blas" value="Paint" type="radio" <?php echo ($row['bahasa'] == 'Paint') ? 'checked' : '' ?>>
                                                                            <label class="form-check-label" for="gridRadios2">
                                                             Paint
                                               </label>
                                                                        </div>
                                                                        <div class="form-check col-md-6">
                                                                                    <input class="form-check-input" value="Stop Lamp" type="radio" name="Blas" <?php echo ($row['bahasa'] == 'Stop Lamp') ? 'checked' : '' ?>>
                                                                                    <label class="form-check-label" for="gridRadios3">
                                                                                        Stop Lamp
                                                                                    </label>
                                                                                </div>
                                                                            </div>

                                                                </label>
                </div>


 <?php
                                                        $arrayBenefit = null;
                                                        $DAG1= false;$DAG2 = false;$DAG3 = false;$DAG4= false;$DAG5 = false;$DAG6 = false;$DAG7 = false;

                                                        if ($isBenefitEmpty) {
                                                            $snack = false;
                                                        } else {
                                                                $arrayBenefit = json_decode($row['tag']);
                                                                if (in_array("Rims", $arrayBenefit)) {
                                                                    $DAG1 = true;
                                                                }
                                                                if (in_array("Front Lips", $arrayBenefit)) {
                                                                            $DAG2 = true;
                                                                        }
                                                                        if (in_array("Side Skirt", $arrayBenefit)) {
                                                                                $DAG3 = true;
                                                                            }
                                                                            if (in_array("Diffuser", $arrayBenefit)) {
                                                                                $DAG4 = true;
                                                                            }
                                                                                        if (in_array("Exhaust", $arrayBenefit)) {
                                                                                            $DAG5 = true;
                                                                                        }
                                                                            if (in_array("Side Mirrors", $arrayBenefit)) {
                                                                                $DAG6 = true;
                                                                            }
                                                                           if (in_array("Stop Lamp", $arrayBenefit)) {
                                                                                $DAG7 = true;
                                                                    }
                                                        }
                                                        ?>

                                                        <div class="form-group">
                                                    
                                                      <h6 style="margin-top:5px;">Mods</h6>
                                                            <div class="form-check">
                                                                <div class="row col-md-12">

                                                                    <div class="col-md-6">
                                                                        <label class="form-check-label">
                                                                            <input <?php echo ($DAG1) ? 'checked' : ''; ?> type="checkbox" class="form-check-input" name="DAG[]" id="" value="Rims">
                                                                            Rims
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <label class="form-check-label">
                                                                            <input <?php echo ($DAG2) ? 'checked' : ''; ?> type="checkbox" class="form-check-input" name="DAG[]" id="" value="Front Lips">
                                                                            Front Lips
                                                                        </label>
                                                                    </div>

                                                                                <div class="col-md-4">
                                                                                    <label class="form-check-label">
                                                                                        <input <?php echo ($DAG3) ? 'checked' : ''; ?> type="checkbox" class="form-check-input" name="DAG[]" id="" value="Side Skirt">
                                                                                        Side Skirt
                                  </label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-check-label">
                                            <input <?php echo ($DAG4) ? 'checked' : ''; ?> type="checkbox" class="form-check-input" name="DAG[]" id="" value="Diffuser">
                                                                            Diffuser
                                                                        </label>
                                                                    </div>

                              <div class="col-md-4">
                                                                        <label class="form-check-label">
                                                                            <input <?php echo ($DAG5) ? 'checked' : ''; ?> type="checkbox" class="form-check-input" name="DAG[]" id="" value="Exhaust">
                                                                            Exhaust
                                      </label>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <label class="form-check-label">
                                                  <input <?php echo ($DAG6) ? 'checked' : ''; ?> type="checkbox" class="form-check-input" name="DAG[]" id="" value="Side Mirrors">
                                                                            Side Mirrors
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label class="form-check-label">
                                                                            <input <?php echo ($DAG7) ? 'checked' : ''; ?> type="checkbox" class="form-check-input" name="DAG[]" id="" value="Stop Lamp">
                                                                            Stop Lamp
                                                                        </label>
                                                                    </div>

                                                    </div>
                                           

                                                </div>
            

                                            </div>

                                        
                                        </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                               
                                    <button type="submit" name="updateEvent" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                                                    </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
                                                    </div>
        </div>

        





    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>