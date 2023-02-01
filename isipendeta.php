<?php 

require 'functions.php';

$dtPendeta = query("SELECT * FROM db_pendeta");

if( isset($_POST["cari"])) {

  $dtPendeta = cariPdt($_POST["keyword"]);

}



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
            <a class="nav-link active text-white font-weight-bold" href="#"><i class="fa-solid fa-gauge pr-3"></i>Dashboard</a><hr class="bg-secondary">

          </li>
          <li class="nav-item">
            <a class="nav-link text-white font-weight-bold" href="isijemaat.php"><i class="fa-solid fa-people-group pr-3"></i>Data Jemaat</a><hr class="bg-secondary">
          </li>

          <li class="nav-item">
            <a class="nav-link text-white font-weight-bold" href="#"><i class="fa-solid fa-people-group pr-3"></i>Data Pendeta</a><hr class="bg-secondary">
          </li>

          <li class="nav-item">
            <a class="nav-link text-white font-weight-bold" href="isimajelis.php"><i class="fa-solid fa-user-plus pr-3"></i>Data Majelis</a><hr class="bg-secondary">
          </li>

          
          <li class="nav-item">
            <a class="nav-link text-white font-weight-bold" href="#"><i class="fa-solid fa-magnifying-glass pr-3"></i>Data Unsur</a><hr class="bg-secondary">
          </li>

          <li class="nav-item">
            <a class="nav-link text-white font-weight-bold" href="jemaat.php"><i class="fa-solid fa-user-plus pr-3"></i>Tambah Data</a><hr class="bg-secondary">
          </li>

          <li class="nav-item">
            <a class="nav-link text-white font-weight-bold" href="#"><i class="fa-solid fa-file-pen pr-3"></i>Update Data</a><hr class="bg-secondary">
          </li>

        </ul>
      </div>
      <div class="col-md-10 pt-5 pl-3 pr-2">
        <h3 class="font-weight-bold">Data Pendeta GKI PNIEL</h3><hr>

        <form action="" method="post">
          <input type="text" name="keyword" size="40" autofocus autocomplete="off" placeholder="Masukan pencarian.." class="mb-3">
          <button type="submit" name="cari" class="btn btn-primary btn-md font-weight-bold">Cari</button>
          <a href="isipendeta.php" type="btn" class="btn btn-secondary btn-md">Clear</a>
        </form>
        
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">No KK</th>
              <th scope="col">Nama</th>
              <th scope="col">Tempat Lahir</th>
              <th scope="col">Tanggal Lahir</th>
              <th scope="col">Baptis</th>
              <th scope="col">Sidi</th>
              <th scope="col">Nikah</th>
              <th scope="col">Unsur</th>
              <th scope="col">Persekutuan</th>
              <th scope="col">Foto</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>

          <?php $i = 1; ?>
          <?php foreach ($dtPendeta as $row) : ?>
          <tbody>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td scope="row"><?= $row["no_kk"]; ?></td>
              <td scope="row"><?= $row["nama"]; ?></td>
              <td scope="row"><?= $row["tempat_lahir"]; ?></td>
              <td scope="row"><?= $row["tanggal_lahir"]; ?></td>
              <td scope="row"><?= $row["status_baptis"]; ?></td>
              <td scope="row"><?= $row["status_sidi"]; ?></td>
              <td scope="row"><?= $row["status_nikah"]; ?></td>
              <td scope="row"><?= $row["unsur"]; ?></td>
              <td scope="row"><?= $row["persekutuan"]; ?></td>
              <td scope="row"><?= $row["foto"]; ?></td>
              <td scope="row">
                <div class="btn-group dropleft">
                  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                  </button>
                  <div class="dropdown-menu">
                    <!-- Dropdown menu links -->
                      <a class="dropdown-item" href="detailpendeta.php?id=<?= $row["no"];  ?>"><i class="fa-solid fa-circle-info"></i> Detail</a>
                      <a class="dropdown-item" href="ubahpendeta.php?id=<?= $row["no"];  ?>"><i class="fa-sharp fa-solid fa-pen-to-square"></i> Ubah</a>
                      <a class="dropdown-item" href="hapuspendeta.php?id=<?= $row["no"];  ?>"><i class="fa-sharp fa-solid fa-trash"></i> Hapus</a>
                  </div>
                </div>

              </td>
            </tr>
            
          </tbody>
          <?php $i++; ?>
        <?php endforeach; ?>
        </table>
        <a href="dashboard.php" type="button" class="btn btn-primary font-weight-bold">Back</a>
    
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
