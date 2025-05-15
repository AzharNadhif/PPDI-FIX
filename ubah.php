<?php

require 'function.php';

$id = $_GET['id'];

$artikel = read("SELECT * FROM berita WHERE id_artikel = $id")[0];

if(isset($_POST['submit']) ){
	if(ubah($_POST) > 0 ){
		echo "
		<script>	
			alert('Data Berhasil di ubah!');
			document.location.href = 'tabelartikel.php';
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>ubah Data</title>
  </head>
  <body>
  
  <!-- FORM -->
  <div class="container">
        <form action="" method="post" enctype="multipart/form-data">

            <input type="hidden" class="form-control" id="id" name = "id" required value = "<?= $artikel['id_artikel'] ?>">
            <input type="hidden" class="form-control"name = "gambarLama" required value = "<?= $artikel['gambar'] ?>">
        
            <ul>
                <li>
                    <label for=" nama">Judul</label>
                    <input type="text" id="judul" name="judul" class="form-control" required="" value="<?= $artikel['judul'] ?>">
            </li>
            </ul>
            <ul>
                <li>
                    <label for="tanggal">tanggal</label>
                    <input type="date" id="tanggal" name="tanggal" class="form-control"  required="" value="<?= $artikel['tanggal'] ?>">
                </li>
            </ul>
            <ul>
                <li>
                    <label for="gambar">gambar</label> <br>
                    <img src="artikel/<?= $artikel['gambar']?>" style="width: 150px;"><br> <br>
                    <input type="file" class="gambar" name="gambar" id="gambar">
                </li>
            </ul>
            <ul>
                <li>
                    <label for="isi">Isi</label>
                    <input type="text" id="isi" name="isi" class="form-control" required="" value="<?= $artikel['isi'] ?>">
                </li>
            </ul>
            <ul>
                <li>
                    <label for="id_kategori">id_kategori</label>
                    <input type="text" id="id_kategori" name="id_kategori" class="form-control" required="" value="<?= $artikel['id_kategori'] ?>">
                </li>
            </ul>
            <ul>
                <li>
                    <label for="penulis">penulis</label>
                    <input type="text" id="penulis" name="penulis" class="form-control" required="" value="<?= $artikel['penulis'] ?>">
                </li>
            </ul>
            <br>
            <button class = "btn btn-primary float-right" type = "submit" name = "submit" value="submit">Submit</button>
        </form>
    </div>
		
  </div>
	
  
  
  
  <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>