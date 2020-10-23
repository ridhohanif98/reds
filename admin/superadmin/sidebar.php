<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
    <a class="navbar-brand" href="index.php">
    <img src="image/4.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Reds Studio
  </a>
      <div class="list-group list-group-flush dropdown">
        <a href="#" class="list-group-item list-group-item-action dropdown-toggle bg-light"data-toggle="dropdown" >Mengelola Admin</a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a href="daftaruser.php" class="list-group-item list-group-item-action bg-light">Admin</a>
      <a href="tambahadmin.php" class="list-group-item list-group-item-action bg-light">Tambah Admin</a>
       <a href="logs.php" class="list-group-item list-group-item-action bg-light">Aktivitas Admin</a>
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