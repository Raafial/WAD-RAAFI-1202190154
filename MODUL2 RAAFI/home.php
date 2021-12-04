<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Navbar-->
    <section id="nav">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav" style="margin-left: auto; margin-right:auto;">
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="booking.php">Booking</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- Navbar-->

    <!-- Heading 1 -->
    <section id="Heading">
        <div class="heading"> 
            <h4 style="text-align: center; height: 40px; vertical-align: middle; line-height: 40px;">
                WELCOME TO ESD VENUE RESERVATION
                
            </h4>
        </div>
    </section>
    <!-- Heading 1-->
    
    <!-- Heading 2 -->
    <section>
        <div class="container-md" style="margin-left: auto; margin-right:auto; max-width : 80%">
            <p style="text-align: center; background-color:rgb(33,37,41); color:white; height:40px; vertical-align: middle; line-height: 40px;">
                Find your best deal for your event, here!
            </p>
        </div>
    </section>
    <!-- Heading 2 -->

    <!-- Content -->
    <section>
            <div class="row row-cols-1 row-cols-md-3 g-3" style="max-width: 90%;margin-left: auto; margin-right:auto;">

                <!--Card 1-->
                <div class="col">
                    <div class="card">
                        <img src="Hall_1.jfif"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nusantara Hall</h5>
                            <p class="card-text">
                                $2000 / Hour <br>
                                5000 Capacity
                            </p>
                        </div>
                        <ul class="list-group list-group-flush" style="text-align: center;">
                            <li class="list-group-item" style="color: rgb(28,138,95);"><b> Free Parking</b></li>
                            <li class="list-group-item" style="color: rgb(28,138,95);"><b>Full AC</b></li>
                            <li class="list-group-item" style="color: rgb(28,138,95);"><b>Cleaning Service</b></li>
                            <li class="list-group-item" style="color: rgb(28,138,95);"><b>Covid-19 Health Protocol</b>
                            </li>
                        </ul>
                        <div class="card-body" style="text-align: center; background-color: rgb(247,247,247);">
                            <a class="btn btn-primary" href="card1.php">Book Now</a>
                        </div>
                    </div>
                </div>
                <!--Card 1-->

                <!--Card 2-->
                <div class="col">
                    <div class="card">
                        <img src="Hall_2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Garuda Hall</h5>
                            <p class="card-text">
                                $1000 / Hour <br>
                                2000 Capacity
                            </p>
                        </div>
                        <ul class="list-group list-group-flush" style="text-align: center; ">
                            <li class="list-group-item" style="color: rgb(28,138,95);"><b> Free Parking</b></li>
                            <li class="list-group-item" style="color: rgb(28,138,95);"><b>Full AC</b></li>
                            <li class="list-group-item" style="color:red;"><b> No Cleaning Service</b></li>
                            <li class="list-group-item" style="color: rgb(28,138,95);"><b>Covid-19 Health Protocol</b>
                            </li>
                        </ul>
                        <div class="card-body" style="text-align: center; background-color: rgb(247,247,247);">
                            <a class="btn btn-primary" href="card2.php">Book Now</a>
                        </div>
                    </div>
                </div>
                <!--Card 2-->

                <!--Card 3-->
                <div class="col">
                    <div class="card">
                        <img src="Hall_3.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Gedung Serba Guna</h5>
                            <p class="card-text">
                                $500 / Hour <br>
                                500 Capacity
                            </p>
                        </div>
                        <ul class="list-group list-group-flush" style="text-align: center; ">
                            <li class="list-group-item" style="color:red;;"><b> No Free Parking</b></li>
                            <li class="list-group-item" style="color:red;"><b> No Full AC</b></li>
                            <li class="list-group-item" style="color:red;"><b>No Cleaning Service</b></li>
                            <li class="list-group-item" style="color: rgb(28,138,95);"><b>Covid-19 Health Protocol</b>
                            </li>
                        </ul>
                        <div class="card-body" style="text-align: center; background-color: rgb(247,247,247);">
                            <a class="btn btn-primary" href="card3.php">Book Now</a>
                        </div>
                    </div>
                </div>
                <!--Card 3-->
            </div>
        </div>
    </section>
    <!-- Content -->

    <!-- Footer-->
    <footer>
        <div class="text-center p-4" style="background-color: rgb(192, 192, 192);">
            <p>Created by: Raafi Albar_1202190154</p>
          </div>
    </footer>
    <!-- Footer-->

</body>
</html>