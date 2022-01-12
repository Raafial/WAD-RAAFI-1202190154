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
            <h4 style="text-align: center; height: 40px; vertical-align: middle; line-height: 40px; margin-top: 100px;">
                PURCHASE YOUR BMW NOW!
            </h4>
        </div>
    </section>
    <!-- Heading 1-->

    <section id="form">
        <div class="container"
        </div>
            <form action="mybooking.php" method="POST" style= "margin-top:20px">

                <div class="mb-3" style="margin-left: auto;">
                    <label for="name" class="form-label">Name</label>
                    <input class="form-control" name="name" type="text">  
                </div>

                <div class="mb-3" style="margin-left: auto;">
                    <label for="email" class="form-label">Email</label>
                    <input class="form-control" name="email" type="text">  
                </div>

                <div class="mb-3" style="margin-left: auto;">
                    <label for="type" class="form-label">Type</label>
                    <select class="form-select" aria-label="Default select example" name="building">
                        <option selected>Choose...</option>
                        <option value="BMW M4">BMW M4</option>
                        <option value="BMW G20">BMW G20</option>
                        <option value="BMW E92">BMW E92</option>
                    </select>
                </div>

                <div class="mb-3" style="margin-left: auto;">
                    <label for="duration" class="form-label">Phone Number</label>
                    <input type="number" name="number" class="form-control" placeholder="">
                </div>

                <div class="d-grid gap-2" style="margin-top : 30px; margin-bottom: 50px;">
                    <button class="btn btn-danger" type="submit">Book</button>
                </div>
            </div>
        </div>
    </section>

</body>
</html>