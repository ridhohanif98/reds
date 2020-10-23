<?php
require_once("sessionsuperadmin.php");

$sql = "SELECT * FROM user";
$result = $db->query($sql);

$sql2 = "SELECT * FROM admin WHERE admin.username != 'admin'";
$result2 = $db->query($sql2);


?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Daftar User</title>

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

      
</tbody>

    </table>

    <h1>Daftar Admin</h1>
        
      <table id="tabeladmin" class="table table-bordered ml-3 mr-3">
        <thead>
        <tr>
            <td>Username</td>
            <td>Email</td>
            <td>aksi</td>
            </tr>
          </thead>
          <tbody>
            
       
<?php while($row=$result2->fetch_assoc()) :?>
    <tr>
            <td><?php echo $row['username']?></td>
            <td><?php echo$row['email']?></td>
            <td><a href="hapusadmin.php?idadmin=<?php echo$row['idadmin']?>"><button type="button" class="btn btn-sm btn-danger">Hapus</button></a>
                <a href="adminprofil.php?idadmin=<?php echo$row['idadmin']?>"><button type="button" class="btn btn-sm btn-primary">Edit</button></a></td>
            </tr>

<?php endwhile;?>
   </tbody>

    </table>

    
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
    $('#tabeluser').DataTable();
} );
</script>
<script>
    $(document).ready( function () {
    $('#tabeladmin').DataTable();
} );
</script>

</body>

</html>
