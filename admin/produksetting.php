<?php
error_reporting(E_ERROR | E_PARSE);
require_once("sessionadmin.php");
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

    <?php
                include 'config.php';
                $data = mysqli_query($db,"SELECT * FROM service where idservice='$_GET[idservice]'");
                $row1 = $data->fetch_assoc();
    ?>

<center><h3>Produk <?php echo $row1['judul'];?></h3></center>
<?php
//panggil file koneksi.php yang sudah anda buat
include "config.php";
?>
<!doctype html public "-//W3C//DTD HTML 4.0 //EN">
<html>

<body>
          <?php
          echo '<a href="inputproduk.php?idservice=' . $_GET[idservice] . '" title="input data">'
          ?>
          <button type="button" class="btn btn-success float-right mr-3 mb-3">Tambah Produk</button></a>
    <table id="tabeluser" class="table mt-3 ml-3 mr-3">

       <thead>
       <tr>
           <th>ID Produk</th>
           <th>Nama Produk</th>
           <th>harga</th>
           <th>Action</th>
       </tr>
       </thead>

       <tbody>

<?php
//ambil data dari tb_produk dan tb_kategori  di database
$ambildata=mysqli_query($db, "SELECT * FROM produk where idservice = '$_GET[idservice]'");
while($a=mysqli_fetch_array($ambildata)){
    ?>
       <tr>
           <td><?php echo $a['idproduk'];?></td>
           <td><?php echo $a['namaproduk'];?></td>
           <td><?php echo $a['harga'];?></td>
           <td><a href="editproduk.php?idproduk=<?php echo $a['idproduk'];?>" title="edit data"><button type="button" class="btn btn-primary">Edit</button></a>
           <a href="hapusproduk.php?idproduk=<?php echo $a['idproduk'];?>" title="edit data"><button type="button" class="btn btn-danger">Hapus</button></a>
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
