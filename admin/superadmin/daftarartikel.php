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

  <title>Daftar Artikel</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

 <?php 
 include('sidebar.php');
 ?>

      <div id="b" class="container-fluid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Artikel<i style="margin-left:5px" class="fa fa-align-left"></i></h2>
                   </div>
                   <div class="col-md-6">
                        <div class="c" style="float:right"> <a href="addartikel.php"><i class="fa fa-2x fa-plus-circle"></i></a>      <a href="artikel/deleteallartikel.php" onclick="return confirm('Are you sure you want to delete all article?');"><i class="fa fa-2x fa-times-circle delete_all"></i></a></div>
                   </div>
                </div>
            </div>
        </div>
        <div class="borderr shadow">
            <div class="container-fluid artikel" id="page">
            <?php
                include 'config.php';
                $data = mysqli_query($db,"SELECT * FROM artikel order by id_artikel desc");
                    while($row = $data->fetch_array()) :                    
            ?>
                <div class="list-group">
                <a href="desartikel.php?id=<?php echo $row["id_artikel"];?>">
                <div class="row">
                    <div class="col-lg-2">
                        <img src="/pkl/admin/image/<?php echo $row["gambar"];?>" class="img-thumbnail">
                    </div>
                    <div class="col-lg-10">
                        <div class="row judulartikel">
                        <h3><?php echo $row['judul']; ?></h3>
                        </div>
                        
                        

                    </div>
                </div>
                </a>
                <div style="height:50px; margin-left: 180px;" class="row">
                        dilihat <?php echo $row['lihat']; ?>
                        </div>
                <hr>
                

                </div>
            <?php endwhile;?>
            </div>
            <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <nav class="" aria-label="...">
                        <ul class="pagination justify-content-end">
                            <li class="page-item page-link" id="previous-page"><a href="javascript:void(0)" aria-label=Previous><span aria-hidden=true>&laquo;</span></a></li>
                        </ul>
                    </nav>
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
