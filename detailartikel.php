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

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

   <?php 
 include('sidebaruser.php');
 ?>

      <div class="container isi des">
    <div class="row artikel">
        <div class="col">
        <?php
            include 'config.php';
            $id=$_GET['id'];
            $data = mysqli_query($db,"SELECT * FROM artikel where id_artikel=$id");
            $row2 = $data->fetch_array(); 

            $data2 = mysqli_query($db,"SELECT lihat FROM artikel where id_artikel=$id")
            ->fetch_array()['lihat'];

            $view = $data2+1;

             mysqli_query($db,"UPDATE artikel SET lihat=$view WHERE id_artikel=$id")            
        ?>
            <div class="row text-center">
                <div class="col">
                    <h1 class="list-group-item-heading text-center jdl"><?php echo $row2['judul'];?></h1>
                    <h5> dibuat : <?php echo $row2['tanggal'];?> | dilihat : <?php echo $row2['lihat'];?> kali</h5>
                    <hr>
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    <img src="admin/image/<?php echo $row2['gambar'];?>" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <?php echo $row2['isi'];?>
                </div>
            </div>
        </div>
    </div>
</div>
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
