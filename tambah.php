<?php
require 'function.php';

if (isset($_POST["submit"])) {



    //cek data berhasil atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Terima Kasih Data Anda Berhasil ditambahkan !');
                document.location.href = 'tabelartikel.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambahkan !');
            document.location.href = 'tabelartikel.php';
        </script>
        ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

     <!-- FONT INTER -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Registrasi</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>

<body>
        <h1 style="text-align:center; margin-top: 50px;">Tambahkan Data Artikel</h1>

    <!-- FORM -->
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <ul>
                <li>
                    <label for=" nama">Judul</label>
            <input type="text" id="Judul" name="judul" class="form-control" placeholder="Masukkan judul" required="">
            </li>
            </ul>
            <ul>
                <li>
                    <label for="tanggal">tanggal</label>
                    <input type="date" id="tanggal" name="tanggal" class="form-control" placeholder="Masukkan Nama Kota" required="">
                </li>
            </ul>
            <ul>
                <li>
                    <label for="gambar">gambar</label>
                    <input type="file" class="gambar" name="gambar" id="gambar">
                </li>
            </ul>
            <ul>
                <li>
                    <label for="isi">Isi</label>
                    <input type="text" id="isi" name="isi" class="form-control" placeholder="Contoh : Indonesia" required="">
                </li>
            </ul>
            <ul>
                <li>
                    <label for="id_kategori">id_kategori</label>
                    <input type="text" id="id_kategori" name="id_kategori" class="form-control" placeholder="Masukkan Alamat" required="">
                </li>
            </ul>
            <ul>
                <li>
                    <label for="penulis">penulis</label>
                    <input type="text" id="penulis" name="penulis" class="form-control" placeholder="contoh@gmail.com" required="">
                </li>
            </ul>
            <br>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>