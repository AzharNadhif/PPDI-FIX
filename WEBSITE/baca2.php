<?php
  require 'function.php';
  $id = $_GET['id'];
  $berita = query("SELECT * FROM berita WHERE id_artikel = $id") [0];
  $query = query("SELECT * FROM berita limit 0,3");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Website Icon"type="png" href="/images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style3.css">

    <!-- FOOTER -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

    <title>Berita 2</title>

    <!-- FONT INTER -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

   <!-- CTA WASSAPP -->
   <a href="https://wa.wizard.id/fe9977" class="float" target="_blank">
      <i class="fa fa-whatsapp my-float"></i>
  </a>
  <!-- AKHIR CTA WASSAP -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-light fixed">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="images/logo.png" width="70" height="70" alt="">
          </a>      
          <!-- <a class="navbar-brand bold" href="#">PPDI Kota Bogor</a> -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="homepage.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tentangkami.html">Tentang Kami</a>
              </li>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="artikel.php">Artikel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="donasi.html">Donasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sukarelawan.html">Sukarelawan</a>
              </li>
            </ul>
            <div class="topnav-right">
              <a class="btn btn-primary" href="https://forms.gle/C4qgRErM5FoRqHid6" role="button">Bergabung Komunitas</a>
            </div>
          </div>
        </div>
      </nav>
  
    <!-- AKHIR NAVBAR -->

    <!-- CONTAINER -->
    <ul class="breadcrumb">
      <li><a href="artikel.php">Artikel</a></li>
      <li><a href=" artikel.php"><?= $berita['id_kategori']?></a></li>
      <li><a href="<?= $berita['id'] ?>"><?= $berita['judul']?></a></li>
    </ul>
    <div class="container">
        <h2> <?= $berita ['judul']?> </h2>
        <!-- BANNER -->
        <div class="shadow " style="border-radius: 25px;">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="banner">
                    <img class="d-block w-100" src="artikel/<?= $berita['gambar'] ?>" alt="First slide">
                </div>
        </div>
        </div>
        <!-- AKHIR BANNER -->

        <br><br>
        <h6><?= $berita['tanggal'] ?> - Oleh <?= $berita['penulis'] ?></h6>
        <br>
        <div class="paragraf">
           <?= $berita ['isi'] ?>
        </div>
        <br>
        <h2>Artikel lainnya</h2>
    
        <!-- ARTIKEL BOX -->
       
            <div class="blog-container">
            <?php foreach ($query as $q): ?>
                <!-- BOX 1 -->
              <div class="zoom">
              
                <div class="blog-box">

                        <!-- BLOG IMG 1-->
                        <div class="blog-img">
                            <img src="artikel/<?= $q['gambar'] ?>" alt="Blog">
                        </div>

                        <!-- TEXT -->
                        <div class="blog-text">
                        <span style="font-size: 12px";> <?= $q['tanggal'] ?> / Artikel</span> 
                        <a href="#" class="blog-title"><b><?= $q['judul'] ?></b></a>
                        <p>
                          <?= substr ($q['isi'], 0,200)?>
                        </p>
                        <a class="btn" href="baca2.php?id=<?= $q['id_artikel']?>" role="button" style="background-color:#3494B2;"> Selengkapnya </a>
                        </div>
                </div>
              </div>
          <?php endforeach ?>
         </div>
            

        <!-- AKHIR ARTIKEL -->


        
    </div>

    <!-- AKHIR CONTAINER -->

  
 <!-- Footer -->
<footer class="footer">
  <div class="footer-left">
      <h3> <b> PPDI KOTA BOGOR</b></h3>
      <div class="logo">
          <img src="images/logo.png" alt="">
      </div>
      <p class="footer-copyright">@2023 Tadika Mesra</p>
  </div>

  <div class="footer-center">
      <div>
          <i class="fa fa-map-marker" style="background-color: #3494B2;"></i>
          <p> <a href="https://maps.app.goo.gl/h8TfgepQ7PhRroPdA">Loka Bina Karya, Tegal Gundil Bogor</a></p>
      </div>
      <div>
          <i class="fa fa-phone" style="background-color: #3494B2;"></i>
          <p>087781166562</p>
      </div>
      <div>
          <i class="fa fa-envelope" style="background-color: #3494B2;"></i>
          <p><a href="#">dpcppdiktbogor@gmail.com</a></p>
      </div>
  </div>
  <div class="footer-right">
      <h3> <b>Bergabung Sekarang</b></h3>
          <p class="footer-about">
              Dapatkan Informasi seputar Teman Disabilitas 
              dan artikel terbaru lainnya!
          </p>

      <!-- POP UP -->

          <!-- Button trigger modal -->
          <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border-radius: 25px; margin-top: 10px; background-color: #3494B2; color: #ffffff;"> <b>
              Subscribe </b>
          </button>
          
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Bergabung Sekarang!</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <form>
                        <div class="mb-3">
                          <h6><b>Subscribe Now !</b></h6>
                          <p>
                              Dapatkan Informasi seputar Teman Disabilitas 
                              dan artikel terbaru lainnya!
                          </p>
                        </div>
                        <div class="mb-3">
                          <label for="email" class="col-form-label">Email:</label>
                          <input type="text" class="form-control" id="email">
                        </div>
                      </form>
                    </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal" style="border-radius: 25px;">Batal</button>
                  <button type="button" class="btn" style="background-color: #3494B2; border-radius: 25px; color: #ffffff;">Simpan</button>
                  </div>
              </div>
              </div>
          </div>
      <!-- AKHIR POP UP -->

      <div class="footer-media" style="margin-left: -0px;">
          <a href="https://www.youtube.com/@SDBOGOR/featured" style="background-color: #205E71;"><i class="fa fa-youtube"></i></a>
          <a href="https://www.instagram.com/dpc.ppdi.kotabogor.22/" style="background-color: #205E71;"><i class="fa fa-instagram" ></i></a>
      </div>
     
  </div>
  

</footer>

<!-- AKHIR FOOTER -->

</body>
</html>