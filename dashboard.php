<?php  

require 'functions.php';

$getUnsur = mysqli_query($conn,"SELECT * FROM db_jemaat WHERE unsur LIKE '%PKB%'");

$countUnsur = mysqli_num_rows($getUnsur);
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- link fontawesomw -->
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">

    <!-- link dashboard css -->
    <link rel="stylesheet" type="text/css" href="dashboard.css">

    <title>Admin</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
      <a class="navbar-brand" href="#">Selamat Datang Admin | <b>Jemaat GKI PNIEL</b></a>
        <form class="form-inline my-2 my-lg-0 ml-auto">
         <div class="icon ml-4 pr-5">
          <h5>
            <i class="fas fa-sign-out-alt" class="mr-3" data-toggle="tooltip" title="Sign Out"></i>
          </h5>
        </div>
        </form>
      </div>
    </nav>

    <div class="row no-gutters mt-5">
      <div class="col-md-2 bg-dark pt-4 mt-2 pr-3">
        <ul class="nav flex-column ml-3 mb-5">
          <li class="nav-item">
            <a class="nav-link active text-white font-weight-bold" href=""><i class="fa-solid fa-gauge pr-3"></i>Dashboard</a><hr class="bg-secondary">

          </li>
          <li class="nav-item">
            <a class="nav-link text-white font-weight-bold" href="isijemaat.php"><i class="fa-solid fa-people-group pr-3"></i>Data Jemaat</a><hr class="bg-secondary">
          </li>

          <li class="nav-item">
            <a class="nav-link text-white font-weight-bold" href="isipendeta.php"><i class="fa-solid fa-people-group pr-3"></i>Data Pendeta</a><hr class="bg-secondary">
          </li>

          <li class="nav-item">
            <a class="nav-link text-white font-weight-bold" href="isimajelis.php"><i class="fa-solid fa-user-plus pr-3"></i>Data Majelis</a><hr class="bg-secondary">
          </li>

          
          <li class="nav-item">
            <a class="nav-link text-white font-weight-bold" href="#"><i class="fa-solid fa-magnifying-glass pr-3"></i>Aset Gereja</a><hr class="bg-secondary">
          </li>

          <li class="nav-item">
            <a class="nav-link text-white font-weight-bold" href="jemaat.php"><i class="fa-solid fa-user-plus pr-3"></i>Tambah Data</a><hr class="bg-secondary">
          </li>

          <li class="nav-item">
            <a class="nav-link text-white font-weight-bold" href="#"><i class="fa-solid fa-file-pen pr-3"></i>Update Data</a><hr class="bg-secondary">
          </li>

        </ul>
      </div>
      <div class="col-md-10 pt-5 pl-5">
        <h3><i class="fa-solid fa-gauge pr-3"></i>Dashboard</h3><hr>
        <div class="row text-white">
          <div class="card bg-info ml-3" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon"><i class="fa-sharp fa-solid fa-church"></i></div>
              <h5 class="card-title font-weight-bold">Jumlah KK</h5>
              <div class="display-4 font-weight-bold"><p>1.500</p></div>
              <a href="#" class="text-decoration-none"><p class="card-text mt-2 text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>
          <div class="card bg-primary ml-3" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon"><i class="fa-solid fa-people-group"></i></div>
              <h5 class="card-title font-weight-bold">Jumlah Jemaat</h5>
              <div class="display-4 font-weight-bold">1.500</div>
              <a href="#" class="text-decoration-none"><p class="card-text mt-2 text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>
          <div class="card bg-danger ml-3" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon"><i class="fa-solid fa-people-group"></i></div>
              <h5 class="card-title font-weight-bold">Persekutuan Kaum Bapak</h5>
              <div class="display-4 font-weight-bold"><p><?= $countUnsur;  ?></p></div>
              <a href="#" class="text-decoration-none"><p class="card-text mt-2 text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>
          <div class="card bg-secondary ml-3" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon"><i class="fa-solid fa-people-group"></i></div>
              <h5 class="card-title font-weight-bold">Persekutuan Kaum Ibu</h5>
              <div class="display-4 font-weight-bold">1.500</div>
              <a href="#" class="text-decoration-none"><p class="card-text mt-2 text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <script src="dashboard.js" type="text/javascript"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>
