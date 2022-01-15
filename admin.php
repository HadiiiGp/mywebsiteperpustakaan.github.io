<?php
include("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrator</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- JUMBOTRON HEADER -->
                <div class="container">
        <div class="row">
            <div class="col">
              <div class="mt-4 p-5 bg-info text-light">
                <h1>PERPUSTAKAAN</h1>
                <p>Tempat Membaca Buku</p>
              </div>
                <!-- END JUMBOTRON HEADER -->
            </div>
        </div>
        <div class="row">
            <div class="col">
                <!-- NAVIGASI MENU ADMIN  -->
                    <nav style="background-color:#d5f7ee;" class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <!-- <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li> -->
                            <li class="nav-item">
                            <a class="nav-link" href="?page=home">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="?page=user">User</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="?page=anggota">Anggota</a>
                            </li>
                             <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                            </li> 
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                        </div>
                    </div>
                    </nav>
                    <br>
                <!-- END NAVIGASI MENU ADMIN -->
            </div>  
        </div>
        <div class="row">
            <div class="col">
                <?php
                    if (isset($_GET['page'])) {
                        if ($_GET['page']== 'home') {
                            include('home.php');
                        }elseif ($_GET['page'] == 'anggota') {
                            include('anggota.php');
                        }elseif ($_GET['page'] == 'anggota-delete') {
                            include('anggota-delete.php');
                        }elseif ($_GET['page'] == 'anggota-insert') {
                            include('anggota-insert.php');
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>