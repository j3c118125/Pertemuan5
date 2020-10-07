<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author">
    <meta name="description">
    <meta name="keyword">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">

    <title>IPB University</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top"> <!-- bg-light jd warna navbar nya putih, kl bg-primary jdnya biru -->
    <div class="container">
        <a class="navbar-brand" href="#">IPB University</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> <!-- span class="navbar-toggler-icon", fungsi button ini ketika di minimize jd ada garis 3 trs dikotakin gt buat nampilin menu-nya -->
        </button> <!-- nah kalo mau diganti jadi fa fa-user dari navbar-toggle-icon, fa itu fontawesome, fa fa-user itu ntr jadi ada gambar orangnya -->

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto"> <!-- ini yg ngebuat si menu yg diatas kek home dll itu ada di pojok kiri, mr itu margin right. nah makanya ganti jd ml-auto yg tdnya mr-auto biar posisinya di pojok kanan, ml = margin left -->
                <li class="nav-item active">
                    <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Program Studi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mahasiswa</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Data Master
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Agama</a>
                        <a class="dropdown-item" href="#">Hobi</a>
                        <!--div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a-->
                    </div>
                </li>
                <!--li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li-->
            </ul>
            <!--
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            -->
        </div>
    </div>
 </nav>

    <!-- div class="jumbotron bg-purple text-white"> < bg-info, bg-danger, bg-warning, bg-success, bg-secondary >
        <div class="container"> < yg membuat tulisan PT. PIN di box warna ungu itu lurus sm tulisan PT. PIN di navbar >
            <h1>IPB University</h1>
        </div>
    </div-->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="assets/images/collegee1.jpg" class="d-block w-100" alt="..."-->
            <!--svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: First slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg -->
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
            <img src="assets/images/collegee2.jpg" class="d-block w-100" alt="..."-->
            <!--svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Second slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#666" /><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text></svg -->
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="carousel-item">
            <img src="assets/images/college3.jpg" class="d-block w-100" alt="..."-->
            <!--svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Third slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#555" /><text x="50%" y="50%" fill="#333" dy=".3em">Third slide</text></svg -->
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <section class="row">
        <!-- div class="col-md-3 col-sm-6 bg-danger"> < maksimal bisa sampe 12 utk kolom, di kolom ke-13 akan turun>
            col1
        </div>
        <div class="col-md-3 col-sm-6 bg-warning">
            col2
        </div>
        <div class="col-md-3 col-sm-6 d-none d-md-block bg-success"> < hidden dan visible-md, d-md-none, visible-md artinya hanya muncul utk ukuran medium ke atas >
            col3
        </div>
        <div class="col-md-3 col-sm-6 d-none d-md-block hidden-sm bg-info">
            col4
        </div-->

        <div class = "container">
            <h2> Beranda </h2>
        </div>
    </section>

    <div class="card text-center bg-secondary text-white"> <!-- Membuat tulisan si copyright jd posisi tengah di center (text-center), trs bg-secondary itu jd bg nya abu", trs text-white yg ngebuat tulisan copyright jd warna putih -->
        <div class="card-body">
            Copyright &copy; 2020
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- Custom JS -->
    <script src="<?php echo base_url('assets/js/script.js'); ?>"></script>

  </body>
</html>