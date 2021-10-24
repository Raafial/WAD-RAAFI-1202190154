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

    <!--Navbar-->
    <section id="Booking">
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
        <!--Navbar-->

        <!--Header-->
        <section id="form">
            <div class="container-md" style="margin-left: auto; margin-right:auto; max-width : 80%; margin-top : 20px;">
                <p
                    style="text-align: center; background-color:rgb(0,0,0); color:white; height:40px; vertical-align: middle; line-height: 40px;">
                    Reserve your venue now!
                </p>
            </div>
            <!--Header-->

            <!--Image-->
            <div class="container" style="border: 1px solid rgb(228,228,228); max-width : 78%; border-radius : 5px">
                <div class="row">
                    <div class="col">
                        <img src="Hall_1.jfif"
                            style="height: 300px; margin-left: auto; margin-right:auto; display:block; margin-top: 200px;"
                            alt="">
                    </div>
                    <!--Image-->

                    <!--Form-->
                    <div class="col">

                        <div class="mb-3" style="margin-left: auto;">
                            <label for="name" class="form-label">Name</label>
                            <input class="form-control" type="text" value="Raafi_1202190154"
                                aria-label="readonly input example" readonly>
                        </div>

                        <div class="mb-3" style="margin-left: auto;">
                            <label for="date" class="form-label">Event Date</label>
                            <input type="text" id="date" class="form-control" placeholder="mm / dd / yyyy">
                        </div>

                        <div class="mb-3" style="margin-left: auto;">
                            <label for="start" class="form-label">Start Time</label>
                            <input type="text" id="date" class="form-control" placeholder="-- : -- --">
                        </div>

                        <div class="mb-3" style="margin-left: auto;">
                            <label for="duration" class="form-label">Duration (Hours)</label>
                            <input type="number" id="quantity" class="form-control" min="1" max="12" placeholder="1">
                        </div>

                        <div class="mb-3" style="margin-left: auto;">
                            <label for="type" class="form-label">Building Type</label>
                            <select class="form-select" aria-label="Default select example">
                                <option value="1">Nusantara Hall</option>
                            </select>
                        </div>

                        <div class="mb-3" style="margin-left: auto;">
                            <label for="duration" class="form-label">Phone Number</label>
                            <input type="number" id="quantity" class="form-control" placeholder="">
                        </div>
                        <div class="mb-3" style="margin-left: auto;">
                            <label for="service"> Add Service(s):</label>
                            <div class="form-check">

                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Catering / $700
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                    Decoration / $450
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                    Sound System / $250
                                </label>
                            </div>
                            <div class="d-grid gap-2" style="margin-top : 30px;">
                                <button class="btn btn-primary" type="button">Book</button>
                            </div>
                        </div>
                    </div>
                    <!--Form-->
        </section>

        <!-- Footer-->
        <footer>
            <div class="text-center p-4" style="background-color: rgb(192, 192, 192);">
                <p>Created by: Raafi Albar_1202190154</p>
            </div>
        </footer>
        <!-- Footer-->
</body>
</html>