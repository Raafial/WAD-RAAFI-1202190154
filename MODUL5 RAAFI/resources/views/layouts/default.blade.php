<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @stack('before-style')
    @include('includes.style')
    @stack('after-style')

</head>

<body>

    <!--Navbar-->
    <section id="Booking">
        <section id="nav">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav" style="margin-left: auto; margin-right:auto;">
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('')}}"><b>HOME</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/vaccine')}}"><b>VACCINE</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href=""><b>PATIENT</b></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>
    </section>
    <!--Navbar-->

    <div class="container-fluid">
        <div class="row">
            @stack('before-content')
            @yield('content')
            @stack('after-content')
        </div>
    </div>
    
    
    @stack('before-script')
    @include('includes.script')
    @stack('after-script')

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start" style="margin-top: 50px">
            <!-- Text -->
            <div class="text-center p-3" style="background-color: #F8F9FA;">
                Created By
              <a class="text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">RAAFI ALBAR - 1202190154</a>
            </div>
            <!-- Text -->
    </footer>
    <!-- Footer -->

</body>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Kesan Pesan Praktikum</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Kesan : Selama mengikuti praktikum WAD saya belajar lebih dalam tentang HTML, PHP, Database, dan Laravel
                </div>
                <div class="modal-body">
                  Pesan : Selama praktikum berlangsung, Asisten Praktikum sudah menjalankan tugasnya dengan baik dan sesuai prosedur
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" style="float:right;">Close</button>
                </div>
            </div>
    </div>
        
</html>