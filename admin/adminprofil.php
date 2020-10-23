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

  <title>Dashboard</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
                $idadmin = $_GET['idadmin'];

                $data = mysqli_query($db,"SELECT * FROM admin where idadmin = '$idadmin'"); 
                $row2 = $data->fetch_assoc();
            ?>


      <form action="updateprofiladmin.php" method="post">
  <label>Username</label>
	<input type="text" name="username" class="form-control" placeholder="Username .." value="<?php echo $row2['username'];?>" required>
  <label>Email</label>
	<input type="email" name="email" class="form-control" placeholder="Email .." value="<?php echo $row2['email'];?>"required>
  <label>Password</label>
  <input type="password" name="password" class="form-control" placeholder="Password .." value="<?php echo $row2['password'];?>"required>

  <input type="hidden" name="idadmin" class="form-control" placeholder="id" value="<?php echo $row2['idadmin'];?>"required>
   </br>
			<input  type="submit" class="btn btn-primary btn-lg btn-block" value="Update"><br/>
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
