<?php
require 'function.php';
$query = query("SELECT * FROM berita");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="style.css">

        <!-- FONT INTER -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <title>Tabel Data</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <title>Tampilan Data</title>
    </head>

    <body>
        <h1 style="text-align: center; margin-top: 20px;">Data Artikel</h1>
        <a class="btn btn-primary btn-lg" style="margin-top:30px; margin-left: 625px; margin-bottom: 20px;" href="tambah.php">Tambah Artikel</a>
        <table class="table" style="">
            <thead class="thead-dark">

                <tr>
                    <th> Id Artikel</th>
                    <th> Judul</th>
                    <th> Tanggal publish</th>
                    <th> Gambar </th>
                    <th> Isi Artikel</th>
                    <th> Id kategori</th>
                    <th> nama penulis</th>
                    <th>Edit | Hapus</th>
                </tr>
            </thead>
            <?php $i = 1; ?>
            <?php foreach ($query as $u) : ?>
                <tbody class="table table-bordered">
                    <tr>
                        <td><?= $u['id_artikel'] ?></td>
                        <td><?= $u['judul'] ?></td>
                        <td><?= $u['tanggal'] ?></td>
                        <td><img src="artikel/<?= $u['gambar']; ?>" width="100" alt=""></td>
                        <td><?= $u['isi'] ?></td>
                        <td><?= $u['id_kategori'] ?></td>
                        <td><?= $u['penulis'] ?></td>
                        <td>
                            <a href="ubah.php?id=<?= $u["id_artikel"]; ?> "class="btn btn-info" style="color: white;">Ubah</a> |
                            <a href="hapus.php?   id=<?= $u["id_artikel"]; ?>" onclick="return confirm ('yakin ingin menghapus data ?')" ; class="btn btn-danger style="color: white;">Hapus</a>
                        </td>
                    </tr>
                </tbody>
                <?php $i++ ?>
            <?php endforeach ?>


        </table>
    </body>

    </html>
</body>

</html>