<?php 

require 'functions.php';

$id = $_GET["id"];




if( hpsPdt($id) > 0) {

	echo "
	      <script>
	        alert('Data pendeta berhasil dihapus');
	        document.location.href = 'isipendeta.php'
	      </script>
	    ";
	  }else {
	    echo "
	      <script>
	        alert('Data pendeta gagal dihapus ');
	        document.location.href = 'isipendeta.php'
	      </script>
	    ";
	  }




?>
