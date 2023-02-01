<?php 

require 'functions.php';

// ambil data di url
$id = $_GET["id"];

// ambil data berdasarkan id

$jmt = query("SELECT * FROM db_jemaat WHERE no = $id")[0];










// cek apakah tombol submit sudah diklik

if( isset($_POST["submit"]) ) {

  if( ubahJmt($_POST) > 0 ) {
    echo "
      <script>
        alert('Data jemaat berhasil diubah');
        document.location.href = 'isijemaat.php'
      </script>
    ";
  }else {
    echo "
      <script>
        alert('Data jemaat gagal diubah ');
        document.location.href = 'isijemaat.php'
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

    <title>Update Data Jemaat</title>
  </head>
  <body>
    <div class="container shadow p-3 mt-4 mb-5 bg-white rounded">

      <h2 class="mt-5 mb-3 font-weight-bolder"> Update Data Jemaat</h2>
      <form action="" method="post">
        <input type="hidden" name="id" value="<?= $jmt["no"]; ?>">
        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="kk">Nomor Kartu Keluarga :</label>
            </div>
            <div class="col-md-9">          
              <input type="text" class="form-control" id="kk" name="kk" value="<?= $jmt["no_kk"]; ?>">
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="kk">Nama :</label>
            </div>
            <div class="col-md-9">          
              <input type="text" class="form-control" id="nama" name="nama" value="<?= $jmt["nama"]; ?>">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group font-weight-bold">
              <label for="tmpt">Tempat Lahir :</label>
              <input type="text" class="form-control" id="tmpt" name="tmpt" value="<?= $jmt["tempat_lahir"]; ?>" >
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group font-weight-bold">
              <label for="lahir">Tanggal Lahir :</label>
              <input type="date" class="form-control" id="lahir" name="lahir" value="<?= $jmt["tanggal_lahir"]; ?>" >
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="kelamin">Jenis Kelamin :</label>
            </div>
            <div class="col-md-9">          
              <input type="text" class="form-control" id="kelamin" name="kelamin" value="<?= $jmt["jenis_kelamin"]; ?>" >
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="gol-drh">Golongan Darah :</label>
            </div>
            <div class="col-md-9">          
              <input type="text" class="form-control" id="gol-drh" name="gol-drh" value="<?= $jmt["golongan_darah"]; ?>" >
            </div>
          </div>
        </div>

        

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="baptis">Status Baptis:</label>
            </div>
            <div class="col-md-9">          
              <input type="text" class="form-control" id="baptis" name="baptis" value="<?= $jmt["status_baptis"]; ?>" >
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="sidi">Status Sidi:</label>
            </div>
            <div class="col-md-9">          
              <input type="text" class="form-control" id="sidi" name="sidi" value="<?= $jmt["status_sidi"]; ?>" >
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="nikah">Status Nikah:</label>
            </div>
            <div class="col-md-9">          
              <input type="text" class="form-control" id="nikah" name="nikah" value="<?= $jmt["status_nikah"]; ?>" >
            </div>
          </div>
        </div>    

        <div class="row">
          <div class="col-md-6">
            <div class="form-group font-weight-bold">
              <label for="tgl-nikah">Tanggal Pernikahan :</label>
              <input type="date" class="form-control" id="tgl-nikah" name="tgl-nikah" value="<?= $jmt["tanggal_pernikahan"]; ?>" >
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group font-weight-bold">
              <label for="tmpt-nikah">Tempat Pernikahan :</label>
              <input type="text" class="form-control" id="tmpt-nikah" name="tmpt-nikah" value="<?= $jmt["tempat_pernikahan"]; ?>">
            </div>
          </div>
          
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="pendidikan">Pendidikan Terakhir :</label>
            </div>
            <div class="col-md-9">          
              <input type="text" class="form-control" id="pendidikan" name="pendidikan" value="<?= $jmt["pendidikan_terakhir"]; ?>">
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="gelar">Gelar Akademik :</label>
            </div>
            <div class="col-md-9">          
              <input type="text" class="form-control" id="gelar" name="gelar" value="<?= $jmt["gelar_akademik"]; ?>">
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="kerja">Pekerjaan :</label>
            </div>
            <div class="col-md-9">          
              <input type="text" class="form-control" id="kerja" name="kerja" value="<?= $jmt["pekerjaan"]; ?>">
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="unsur">Unsur :</label>
            </div>
            <div class="col-md-9">          
              <input type="text" class="form-control" id="unsur" name="unsur" value="<?= $jmt["unsur"]; ?>">
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="persekutuan">Persekutuan :</label>
            </div>
            <div class="col-md-9">          
              <input type="text" class="form-control" id="persekutuan" name="persekutuan" value="<?= $jmt["persekutuan"]; ?>">
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="suku">Asal Suku :</label>
            </div>
            <div class="col-md-9">          
              <input type="text" class="form-control" id="suku" name="suku" value="<?= $jmt["asal_suku"]; ?>">
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="domisili">Tahun Domisili Dijemaat :</label>
            </div>
            <div class="col-md-9">          
              <input type="text" class="form-control" id="domisili" name="domisili" value="<?= $jmt["tahun_domisili"]; ?>">
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <label>Upload Foto :</label>
          <input type="text" class="form-control-file" name="foto" value="<?= $jmt["foto"]; ?>">
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="keterangan">Keterangan :</label>
            </div>
            <div class="col-md-9">          
              <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $jmt["keterangan"]; ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mt-3 mb-3 font-weight-bold">
            <button type="submit" name="submit" class="btn btn-success btn-lg">Update Data</button>
          </div>
          <div class="col-md-6 mt-3 mb-3 font-weight-bold">
            <button type="reset" name="reset" class="btn btn-danger btn-lg">Reset</button>        
          </div>
        </div>
      </form>
      <a href="dashboard.php" type="button" class="btn btn-primary font-weight-bold">Back</a>
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
