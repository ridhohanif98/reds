<?php
require_once("config.php"); 
session_start();
if(!isset($_SESSION['username'])) {
   header('location:index.php'); 
} else { 
   $username = $_SESSION['username']; 
}
$id = $_GET['idfaq'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>FAQ Setting</title>

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
      <?php
                include 'config.php';
                $data = mysqli_query($db,"SELECT * FROM faq where idfaq = '$id'"); 
                $row2 = $data->fetch_assoc();
            ?>

      <form action="editfaq.php" method="post">
  <label>Pertanyaan</label>
  <input type="text" name="pertanyaan" class="form-control" placeholder="pertanyaan .." value="<?php echo $row2['pertanyaan'];?>" required>
  <label>Jawaban</label>
  <input type="text" name="jawaban" class="form-control" placeholder="Jawaban" value="<?php echo $row2['jawaban'];?>"required>
  <input type="hidden" name="idfaq" class="form-control" placeholder="id" value="<?php echo $row2['idfaq'];?>"required>

            <input type="submit" class="btn btn-primary btn-lg btn-block mt-3" value="Update"><br/>
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
