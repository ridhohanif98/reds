<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:index.php'); 
} else { 
   $username = $_SESSION['username']; 
}

require_once("config.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Edit Artikel</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <?php 
 include('sidebar.php');
 ?>
    <div class="container-fluid">
    <h1> Edit Artikel </h1>
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
                            <input type="hidden" name="foto_lama" value="<?php echo $row2['gambar'];?>"/>
                        </div>
                    </div>
                    <label for="isi">Isi</label>
                    <textarea type="text" name="isi" class="form-control ckeditor" id="isi"><?php echo $row2['isi'];?></textarea> <br>

                    <a href="deleteartikel.php?id=<?php echo$row2['id_artikel']?>"><button type="button" class="btn btn-sm btn-danger">Hapus</button></a>


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
