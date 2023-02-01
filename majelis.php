
<?php 

require 'functions.php';

// cek tombol submit ditekan

if( isset($_POST["submit"]) ) {



  if( majelis($_POST) > 0 ) {
    echo "
      <script>
        alert('Data majelis berhasil ditambakan');
        document.location.href = 'dashboard.php';
      </script>
        ";
  }else {
    echo "
      <script>
        alert('Data majelis gagal ditambahkan')
        document.location.href = 'majelis.php';
      </script>
        ";
  }
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

    <!-- Custom css -->
    <link rel="stylesheet" type="text/css" href="custom.css">

    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">

    <style type="text/css">

      button {
        width: 80%;
      }


    </style>

    <title>Ubah Data</title>
  </head>
  <body>
    <div class="container shadow p-3 mt-4 mb-5 bg-white rounded">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item"><a href="jemaat.php">Jemaat</a></li>
          <li class="breadcrumb-item"><a href="pendeta.php">Pendeta</a></li>
          <li class="breadcrumb-item"><a href="#">Majelis</a></li>
        </ol>
      </nav>
      <h2 class="mt-5 mb-3 font-weight-bolder"> Input Data Majelis</h2>
      <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="kk">ID Majelis :</label>
            </div>
            <div class="col-md-9">          
              <input type="text" class="form-control" id="kk" name="id_majelis" placeholder="Masukan ID Majelis">
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="kk">Nomor Kartu Keluarga :</label>
            </div>
            <div class="col-md-9">          
              <input type="text" class="form-control" id="kk" name="kk" placeholder="Masukan Nomor KK">
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="kk">Nama :</label>
            </div>
            <div class="col-md-9">          
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Anda">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group font-weight-bold">
              <label for="tmpt">Tempat Lahir :</label>
              <input type="text" class="form-control" id="tmpt" name="tmpt" placeholder="Masukan Tempat Lahir Anda">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group font-weight-bold">
              <label for="lahir">Tanggal Lahir :</label>
              <input type="date" class="form-control" id="lahir" name="lahir">
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="jenis">Jenis Kelamin :</label>
            </div>
            <div class="col-md-9">          
              <select class="form-control" id="jenis" name="jenis">
                <option value="">- Jenis Kelamin -</option> 
                <option>Laki-Laki</option>
                <option>Perempuan</option>
              </select>
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="jabatan">Jabatan :</label>
            </div>
            <div class="col-md-9">          
              <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukan Jabatan">
            </div>
          </div>
        </div>

        <div class="row">
          
          <div class="col-md-6">
            <div class="form-group font-weight-bold">
              <label for="tgl-lantik">Tanggal Dilantik :</label>
              <input type="date" class="form-control" id="tgl-lantik" name="tgl-lantik">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group font-weight-bold">
              <label for="tgl-akhir">Tanggal Berakhir :</label>
              <input type="date" class="form-control" id="tgl-akhir" name="tgl-akhir">
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <label>Upload Foto :</label>
          <input type="file" class="form-control-file" name="foto">
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="keterangan">Keterangan :</label>
            </div>
            <div class="col-md-9">          
              <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mt-3 mb-3 font-weight-bold">
            <button type="submit" name="submit" class="btn btn-success btn-lg">Submit Data</button>
          </div>
          <div class="col-md-6 mt-3 mb-3 font-weight-bold">
            <button type="reset" name="reset" class="btn btn-danger btn-lg">Reset</button>        
          </div>
        </div>

      </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>
