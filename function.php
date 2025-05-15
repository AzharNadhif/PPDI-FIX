<?php

$conn = mysqli_connect('localhost:3307', 'root', 'root', 'artikel1');

function query ($query){
		global $conn;
		$result = mysqli_query( $conn, $query );
		$rows = [];
		while ( $row = mysqli_fetch_assoc($result)){
			$rows[]= $row;
		}
		return $rows;
}


function read($query){

    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    
    while($row = mysqli_fetch_assoc($result)){

        $rows[] = $row;

    }

    return $rows;
}



function hapus($id){
		global $conn;
		mysqli_query($conn, "DELETE FROM berita WHERE id_artikel = $id");
	
		return mysqli_affected_rows($conn);
}
	
function tambah($data){
    global $conn;

	$id = htmlspecialchars($data["id"]);
	$judul = htmlspecialchars($data["judul"]);
	$tanggal = htmlspecialchars($data["tanggal"]);
	//upload foto
    $gambar = upload();
    if (!$gambar){
        return false;
    }
	$isi = htmlspecialchars($data["isi"]);
	$kategori = htmlspecialchars($data["id_kategori"]);
	$penulis = htmlspecialchars($data["penulis"]);
	


    $query = "INSERT INTO berita VALUES 
	('','$judul','$tanggal','$gambar','$isi','$kategori','$penulis')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function ubah($data){
	global $conn;

			$id = ($data["id"]);
			$judul = htmlspecialchars($data["judul"]);
			$tanggal = htmlspecialchars($data["tanggal"]);
			$gambarLama = htmlspecialchars($data["gambarLama"]);

			//cek apakah pilih gambar baru/tidak
			if ($_FILES['gambar']['error']=== 4 ){
				$gambar = $gambarLama;
			} else {
				$gambar = upload();
			}

			$isi = htmlspecialchars($data["isi"]);
			$kategori = htmlspecialchars($data["id_kategori"]);
			$penulis = htmlspecialchars($data["penulis"]);

				$query = "UPDATE berita SET
						judul = '$judul',
						tanggal = '$tanggal',
						gambar = '$gambar',
						isi =  '$isi',
						id_kategori = '$kategori',
						penulis = '$penulis'

					WHERE id = $id
				";

				mysqli_query($conn, $query);

				return mysqli_affected_rows($conn);
}



function upload(){
	global $conn;

	$namaFile = $_FILES['gambar']['name'];
	$tmpName = $_FILES['gambar']['tmp_name'];
	$sizeFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];

	if($error == 4){
		echo "
		<script>	
			alert('Tolong Upload Gambar!');
			document.location.href = 'tabelartikel.php';
		</script>
		";

		return false;
	}

	$ekstensiGambarFix = ['jpg','png','gif', 'jpeg'];
	$ekstensiGambar = explode('.',$namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if(!in_array($ekstensiGambar,$ekstensiGambarFix)){
		echo "
		<script>	
			alert('Tolong Upload Gambar, Jangan yang lain!');
			document.location.href = 'tabelartikel.php';
		</script>
		";
		return false;
	}


	if($sizeFile > 10000000){
		echo "
		<script>	
			alert('File terlalu besarr!');
			document.location.href = 'ubah.php';
		</script>
		";
		return false;
	}

	$newNamaFile = uniqid();
	$newNamaFile .= '.';
	$newNamaFile .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'artikel/' . $newNamaFile);

	return $newNamaFile;
	
}




