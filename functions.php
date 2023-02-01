<?php 

// koneksi ke database

$conn = mysqli_connect("localhost", "root", "", "datajemaatgereja");


// query

function query($query) {
	global $conn;

	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}



function majelis($data) {
	global $conn;

	$id_majelis = htmlspecialchars($data["id_majelis"]);
	$no_kk = htmlspecialchars($data["kk"]);
	$nama = htmlspecialchars($data["nama"]);
	$tempat_lahir = htmlspecialchars($data["tmpt"]);
	$tanggal_lahir = date('Y-m-d', strtotime($data['lahir']));
	$jenis_kelamin = htmlspecialchars($data["jenis"]);
	$jabatan = htmlspecialchars($data["jabatan"]);
	$tanggal_dilantik = date('Y-m-d', strtotime($data['tgl-lantik']));
	$tanggal_berakhir = date('Y-m-d', strtotime($data['tgl-akhir']));
	$keterangan = htmlspecialchars($data["keterangan"]);

	// // upload gambar
	// $foto = upload();
    // if( !$foto ) {
    // 	return false;
    // }
	

	// query

	$query = "INSERT INTO db_majelis
				VALUES 
				('','$id_majelis', '$no_kk', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$jabatan', '$tanggal_dilantik', '$tanggal_berakhir', '$foto', '$keterangan')
			";

	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);

	// cek data berhasil ditambahkan

	if( mysqli_affected_rows($conn) > 0 ){
		echo "Data majelis berhasil ditambahkan";
	}else {
		echo "Data majelis gagal ditambahkan";
	}

}

// function upload() {

// 	$namaFile = $_FILES['foto']['name'];
// 	$ukuranFile = $_FILES['foto']['size'];
// 	$error = $_FILES['foto']['error'];
// 	$tmpName = $_FILES['foto']['tmp_name'];

// 	// cek apakah tidak ada foto yang diupload
// 	if( $error === 4 ) {
// 		echo "<script>
// 				alert('foto belum diupload');
// 				</script>";

// 		return false;
// 	}

// 	// cek yg diupload gambar atau bukan
// 	$ekstensiFotoValid = ['jpg', 'jpeg', 'png', 'pdf'];
// 	$ekstensiFoto = explode('.', $namaFile);
// 	$ekstensiFoto = strtolower(end($ekstensiFoto));

// 	if( !in_array($ekstensiFoto, $ekstensiFotoValid)) {
// 		echo "<script>
// 				alert('Yang anda upload bukan foto');
// 				</script>";

// 		return false;
// 	}

		
		
	


// }




