<?php 

require 'functions.php';


// cek apakah tombol submit sudah diklik

if( isset($_POST["submit"]) ) {

  if( pendeta($_POST) > 0 ) {
    echo "
      <script>
        alert('Data pendeta berhasil ditambahkan');
        document.location.href = 'dashboard.php'
      </script>
    ";
  }else {
    echo "
      <script>
        alert('Data pendeta gagal ditambahkan ');
        document.location.href = 'jemaat.php'
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
          <li class="breadcrumb-item"><a href="#">Jemaat</a></li>
          <li class="breadcrumb-item"><a href="pendeta.php">Pendeta</a></li>
          <li class="breadcrumb-item"><a href="majelis.php">Majelis</a></li>
        </ol>
      </nav>
      <h2 class="mt-5 mb-3 font-weight-bolder"> Input Data Pendeta</h2>
      <form action="" method="post">
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
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Pendeta">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group font-weight-bold">
              <label for="tmpt">Tempat Lahir :</label>
              <input type="text" class="form-control" id="tmpt" name="tmpt" >
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group font-weight-bold">
              <label for="lahir">Tanggal Lahir :</label>
              <input type="date" class="form-control" id="lahir" name="lahir" >
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="gol-drh">Golongan Darah :</label>
            </div>
            <div class="col-md-9">          
              <select class="form-control" id="gol-drh" name="gol-drh">
                <option value="">- Golongan Darah -</option> 
                <option >A</option>
                <option >B</option>
                <option >AB</option>
                <option >O</option>
                <option >A-</option>
                <option >B-</option>
                <option >O-</option>
                <option >AB-</option>
                <option >A+</option>
                <option >B+</option>
                <option >O+</option>
                <option >AB+</option>
              </select>
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="kelamin">Jenis Kelamin :</label>
            </div>
            <div class="col-md-9">          
              <select class="form-control" id="kelamin" name="kelamin">
                <option >- Jenis Kelamin -</option> 
                <option >Laki-Laki</option>
                <option >Perempuan</option>
              </select>
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="baptis">Status Baptis:</label>
            </div>
            <div class="col-md-9">          
              <select class="form-control" id="baptis" name="baptis">
                <option >- Status Baptis -</option> 
                <option >Sudah</option>
                <option >Belum</option>
              </select>
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="sidi">Status Sidi:</label>
            </div>
            <div class="col-md-9">          
              <select class="form-control" id="sidi" name="sidi">
                <option >- Status Sidi -</option> 
                <option >Sudah</option>
                <option >Belum</option>
              </select>
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="nikah">Status Sidi:</label>
            </div>
            <div class="col-md-9">          
              <select class="form-control" id="nikah" name="nikah">
                <option >- Status Pernikahan -</option> 
                <option >Sudah</option>
                <option >Belum</option>
              </select>
            </div>
          </div>
        </div>    

        <div class="row">
          <div class="col-md-6">
            <div class="form-group font-weight-bold">
              <label for="tmpt-nikah">Tempat Pernikahan :</label>
              <input type="text" class="form-control" id="tmpt-nikah" name="tmpt-nikah" >
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group font-weight-bold">
              <label for="tgl-nikah">Tanggal Pernikahan :</label>
              <input type="date" class="form-control" id="tgl-nikah" name="tgl-nikah" >
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="pendidikan">Pendidikan Terakhir :</label>
            </div>
            <div class="col-md-9">          
              <select class="form-control" id="pendidikan" name="pendidikan">
                <option >- Pendidikan Terakhir -</option> 
                <option >SD</option>
                <option >SMP</option>
                <option >SMA</option>
                <option >Diploma 1</option>
                <option >Diploma 3</option>
                <option >Strata 1</option>
                <option >Strata 2</option>
                <option >Strata 3</option>
                <option >Lainnya</option>
              </select>
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="gelar">Gelar Akademik :</label>
            </div>
            <div class="col-md-9">          
              <input type="text" class="form-control" id="gelar" name="gelar" placeholder="Masukan Gelar Akademik Pendeta">
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="kerja">Pekerjaan :</label>
            </div>
            <div class="col-md-9">          
              <input type="text" class="form-control" id="kerja" name="kerja" placeholder="Masukan Pekerjaan Pendeta">
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="unsur">Unsur :</label>
            </div>
            <div class="col-md-9">          
              <select class="form-control" id="unsur" name="unsur">
                <option >- Lingkungan -</option> 
                <option >WIJK AGAPE</option>
                <option >WIJK IRENE</option>
                <option >WIJK MARTURIA</option>
              </select>
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="persekutuan">Persekutuan :</label>
            </div>
            <div class="col-md-9">          
              <select class="form-control" id="persekutuan" name="persekutuan">
                <option >- Persekutuan -</option> 
                <option >PKB OTTO</option>
                <option >PKB GEISLER</option>
                <option >PW HANNA</option>
                <option >PW RUTH</option>
                <option >Anak Sekolah Minggu</option>
                <option >Persekutuan Anak Remaja</option>
                <option >Persekutuan Anak Muda</option>
              </select>
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="suku">Asal Suku :</label>
            </div>
            <div class="col-md-9">          
              <input type="text" class="form-control" id="suku" name="suku" placeholder="Masukan Asal Suku Pendeta">
            </div>
          </div>
        </div>

        <div class="form-group font-weight-bold">
          <div class="row">
            <div class="col-md-3">
              <label for="domisili">Tahun Domisili Dijemaat :</label>
            </div>
            <div class="col-md-9">          
              <input type="text" class="form-control" id="domisili" name="domisili" placeholder="Masukan Tahun Domisili Pendeta">
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
             <select class="form-control" id="keterangan" name="keterangan">
                <option>- Keterangan -</option>
                <option >Kepala Keluarga</option>
                <option >Istri</option>
                <option >Anak</option>
              </select>
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
