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

    <!-- Content -->
    <section>
        <div class="row row-cols-1 row-cols-md-3 g-3" style="max-width: 90%;margin-left: auto; margin-right:auto; margin-top: 20px;">

            <!--Card 1-->
            <div class="col">
                <div class="card">
                    <img src="img/1.jfif"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">BMW M4</h5>
                        <p class="card-text">
                            $62.000 <br>
                        </p>
                    </div>
                    <div class="card-body" style="text-align: center; background-color: rgb(247,247,247);">
                        <a class="btn btn-danger" href="booking.php">Buy Now</a>
                    </div>
                </div>
            </div>
            <!--Card 1-->

            <!--Card 2-->
            <div class="col">
                <div class="card">
                    <img src="img/2.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">BMW G20</h5>
                        <p class="card-text">
                            $40.000<br>
                        </p>
                    </div>
                    <div class="card-body" style="text-align: center; background-color: rgb(247,247,247);">
                        <a class="btn btn-danger" href="booking.php">Buy Now</a>
                    </div>
                </div>
            </div>
            <!--Card 2-->

            <!--Card 3-->
            <div class="col">
                <div class="card">
                    <img src="img/3.jfif"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">BMW E92</h5>
                        <p class="card-text">
                            $25.000<br>
                        </p>
                    </div>
                    <div class="card-body" style="text-align: center; background-color: rgb(247,247,247);">
                        <a class="btn btn-danger" href="booking.php">Buy Now</a>
                    </div>
                </div>
            </div>
            <!--Card 3-->
        </div>
    </section>

    <div class="container">
        <table class="table table-dark" style="margin-top: 100px; margin-bottom: 100px">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Car Type</th>
                    <th scope="col">Specifications</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>BMW M4</td>
                    <td>-</td>
                    <td>$62.000</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>BMW G20</td>
                    <td>-</td>
                    <td>$40.000</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>BMW E92</td>
                    <td>-</td>
                    <td>$25.000</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>