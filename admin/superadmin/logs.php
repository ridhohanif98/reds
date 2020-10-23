<?php

require_once("sessionsuperadmin.php");

$sql = "SELECT * FROM logs ORDER BY tanggal DESC";
$result = $db->query($sql);



?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Logs</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link href="css/datatable.css" rel="stylesheet">

</head>

<body>

  <?php 
 include('sidebar.php');
 ?>

      <div class="container-fluid">

      <h1>Log Aktivitas</h1>
        
      <table id="tabellogs" class="table table-bordered">
        <thead>
        <tr>
            <td>Role</td>
            <td>Username</td>
            <td>Aktivitas</td>
            <td>Tanggal</td>
            </tr>
          </thead>
          <tbody>
<?php while($row=$result->fetch_assoc()) :?>
    <tr>
            <td><?php echo $row['role']?></td>
            <td><?php echo $row['username']?></td>
            <td><?php echo $row['aktivitas']?></td>
            <td><?php echo date('d-m-Y H:i:s', strtotime($row['tanggal']))?></td>
            </tr>

<?php endwhile;?>
</tbody>


    
      </div>
    </div>

    
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="css/datatable.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
  <script>
    $(document).ready( function () {
    $('#tabellogs').DataTable();
} );
</script>

</body>

</html>
