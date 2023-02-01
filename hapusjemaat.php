<?php 

require 'functions.php';

$id = $_GET["id"];


if( hpsJmt($id) > 0) {

	echo "
	      <script>
	        alert('Data jemaat berhasil dihapus');
	        document.location.href = 'isijemaat.php'
	      </script>
	    ";
	  }else {
	    echo "
	      <script>
	        alert('Data jemaat gagal dihapus ');
	        document.location.href = 'isijemaat.php'
	      </script>
	    ";
	  }




?>
