<!doctype html>
<html lang="en">
<?php session_start();
include 'connect.php';
$db = new database();
if (isset($_SESSION['logged'])) {
    # code...
} else {
    $db->movePage("login.php");
}
?>

<head>
    <title>Profile</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
        .box {
            width: 100%;
            margin-top: 100px;
            overflow: hidden;
            transition: all ease 1s;
        }
    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/connect/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style="background-color:#FBECE9;">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #13CDE3">
        <a class="navbar-brand" href="index.php"><b>EAD Travel</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mr-auto"></ul>
            <div class="navbar-nav">
                <li class=" nav nav-item dropdown ">
                    <a class=" dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $_SESSION['user-name'] ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="profile.php"><button type="button" class="btn btn-block">Profile</button></a>
                        <div class="dropdown-divider"></div>
                        <form action="" method="post">
                            <a href="login.php"><button type="submit" name="logout" class="btn btn-block">Logout</button></a>
                        </form>
                    </div>
                    <div class="col-md-3"></div>
                </li>
            </div>
        </div>
    </nav>
    <!-- Navbar -->
    

    <div class="container">
        <?php
        
        if (isset($_POST['update'])) {
            $db->update_profile($_POST['name'], $_POST['emailz'], $_POST['contact'], $_POST['password'], $_POST['confirmpass'], $_POST['color']);
        }
        ?>
    </div>


    <div class="container">
        <?php
        $show_data = true;
        if ($db->UserData() != null) {
            $show_data = true;
            $data = $db->UserData();
            foreach ($data as $key) {
                $u_name = $key['nama'];
                $u_email = $key['email'];
                $u_phone = $key['no_hp'];
                $u_pass = $key['password'];
            }
        } else {
            $show_data = false;
        }
        if (isset($_POST['delete_item'])) {
            $db->delete_data($_POST['item_id']);
        }
        ?>
    </div>

    <div class="container d-flex justify-content-center" style="height: 100%;">
        <div class="box">
            <div class="card w-100 h-100">
                <div class="card-body">

                    <form action="" class="form-horizontal" method="post">
                        <h1 style="text-align: center;">Profile</h1>
                        <hr>

                        <div class="form-group row">
                            <label for="nama" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input name="emailz" type="text" value="<?= $u_email ?>" disabled class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="hidden" name="emailz" value="<?= $u_email ?>">
                                <input type="text" value="<?= $u_name ?>" class="form-control" id="nama" placeholder="Nama Anda" name="name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="noTelp" class="col-sm-3 col-form-label">Nomor Handphone</label>
                            <div class="col-sm-9">
                                <input type="number" value=<?= $u_phone ?> class="form-control" id="noTelp" name="contact">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Kata Sandi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Password" name="password" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Konfirmasi Kata Sandi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Ulangi Password" name="confirmpass" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3" for="">Warna Navbar</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="color" id="">
                                    <option value="navbar-dark bg-danger text-light">Blue Ocean</option>
                                    <option value=" navbar-dark bg-dark text-light">Dark Boba</option>
                                </select>
                            </div>

                        </div>

                        <div class="btn-group left">
                            <button type="submit" name="update" id="btn-submit" class="btn btn-primary btn-block" style="width: 100px; margin-left: 450px">Simpan</button>
                        </div>
                        <div class="btn-group">
                            <button type="empty" class="btn btn-warning btn-block" style="width: 100px">Cancel</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start" style="margin-top:110px">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: #13CDE3;">
                © 2021 Copyright:
                <a class="text-dark" data-toggle="modal" data-target="#exampleModal">RAAFI ALBAR_1202190154</a>
            </div>
            <!-- Copyright -->
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Created By</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Nama : Raafi Albar
                </div>
                <div class="modal-body">
                    NIM  : 1202190154
                </div>
            </div>
    </footer>
    <!-- Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/connect/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>