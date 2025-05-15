<?php
  require 'function.php';

  // $artikel = query("SELECT * FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id_kategori");
  $artikel = query("SELECT * FROM berita WHERE id_kategori = 1");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Website Icon"type="png" href="/images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">

    <!-- FOOTER -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

    <title>Artikel-PPDI</title>

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
              <a class="btn" href="https://forms.gle/C4qgRErM5FoRqHid6" role="button">Bergabung Komunitas</a>
            </div>
          </div>
        </div>
      </nav>
  
    <!-- AKHIR NAVBAR -->

    <!-- LIST ARTIKEL -->
    <div container>
      
      <div class="row">
          <h2 style="margin-left: 100px; margin-top: 50px;"> <b> Artikel Terbaru </b></h2>
          <!-- ARTIKEL 1 -->
              <div class="col-md-6 py-5">
                <?php foreach($artikel as $ar): ?>
                  <div class="card">
                      <img class="card-img-top" src="artikel/<?= $ar['gambar'] ?>" alt="Card image cap" >
                      <div class="card-body">
                        <h4 class="card-title"> <?= $ar ['judul']?> </h4>
                        <p class="card-text" style="text-align: justify;">
                          <?= substr($ar ['isi'], 0,200)?>
                        </p>
                        <a href="baca2.php?id=<?= $ar['id_artikel']?>" class="btn"> <b> Selengkapnya </b></a>
                      </div>
                    </div>
                    <?php endforeach ?>
              </div>
              <!-- KATEGORI -->
              <div class="col-md-4 py-5">
                <div class="list-group">
                  <a href="#" class="list-group-item list-group-item-action"><b>Kategori</b></a>
                      <a href="berita.php" class="list-group-item list-group-item-action">berita</a>
                      <a href="edukasi.php" class="list-group-item list-group-item-action">edukasi</a>
                      <a href="aktifitas.php" class="list-group-item list-group-item-action">aktifitas</a>
                </div>
              </div>
              
            </div>

            <!-- SKIP -->
            <div class="col-md-4 py-5">
              <div class="iklan">
                <h2 style="text-align: left;"> <b> Mau dapat berita terbaru? </b> </h2>
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
              dan artikel terbaru lainnya!
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

    