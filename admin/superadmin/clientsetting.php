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

<head></head>

  
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
<center><h3>Tabel Client</h3></center>
<?php
//panggil file koneksi.php yang sudah anda buat
include "config.php";
?>
<!doctype html public "-//W3C//DTD HTML 4.0 //EN">
<html>

<body>
          
           <a href="input.php" title="input data"><button type="button" class="btn btn-success float-right mr-3 mb-3">Tambah Client</button></a>
    <table id="tabeluser" class="table mt-3 ml-3 mr-3">

       <thead>
       <tr>
           <th>ID</th>
           <th><center>Gambar</center></th>
           <th>Action</th>
       </tr>
       </thead>

       <tbody>

<?php
//ambil data dari tb_produk dan tb_kategori  di database
$ambildata=mysqli_query($db, "SELECT * FROM client");
while($a=mysqli_fetch_array($ambildata)){
    ?>
       <tr>
           <td><?php echo $a['idclient'];?></td>
           <td><center><img src="image/<?php echo $a['gambar'];?>" width="300px" height="100px"></center></td>
           <td><a href="edit.php?idclient=<?php echo $a['idclient'];?>" title="edit data"><button type="button" class="btn btn-primary">Edit</button></a>
           <a href="hapus.php?idclient=<?php echo $a['idclient'];?>" title="edit data"><button type="button" class="btn btn-danger">Hapus</button></a>
           </td>
       </tr>

<?php
}
?>
</tbody>

</table>
</body>
</html>
<br>
<hr class="style5">
<br>


        
     
    
  
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
