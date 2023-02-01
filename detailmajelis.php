<?php 

require 'functions.php';

// ambil data di url
$id = $_GET["id"];

// ambil data berdasarkan id

$mjs = query("SELECT * FROM db_majelis WHERE no = $id")[0];



// cek apakah tombol submit sudah diklik

if( isset($_POST["submit"]) ) {

  if( ubahMjs($_POST) > 0 ) {
    echo "
      <script>
        alert('Data majelis berhasil diubah');
        document.location.href = 'dashboard.php'
      </script>
    ";
  }else {
    echo "
      <script>
        alert('Data majelis gagal diubah ');
        document.location.href = 'isipendeta.php'
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

    <title>Detail Data Majelis</title>
  </head>
  <body>
    <div class="container shadow p-3 mt-4 mb-5 bg-white rounded">

      <h2 class="mt-5 mb-3 font-weight-bolder"> Detail Data</h2>
      <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mjs["no"]; ?>">

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="id_majelis">ID Majelis :</label>
            </div>
            <div class="col-md-9">          
              <input type="text" class="form-control" id="id_majelis" name="id_majelis" value="<?= $mjs["id_majelis"]; ?>">
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="kk">Nomor Kartu Keluarga :</label>
            </div>
            <div class="col-md-9">          
              <input type="text" class="form-control" id="kk" name="kk" value="<?= $mjs["no_kk"]; ?>">
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="kk">Nama :</label>
            </div>
            <div class="col-md-9">          
              <input type="text" class="form-control" id="nama" name="nama" value="<?= $mjs["nama"]; ?>">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group font-weight-bold">
              <label for="tmpt">Tempat Lahir :</label>
              <input type="text" class="form-control" id="tmpt" name="tmpt" value="<?= $mjs["tempat_lahir"]; ?>" >
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group font-weight-bold">
              <label for="lahir">Tanggal Lahir :</label>
              <input type="date" class="form-control" id="lahir" name="lahir" value="<?= $mjs["tgl_lahir"]; ?>" >
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="kelamin">Jenis Kelamin :</label>
            </div>
            <div class="col-md-9">          
              <input type="text" class="form-control" id="kelamin" name="kelamin" value="<?= $mjs["jenis_kelamin"]; ?>" >
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="jabatan">Jabatan :</label>
            </div>
            <div class="col-md-9">          
              <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $mjs["jabatan"]; ?>" >
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group font-weight-bold">
              <label for="tgl_lantik">Tanggal Dilantik :</label>
              <input type="date" class="form-control" id="tgl_lantik" name="tgl_lantik" value="<?= $mjs["tgl_dilantik"]; ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group font-weight-bold">
              <label for="tgl-akhir">Tanggal Berakhir :</label>
              <input type="date" class="form-control" id="tgl-akhir" name="tgl-akhir" value="<?= $mjs["tgl_berakhir"]; ?>" >
            </div>
          </div>
        </div>

        
        <div class="form-group font-weight-bold">
          <label>Foto :</label>
          <input type="text" class="form-control-file" name="foto" value="<?= $mjs["foto"]; ?>">
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="keterangan">Keterangan :</label>
            </div>
            <div class="col-md-9">          
              <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $mjs["keterangan"]; ?>">
            </div>
          </div>
        </div>
        <!-- <div class="row">
          <div class="col-md-6 mt-3 mb-3 font-weight-bold">
            <button type="submit" name="submit" class="btn btn-success btn-lg">Update Data</button>
          </div>
          <div class="col-md-6 mt-3 mb-3 font-weight-bold">
            <button type="reset" name="reset" class="btn btn-danger btn-lg">Reset</button>        
          </div>
        </div> -->
      </form>
      <a href="isimajelis.php" type="button" class="btn btn-primary font-weight-bold">Back</a>
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