function jemaat($data){
	global $conn;

	$no_kk = htmlspecialchars($data["kk"]);
	$nama = htmlspecialchars($data["nama"]);
	$tempat_lahir = htmlspecialchars($data["tmpt"]);
	$tanggal_lahir = date('Y-m-d', strtotime($data['lahir']));
	$jenis_kelamin = htmlspecialchars($data["kelamin"]);
	$golongan_darah = htmlspecialchars($data["gol-drh"]);
	$status_baptis = htmlspecialchars($data["baptis"]);
	$status_sidi = htmlspecialchars($data["sidi"]);
	$status_nikah = htmlspecialchars($data["nikah"]);
	$tanggal_pernikahan = date('Y-m-d', strtotime($data['tgl-nikah']));
	$tempat_pernikahan = htmlspecialchars($data["tmpt-nikah"]);
	$pendidikan_terakhir = htmlspecialchars($data["pendidikan"]);
	$gelar_akademik = htmlspecialchars($data["gelar"]);
	$pekerjaan = htmlspecialchars($data["kerja"]);
	$unsur = htmlspecialchars($data["unsur"]);
	$persekutuan = htmlspecialchars($data["persekutuan"]);
	$asal_suku = htmlspecialchars($data["suku"]);
	$tahun_domisili = htmlspecialchars($data["domisili"]);
	$foto = htmlspecialchars($data["foto"]);
	$keterangan = htmlspecialchars($data["keterangan"]);


	$query = "INSERT INTO db_jemaat
				VALUES 
				('', '$no_kk', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$golongan_darah', '$status_baptis', '$status_sidi', '$status_nikah', '$tanggal_pernikahan', '$tempat_pernikahan', '$pendidikan_terakhir', '$gelar_akademik', '$pekerjaan', '$unsur', '$persekutuan', '$asal_suku', '$tahun_domisili', '$foto', '$keterangan')
			";
	mysqli_query($conn,$query);
	
	return mysqli_affected_rows($conn);

	// cek data berhasil ditambahkan
	if( mysqli_affected_rows($conn) > 0 ) {
		echo "Data jemaat berhasil ditambahkan";
	}else {
		echo "Data jemaat gagal ditambahkan";
	}
}

function pendeta($data){
	global $conn;

	$no_kk = htmlspecialchars($data["kk"]);
	$nama = htmlspecialchars($data["nama"]);
	$tempat_lahir = htmlspecialchars($data["tmpt"]);
	$tanggal_lahir = date('Y-m-d', strtotime($data['lahir']));
	$jenis_kelamin = htmlspecialchars($data["kelamin"]);
	$golongan_darah = htmlspecialchars($data["gol-drh"]);
	$status_baptis = htmlspecialchars($data["baptis"]);
	$status_sidi = htmlspecialchars($data["sidi"]);
	$status_nikah = htmlspecialchars($data["nikah"]);
	$tanggal_pernikahan = date('Y-m-d', strtotime($data['tgl-nikah']));
	$tempat_pernikahan = htmlspecialchars($data["tmpt-nikah"]);
	$pendidikan_terakhir = htmlspecialchars($data["pendidikan"]);
	$gelar_akademik = htmlspecialchars($data["gelar"]);
	$pekerjaan = htmlspecialchars($data["kerja"]);
	$unsur = htmlspecialchars($data["unsur"]);
	$persekutuan = htmlspecialchars($data["persekutuan"]);
	$asal_suku = htmlspecialchars($data["suku"]);
	$tahun_domisili = htmlspecialchars($data["domisili"]);
	$foto = htmlspecialchars($data["foto"]);
	$keterangan = htmlspecialchars($data["keterangan"]);


	$query = "INSERT INTO db_pendeta
				VALUES 
				('', '$no_kk', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$golongan_darah', '$status_baptis', '$status_sidi', '$status_nikah', '$tanggal_pernikahan', '$tempat_pernikahan', '$pendidikan_terakhir', '$gelar_akademik', '$pekerjaan', '$unsur', '$persekutuan', '$asal_suku', '$tahun_domisili', '$foto', '$keterangan')
			";
	mysqli_query($conn,$query);
	
	return mysqli_affected_rows($conn);

	// cek data berhasil ditambahkan
	if( mysqli_affected_rows($conn) > 0 ) {
		echo "Data pendeta berhasil ditambahkan";
	}else {
		echo "Data pendeta gagal ditambahkan";
	}
}

function hpsJmt($id) {
	global $conn;

	mysqli_query($conn, "DELETE FROM db_jemaat WHERE no = $id");

	return mysqli_affected_rows($conn);
}

function hpsPdt($id) {
	global $conn;

	mysqli_query($conn, "DELETE FROM db_pendeta WHERE no = $id");

	return mysqli_affected_rows($conn);
}

function hpsMjs($id) {
	global $conn;

	mysqli_query($conn, "DELETE FROM db_majelis WHERE no = $id");

	return mysqli_affected_rows($conn);
}


function ubahPdt($data) {
	global $conn;

	$id = $data["id"];
	$no_kk = htmlspecialchars($data["kk"]);
	$nama = htmlspecialchars($data["nama"]);
	$tempat_lahir = htmlspecialchars($data["tmpt"]);
	$tanggal_lahir = date('Y-m-d', strtotime($data['lahir']));
	$jenis_kelamin = htmlspecialchars($data["kelamin"]);
	$golongan_darah = htmlspecialchars($data["gol-drh"]);
	$status_baptis = htmlspecialchars($data["baptis"]);
	$status_sidi = htmlspecialchars($data["sidi"]);
	$status_nikah = htmlspecialchars($data["nikah"]);
	$tanggal_pernikahan = date('Y-m-d', strtotime($data['tgl-nikah']));
	$tempat_pernikahan = htmlspecialchars($data["tmpt-nikah"]);
	$pendidikan_terakhir = htmlspecialchars($data["pendidikan"]);
	$gelar_akademik = htmlspecialchars($data["gelar"]);
	$pekerjaan = htmlspecialchars($data["kerja"]);
	$unsur = htmlspecialchars($data["unsur"]);
	$persekutuan = htmlspecialchars($data["persekutuan"]);
	$asal_suku = htmlspecialchars($data["suku"]);
	$tahun_domisili = htmlspecialchars($data["domisili"]);
	$foto = htmlspecialchars($data["foto"]);
	$keterangan = htmlspecialchars($data["keterangan"]);


	$query = "UPDATE db_pendeta SET 


					no_kk = '$no_kk',
					nama = '$nama',
					tempat_lahir = '$tempat_lahir',
					tanggal_lahir = '$tanggal_lahir',
					jenis_kelamin = '$jenis_kelamin',
					golongan_darah = '$golongan_darah',
					status_baptis = '$status_baptis',
					status_sidi = '$status_sidi',
					status_nikah = '$status_nikah',
					tgl_nikah = '$tanggal_pernikahan',
					tmpt_nikah = '$tempat_pernikahan',
					pendidikan_terakhir = '$pendidikan_terakhir',
					gelar_akademik = '$gelar_akademik',
					pekerjaan = '$pekerjaan',
					unsur = '$unsur',
					persekutuan = '$persekutuan',
					asal_suku = '$asal_suku',
					tahun_domisili = '$tahun_domisili',
					foto = '$foto',
					keterangan = '$keterangan'
				WHERE no = $id
			";
	mysqli_query($conn,$query);
	
	return mysqli_affected_rows($conn);

	// cek data berhasil ditambahkan
	if( mysqli_affected_rows($conn) > 0 ) {
		echo "Data pendeta berhasil ditambahkan";
	}else {
		echo "Data pendeta gagal ditambahkan";
	}
}

function ubahJmt($data) {
	global $conn;

	$id = $data["id"];
	$no_kk = htmlspecialchars($data["kk"]);
	$nama = htmlspecialchars($data["nama"]);
	$tempat_lahir = htmlspecialchars($data["tmpt"]);
	$tanggal_lahir = date('Y-m-d', strtotime($data['lahir']));
	$jenis_kelamin = htmlspecialchars($data["kelamin"]);
	$golongan_darah = htmlspecialchars($data["gol-drh"]);
	$status_baptis = htmlspecialchars($data["baptis"]);
	$status_sidi = htmlspecialchars($data["sidi"]);
	$status_nikah = htmlspecialchars($data["nikah"]);
	$tanggal_pernikahan = date('Y-m-d', strtotime($data['tgl-nikah']));
	$tempat_pernikahan = htmlspecialchars($data["tmpt-nikah"]);
	$pendidikan_terakhir = htmlspecialchars($data["pendidikan"]);
	$gelar_akademik = htmlspecialchars($data["gelar"]);
	$pekerjaan = htmlspecialchars($data["kerja"]);
	$unsur = htmlspecialchars($data["unsur"]);
	$persekutuan = htmlspecialchars($data["persekutuan"]);
	$asal_suku = htmlspecialchars($data["suku"]);
	$tahun_domisili = htmlspecialchars($data["domisili"]);
	$foto = htmlspecialchars($data["foto"]);
	$keterangan = htmlspecialchars($data["keterangan"]);


	$query = "UPDATE db_jemaat SET 


					no_kk = '$no_kk',
					nama = '$nama',
					tempat_lahir = '$tempat_lahir',
					tanggal_lahir = '$tanggal_lahir',
					jenis_kelamin = '$jenis_kelamin',
					golongan_darah = '$golongan_darah',
					status_baptis = '$status_baptis',
					status_sidi = '$status_sidi',
					status_nikah = '$status_nikah',
					tanggal_pernikahan = '$tanggal_pernikahan',
					tempat_pernikahan = '$tempat_pernikahan',
					pendidikan_terakhir = '$pendidikan_terakhir',
					gelar_akademik = '$gelar_akademik',
					pekerjaan = '$pekerjaan',
					unsur = '$unsur',
					persekutuan = '$persekutuan',
					asal_suku = '$asal_suku',
					tahun_domisili = '$tahun_domisili',
					foto = '$foto',
					keterangan = '$keterangan'
				WHERE no = $id
			";
	mysqli_query($conn,$query);
	
	return mysqli_affected_rows($conn);

	// cek data berhasil ditambahkan
	if( mysqli_affected_rows($conn) > 0 ) {
		echo "Data jemaat berhasil ditambahkan";
	}else {
		echo "Data jemaat gagal ditambahkan";
	}
}

function ubahMjs($data) {
	global $conn;

	$id = $data["id"];
	$id_majelis = htmlspecialchars($data["id_majelis"]);
	$no_kk = htmlspecialchars($data["kk"]);
	$nama = htmlspecialchars($data["nama"]);
	$tempat_lahir = htmlspecialchars($data["tmpt"]);
	$tanggal_lahir = date('Y-m-d', strtotime($data['lahir']));
	$jenis_kelamin = htmlspecialchars($data["kelamin"]);
	$jabatan = htmlspecialchars($data["jabatan"]);
	$tanggal_dilantik = date('Y-m-d', strtotime($data['tgl_lantik']));
	$tanggal_berakhir = date('Y-m-d', strtotime($data['tgl-akhir']));
	$foto = htmlspecialchars($data["foto"]);
	$keterangan = htmlspecialchars($data["keterangan"]);


	$query = "UPDATE db_majelis SET 


					id_majelis = '$id_majelis',
					no_kk = '$no_kk',
					nama = '$nama',
					tempat_lahir = '$tempat_lahir',
					tgl_lahir = '$tanggal_lahir',
					jenis_kelamin = '$jenis_kelamin',
					jabatan = '$jabatan',
					tgl_dilantik = '$tanggal_dilantik',
					tgl_berakhir = '$tanggal_berakhir',
					foto = '$foto',
					keterangan = '$keterangan'
				WHERE no = $id
			";
	mysqli_query($conn,$query);
	
	return mysqli_affected_rows($conn);

	// cek data berhasil ditambahkan
	if( mysqli_affected_rows($conn) > 0 ) {
		echo "Data jemaat berhasil ditambahkan";
	}else {
		echo "Data jemaat gagal ditambahkan";
	}
}

function cariJmt($keyword) {

	global $conn;
	$query = "SELECT * FROM db_jemaat 

				WHERE 

				nama LIKE '%$keyword%' OR
				unsur LIKE '%$keyword%' OR
				persekutuan LIKE '%$keyword%'
			";
	return query($query);

}

function cariMjs($keyword) {

	global $conn;
	$query = "SELECT * FROM db_majelis 

				WHERE 

				nama LIKE '%$keyword%' OR
				jabatan LIKE '%$keyword%' OR
				id_majelis LIKE '%$keyword%' 
				
			";
	return query($query);

}

function cariPdt($keyword) {

	global $conn;
	$query = "SELECT * FROM db_pendeta 

				WHERE 

				nama LIKE '%$keyword%' OR
				unsur LIKE '%$keyword%' OR
				persekutuan LIKE '%$keyword%'
				
			";
	return query($query);

}

// function countUnsur ($getUnsur) {
// 	global $conn;

// 	$countUnsur = mysqli_num_rows($getUnsur);

// 	return query;
// }





?>
