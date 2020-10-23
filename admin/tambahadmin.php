<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tambah Admin</title>

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
    <h2> Tambah Admin </h2>
      
      
      <form action="registeradmin.php" method="post">
  <label>Username</label>
	<input type="text" name="username" class="form-control" placeholder="Username ..">
  <label>Password</label>
  <input type="password" name="password" class="form-control" placeholder="Password ..">
  <label>Email</label>
	<input type="email" name="email" class="form-control" placeholder="Email ..">
    <br>
			<input type="submit" class="btn btn-primary btn-lg btn-block" value="Daftar"><br/>
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
