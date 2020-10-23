<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
    <a class="navbar-brand" href="admin.php">
    <img src="image/4.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Reds Studio
  </a>
      <div class="list-group list-group-flush dropdown">
       <div class="dropdown">
        <a href="#" class="list-group-item list-group-item-action dropdown-toggle bg-light"data-toggle="dropdown" >Mengelola Artikel</a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a href="tambahartikel.php" class="list-group-item list-group-item-action bg-light">Tambah Artikel</a> 
      <a href="daftarartikel.php" class="list-group-item list-group-item-action bg-light">Daftar Artikel</a>
       </div>
      </div> 

        
        
        
        <div class="dropdown">
        <a href="#" class="list-group-item list-group-item-action dropdown-toggle bg-light"data-toggle="dropdown" >Mengelola Konten</a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="servicesetting.php">Service Setting</a>
      <a class="dropdown-item" href="aboutsetting.php">About Setting</a>
       <a class="dropdown-item" href="clientsetting.php">Client Seting</a>
       <a class="dropdown-item" href="testimonisetting.php">Testimoni Seting</a>
       <a href="faqsetting.php" class="list-group-item list-group-item-action bg-light">FAQ Setting</a>
       </div>
      </div>   

    <?php
                include 'config.php';
                $data = mysqli_query($db,"SELECT * FROM service where idservice='1'");
                $row1 = $data->fetch_assoc();
                $data = mysqli_query($db,"SELECT * FROM service where idservice='2'");
                $row2 = $data->fetch_assoc();
                $data = mysqli_query($db,"SELECT * FROM service where idservice='3'");
                $row3 = $data->fetch_assoc();

    ?>

      <div class="dropdown">
        <a href="#" class="list-group-item list-group-item-action dropdown-toggle bg-light"data-toggle="dropdown" >Mengelola Produk</a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="produksetting.php?idservice=1"><?php echo $row1['judul'];?></a>
      <a class="dropdown-item" href="produksetting.php?idservice=2"><?php echo $row2['judul'];?></a>
      <a class="dropdown-item" href="produksetting.php?idservice=3"><?php echo $row3['judul'];?></a>
      
       </div>
      </div>   
        
        <!-- / <a href="editcarousel.php" class="list-group-item list-group-item-action bg-light">Edit Carousel</a> -->
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-default" id="menu-toggle"><span class="navbar-toggler-icon"></span></button>

        <button class="navbar-toggler btn red" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
            <a class="nav-link" href="admin.php">Home <span class="sr-only">(current)</span></a>
            </li>
                    <button type="button" class="btn btn-outline-danger ml-2" onclick="window.location.href='logout.php'">Log Out</button>
          </ul>
        </div>
      </nav>