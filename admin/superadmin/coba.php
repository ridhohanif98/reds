<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:index.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
    <a class="navbar-brand" href="#">
    <img src="image/4.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Reds Studio
  </a>
      <div class="list-group list-group-flush">
        <a href="daftaruser.php" class="list-group-item list-group-item-action bg-light">Daftar User</a>
        <a href="tambahadmin.php" class="list-group-item list-group-item-action bg-light">Tambah Admin</a>
        <a href="tambahartikel.php" class="list-group-item list-group-item-action bg-light">Tambah Artikel</a>
        <a href="daftarartikel.php" class="list-group-item list-group-item-action bg-light">Daftar Artikel</a>
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
                <a class="nav-link" href="#"> Account : <b><?php echo $username;?></b></a>
                    <button type="button" class="btn btn-outline-danger ml-2" onclick="window.location.href='logout.php'">Log Out</button>
          </ul>
        </div>
      </nav>
    <div class="container-fluid">
    <h1> Tambah Artikel </h1>
    <?php
                include 'config.php';
                $id=(int)$_GET['id'];
                $data = mysqli_query($db,"SELECT * FROM artikel where id_artikel=$id");
                $row2 = $data->fetch_assoc();
            ?>
<form method="post" action="editartikel.php" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">    
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" class="form-control" id="judul" value="<?php echo $row2['judul'];?>">
                            <input type="hidden" name="id" id="id" value="<?php echo $row2['id_artikel'];?>">
                        </div>
                        <div class="col-md-6">    
                            <label for="gambar">Gambar</label>
                            <input type="file" name="gambar" class="form-control-file" id="gambar" accept="image/*">
                        </div>
                    </div>
                    <label for="isi">Isi</label>
                    <textarea type="text" name="isi" class="form-control ckeditor" id="isi"><?php echo $row2['isi'];?></textarea> <br>
                    <button type="submit" class="btn btn-primary float-right">Submit</button> <br>
                </div>
              </form>
            </div>
            
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
