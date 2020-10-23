<?php
require_once("config.php"); 
session_start();
if(!isset($_SESSION['username'])) {
   header('location:index.php'); 
} else { 
   $username = $_SESSION['username']; 
}

$sql2 = "SELECT * FROM faq ";
$result2 = $db->query($sql2);
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
                $id = $_GET['idfaq'];
                $data = mysqli_query($db,"SELECT * FROM faq where idfaq = '$idfaq'"); 
                $row2 = $data->fetch_assoc();
            ?>

      <form action="updateprofil.php" method="post">
  <label>Pertanyaan</label>
  <input type="text" name="username" class="form-control" placeholder="Username .." value="<?php echo $row2['pertanyaan'];?>" required>
  <label>Jawaban</label>
  <input type="text" name="nama" class="form-control" placeholder="First Name & Last Name" value="<?php echo $row2['jawaban'];?>"required>

            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Update"><br/>
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
