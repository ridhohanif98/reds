<?php 
            include ("counter.php");
             include 'config.php';
            ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Reds Studio</title>

  <!-- Bootstrap core CSS -->
  <link href="up/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="up/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Plugin CSS -->
  <link href="up/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="up/css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary fixed-top " id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">REDS Studio</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#client">Client</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#service">Service</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#tentang">Tentang Kami</a>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#testimoni">Testimoni</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="lihatartikel.php">Blog</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container">
      <img class="img-fluid mb-5 d-block mx-auto" src="up/img/profile.png" alt="">
      <h3> LANGKAH BESAR </h3>
      <h1> BISNIS ANDA </h1>
      <h4> Dimulai Dari Sini, Bersama <b>ReDS Studio.<b> </h4>
      <hr class="star-light">
      <h2 class="font-weight-light mb-0">Web Design & Development - Search Engine Optimization - Search Engine Marketing</h2>
    </div>
  </header>

  <!-- Portfolio Grid Section -->
  <section class="portfolio" id="client">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">Client</h2>
      <hr class="star-dark mb-5">
      <div class="row">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#myModal">Klik Disini Untuk Melihat</button>

        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- konten modal-->
            <div class="modal-content">
              <!-- heading modal -->
              <div class="modal-header">
                <h4 class="modal-title">Client Kami</h4>
              </div>
              <!-- body modal -->
              <div class="modal-body">
                <?php
                //ambil data dari tb_produk dan tb_kategori  di database
                $ambildata=mysqli_query($db, "SELECT * FROM client");
                while($a=mysqli_fetch_array($ambildata)){
                    ?>
                    <div class="text-center mt-3">
                           <img src="admin/image/<?php echo $a['gambar'];?>" width="300px" height="100px">
                         </div>
                <?php
                }
                ?>
              </div>
              <!-- footer modal -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
                include 'config.php';
                $data = mysqli_query($db,"SELECT * FROM service where idservice='1'");
                $row1 = $data->fetch_assoc();
                $data = mysqli_query($db,"SELECT * FROM service where idservice='2'");
                $row2 = $data->fetch_assoc();
                $data = mysqli_query($db,"SELECT * FROM service where idservice='3'");
                $row3 = $data->fetch_assoc();

                $data = mysqli_query($db,"SELECT * FROM about where idabout='1'");
                $row4 = $data->fetch_assoc();
                $data = mysqli_query($db,"SELECT * FROM about where idabout='2'");
                $row5 = $data->fetch_assoc();
                $data = mysqli_query($db,"SELECT * FROM about where idabout='3'");
                $row6 = $data->fetch_assoc();

               


            ?>
  <!-- About Section -->
  <section class="bg-primary text-white mb-0" id="service">
    <div class="container">
      <h2 class="text-center text-uppercase text-white">Service</h2>
      <hr class="star-light mb-5">
      <div class="row">
        <div class="col-lg-4 ml-auto">
          <img class="img-fluid" src="image/<?php echo $row1["gambar"];?>" alt="">
          <center><h3> <?php echo $row1['judul'];?></h3></center>
          <p class="lead"><?php echo $row1['isi'];?></p>
          <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#service1">Detail Produk</button>
            <div id="service1" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- konten modal-->
                <div class="modal-content text-dark">
                  <!-- heading modal -->
                  <div class="modal-header">
                    <h4 class="modal-title">Produk <?php echo $row1['judul'];?> Kami</h4>
                  </div>
                  <!-- body modal -->
                  <div class="modal-body ">

                    <table id="tabeluser" class="table mt-3  mr-3">

                           <thead>
                           <tr>
                               <th>Nama Produk</th>
                               <th><center>Harga</center></th>
                           </tr>
                           </thead>

                           <tbody>

                    <?php
                    //ambil data dari tb_produk dan tb_kategori  di database
                    $ambildata=mysqli_query($db, "SELECT * FROM produk where idservice ='1'");
                    while($a=mysqli_fetch_array($ambildata)){
                        ?>
                           <tr>
                               <td><?php echo $a['namaproduk'];?></td>
                               <td><center><?php echo $a['harga'];?></center></td>
                           </tr>

                    <?php
                    }
                    ?>
                    </tbody>

                    </table>

                  </div>
                  <!-- footer modal -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-lg-4 ml-auto">
          <img class="img-fluid" src="image/<?php echo $row2["gambar"];?>" alt="">
          <center><h3> <?php echo $row2['judul'];?></h3></center>
          <p class="lead"><?php echo $row2['isi'];?></p>
          <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#service2">Detail Produk</button>
                      <div id="service2" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- konten modal-->
                <div class="modal-content text-dark">
                  <!-- heading modal -->
                  <div class="modal-header">
                    <h4 class="modal-title">Produk <?php echo $row2['judul'];?> Kami</h4>
                  </div>
                  <!-- body modal -->
                  <div class="modal-body ">

                    <table id="tabeluser" class="table mt-3  mr-3">

                           <thead>
                           <tr>
                               <th>Nama Produk</th>
                               <th><center>Harga</center></th>
                           </tr>
                           </thead>

                           <tbody>

                    <?php
                    //ambil data dari tb_produk dan tb_kategori  di database
                    $ambildata=mysqli_query($db, "SELECT * FROM produk where idservice ='2'");
                    while($a=mysqli_fetch_array($ambildata)){
                        ?>
                           <tr>
                               <td><?php echo $a['namaproduk'];?></td>
                               <td><center><?php echo $a['harga'];?></center></td>
                           </tr>

                    <?php
                    }
                    ?>
                    </tbody>

                    </table>

                  </div>
                  <!-- footer modal -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                  </div>
                </div>
              </div>
            </div>






        </div>
        <div class="col-lg-4 mr-auto">
          <img class="img-fluid" src="image/<?php echo $row3["gambar"];?>" alt="">
          <center><h3> <?php echo $row3['judul'];?> </h3></center>
          <p class="lead"><?php echo $row3['isi'];?></p>
          <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#service3">Detail Produk</button>
              <div id="service3" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- konten modal-->
                <div class="modal-content text-dark">
                  <!-- heading modal -->
                  <div class="modal-header">
                    <h4 class="modal-title">Produk <?php echo $row3['judul'];?> Kami</h4>
                  </div>
                  <!-- body modal -->
                  <div class="modal-body ">

                    <table id="tabeluser" class="table mt-3  mr-3">

                           <thead>
                           <tr>
                               <th>Nama Produk</th>
                               <th><center>Harga</center></th>
                           </tr>
                           </thead>

                           <tbody>

                    <?php
                    //ambil data dari tb_produk dan tb_kategori  di database
                    $ambildata=mysqli_query($db, "SELECT * FROM produk where idservice ='3'");
                    while($a=mysqli_fetch_array($ambildata)){
                        ?>
                           <tr>
                               <td><?php echo $a['namaproduk'];?></td>
                               <td><center><?php echo $a['harga'];?><center></td>
                           </tr>

                    <?php
                    }
                    ?>
                    </tbody>

                    </table>

                  </div>
                  <!-- footer modal -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                  </div>
                </div>
              </div>
            </div>





        </div>
      </div>
    
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">Contact</h2>
      <hr class="star-dark mb-5">
      <div class="row">
        <div class=" ml-auto">
          <center><img src="image/peta.jpg" style="width:1150px;height:450px;"></center>
          <div class="mt-3">  <center><h3> Detail </h3></center>
          <p class="lead">  • Alamat Lengkap : Jalan Karanganyar No.29 F, Gabahan, Semarang Tengah, Kota Semarang, Jawa, Tengah, Gabahan, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50135<br><br>
            • Email : admin@reds.id<br><br>
            • Telfon : 082266444377</p></div>
        </div>
    </div>
  </section>

  <!-- About Section -->
  <section class="bg-primary text-white mb-0" id="tentang">
    <div class="container">
      <h2 class="text-center text-uppercase text-white">Tentang Kami</h2>
      <hr class="star-light mb-5">
      <div class="row">
        <div class="col-lg-4 ml-auto">
          <img src="image/hai.png" style="width:350px;height:200px;border:0;">
          <center><h3><?php echo $row4['judul'];?></h3></center>
          <p class="lead"><?php echo $row4['isi'];?></p>
        </div>
        <div class="col-lg-4 ml-auto">
          <img src="image/strategi.png" style="width:350px;height:200px;border:0;">
          <center><h3><?php echo $row5['judul'];?></h3></center>
          <p class="lead"><?php echo $row5['isi'];?></p>
        </div>
        <div class="col-lg-4 mr-auto">
          <img src="image/senyum.png" style="width:350px;height:200px;border:0;">
          <center><h3><?php echo $row6['judul'];?></h3></center>
          <p class="lead"><?php echo $row6['isi'];?></p>
        </div>
      </div>
      </div>
    </div>
  </section>

  <section class="portfolio" id="testimoni">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">TESTIMONI</h2>
      <hr class="star-dark mb-5">
      <div class="row">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#testimoni1">Klik Disini Untuk Melihat</button>

        <!-- Modal -->
        <div id="testimoni1" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- konten modal-->
            <div class="modal-content">
              <!-- heading modal -->
              <div class="modal-header">
                <h4 class="modal-title">Testimoni Pelanggan Kami</h4>
              </div>
              <!-- body modal -->
              <div class="modal-body">
                <?php
                //ambil data dari tb_produk dan tb_kategori  di database
                $ambildata2=mysqli_query($db, "SELECT * FROM testimoni");
                while($z=mysqli_fetch_array($ambildata2)){
                    ?>
                    <div class="text-center mt-3">
                           <img src="admin/image/<?php echo $z['gambar'];?>" width="250px" height="400px">
                         </div>
                <?php
                }
                ?>
              </div>
              <!-- footer modal -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="bg-primary text-white mb-0">
    <div class="container">
      <h2 class="text-center text-uppercase text-white">Siap melangkah lebih jauh?  </h2>
      <hr class="star-light mb-5">
      <h3 class="text-center text-white mb-0">Luangkan waktu Anda untuk berdiskusi dengan kami.</h3>
      <div class="text-center mt-4">
        
      </div>
        </div>
        <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div><p><a href="https://api.whatsapp.com/send?phone=6282266444377">Hubungi Kami Melalui Whatsapp</a></p></div>
        </div>
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-comments fa-3x mb-3 text-muted"></i>
          <div><p><a href="http://localhost/pkl/dashboard.php">Hubungi Kami Melalui Tiket</a></p></div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="mailto:admin@reds.id">admin@reds.id</a>
        </div>
      </div>
  </section>

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 - Reds Studio | <a href="admin/">Login</a></div>

    </div>
  </footer>


  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  

  <!-- Bootstrap core JavaScript -->
  <script src="up/vendor/jquery/jquery.min.js"></script>
  <script src="up/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="up/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="up/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="up/js/jqBootstrapValidation.js"></script>
  <script src="up/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="up/js/freelancer.min.js"></script>

</body>

</html>
