<?php 

require 'functions.php';

$id = $_GET["id"];


if( hpsMjs($id) > 0) {

	echo "
	      <script>
	        alert('Data majelis berhasil dihapus');
	        document.location.href = 'isimajelis.php'
	      </script>
	    ";
	  }else {
	    echo "
	      <script>
	        alert('Data majelis gagal dihapus ');
	        document.location.href = 'isimajelis.php'
	      </script>
	    ";
	  }




?>
