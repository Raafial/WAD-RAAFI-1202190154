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
        $date = $_POST['date'];
        $start = $_POST['start'];
        $duration = $_POST['duration'];
        $building = $_POST['building'];
        $number = $_POST['number'];
        $buildingName = '';
        $hargaTotal = NULL;

        // pilihan gedug
        if ($building == 1){
            $buildingName = 'Nusantara Hall';
            $hargaTotal = 2000;
        } else if ($building == 1){
            $buildingName = 'Garuda Hall';
            $hargaTotal = 1000;
        } else if ($building == 1){
            $buildingName = 'Gedung Serba Guna';
            $hargaTotal = 500;
        }

        // checkbox 
        $hargaService = NULL;
        $pilihanService = '';
        $cekcatering = isset($_POST['catering']);
        $cekdecoration = isset($_POST['decoration']);
        $cekssystem = isset($_POST['ssystem']);

        if ($cekcatering) {
            $hargaService += 700;
            $pilihanService = $pilihanService . 'Catering, ';
        }
        if ($cekdecoration) {
            $hargaService += 450;
            $pilihanService = $pilihanService . 'Decoration, ';
        }
        if ($cekssystem) {
            $hargaService += 250;
            $pilihanService = $pilihanService . 'Sound System, ';
        }

        $timecalc = strtotime($start) + 60*(60*$duration);
        $timeend = date('H:i', $timecalc);

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

    <div class="container-sm" style="text-align: center;">
        <h4 class="display-6">Thank you Raafi_1202190154 for Reserving</h4>
        <h4 style="text-align: center;">Please double check your reservation details</h4>
    </div>
    </div>
    <table class="table table-striped table-dark" style="margin-top: 30px">
        <thead>
            <tr>
                <th scope="col">Booking Number</th>
                <th scope="col">Name</th>
                <th scope="col">Check-in</th>
                <th scope="col">Check-out</th>
                <th scope="col">Building Type</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Service</th>
                <th scope="col">Total Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><?= $bookingNumber ?></th>
                <td><?= $name ?></td>
                <td><?= $date . " ". $start?></td>
                <td><?= $date . " ". $timeend ?></td>
                <td><?= $building ?></td>
                <td><?= $number ?></td>
                <td><?= $pilihanService ?></td>
                <td><?= '$' . $hargaService + $hargaTotal ?></td>
            </tr>
        </tbody>
    </table>


</body>

<!-- Footer-->
<footer>
    <div class="text-center p-4" style="background-color: rgb(192, 192, 192); margin-top: 510px">
        <p>Created by: Raafi Albar_1202190154</p>
    </div>
</footer>
<!-- Footer-->

</html>