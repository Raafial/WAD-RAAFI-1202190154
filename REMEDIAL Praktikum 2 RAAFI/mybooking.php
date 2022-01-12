<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="utf-8">
    <title></title>
    <?php
        $bookingNumber = rand();
        $name = $_POST['name'];
        $email = $_POST['email'];
        $building = $_POST['building'];
        $number = $_POST['number'];
        $buildingName = '';
        $hargaTotal = NULL;

    ?>
</head>

<body>
    
    <!--Navbar-->
    <section id="navbar">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home<span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="booking.php">Booking</a>
                </li>
            </ul>
        </nav>
    </section>
    <!--Navbar-->

    <div class="container-sm" style="text-align: center; margin-top: 100px">
        <h4 class="display-6">Thank you for Purchasing!</h4>
        <h4 style="text-align: center;">Please double check your purchasing details</h4>
    </div>
    </div>
    <div class="container">
        <table class="table table-striped table-dark" style="margin-top: 30px">
            <thead>
                <tr>
                    <th scope="col">Purchasing Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Car Type</th>
                    <th scope="col">Phone Number</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?= $bookingNumber ?></th>
                    <td><?= $name ?></td>
                    <td><?= $email ?></td>
                    <td><?= $building ?></td>
                    <td><?= $number ?></td>
                </tr>
            </tbody>
        </table>
    </div>


</body>

</html>