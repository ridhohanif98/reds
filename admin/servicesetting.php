<?php
require_once("sessionadmin.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>

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
    <div class="container-fluid">
    <?php
                include 'config.php';
                $data = mysqli_query($db,"SELECT * FROM service where idservice='1'");
                $row1 = $data->fetch_assoc();
                $data = mysqli_query($db,"SELECT * FROM service where idservice='2'");
                $row2 = $data->fetch_assoc();
                $data = mysqli_query($db,"SELECT * FROM service where idservice='3'");
                $row3 = $data->fetch_assoc();

            ?>

<br>
<hr class="style5">
<br>
<center><h3>Tabel Service</h3></center>
<br>
<hr class="style5">
<br>
      <div class="row">
        <div class="col-lg-4 ml-auto col-75 ">

          <img class="img-fluid" src="image/<?php echo $row1["gambar"];?>" alt="">
            <form method="post" action="editgambarservice.php" enctype="multipart/form-data"> 
            <input type="file" name="gambar" class="" id="gambar" accept="image/*">
            <input type="hidden" name="idservice" class="form-control" placeholder="id" value="<?php echo $row1['idservice'];?>"required>
            <input type="hidden" name="foto_lama" value="<?php echo $row1['gambar'];?>"/>
            <button type="submit" class="btn btn-primary mt-3">Update Gambar</button>
            </form>
          <center><h5>Service Left</h5></center>
          <form method="post" action="editservice.php" enctype="multipart/form-data">
          <center><h3><input type="text" name="judul" class="form-control mt-3" id="judul" value="<?php echo $row1['judul'];?>"></h3></center>
          <STRONG>*</STRONG>Max 400 kata
          <textarea id="subject" name="isi" placeholder="" style="height:270px; width:330px;"><?php echo $row1['isi'];?></textarea>
          <input type="hidden" name="idservice" class="form-control" placeholder="id" value="<?php echo $row1['idservice'];?>"required>
          <button type="submit" class="btn btn-primary float-right mr-3 mt-3 mb-5">Update</button> <br>
          </form>
        </div>



        <div class="col-lg-4 ml-auto col-75 ">

          <img class="img-fluid" src="image/<?php echo $row2["gambar"];?>" alt="">
            <form method="post" action="editgambarservice.php" enctype="multipart/form-data"> 
            <input type="file" name="gambar" class="" id="gambar" accept="image/*">
            <input type="hidden" name="idservice" class="form-control" placeholder="id" value="<?php echo $row2['idservice'];?>"required>
            <input type="hidden" name="foto_lama" value="<?php echo $row2['gambar'];?>"/>
            <button type="submit" class="btn btn-primary mt-3">Update Gambar</button>
            </form>
          <center><h5>Service Center</h5></center>
          <form method="post" action="editservice.php" enctype="multipart/form-data">
          <center><h3><input type="text" name="judul" class="form-control mt-3" id="judul" value="<?php echo $row2['judul'];?>"></h3></center>
          <STRONG>*</STRONG>Max 400 kata
          <textarea id="subject" name="isi" placeholder="" style="height:270px; width:330px;"><?php echo $row2['isi'];?></textarea>
          <input type="hidden" name="idservice" class="form-control" placeholder="id" value="<?php echo $row2['idservice'];?>"required>
        <button type="submit" class="btn btn-primary float-right mr-3 mt-3">Update</button> <br>
      </form>
        </div>


        <div class="col-lg-4 ml-auto col-75 mr-auto ">

          <img class="img-fluid" src="image/<?php echo $row3["gambar"];?>" alt="">
            <form method="post" action="editgambarservice.php" enctype="multipart/form-data"> 
            <input type="file" name="gambar" class="" id="gambar" accept="image/*">
            <input type="hidden" name="idservice" class="form-control" placeholder="id" value="<?php echo $row3['idservice'];?>"required>
            <input type="hidden" name="foto_lama" value="<?php echo $row3['gambar'];?>"/>
            <button type="submit" class="btn btn-primary text-right mt-3">Update Gambar</button>
            </form>
          <center><h5>Service Right</h5></center>
          <form method="post" action="editservice.php" enctype="multipart/form-data">
          <center><h3><input type="text" name="judul" class="form-control mt-3" id="judul" value="<?php echo $row3['judul'];?>"></h3></center>
          <STRONG>*</STRONG>Max 400 kata
          <textarea id="subject" name="isi" placeholder="" style="height:270px; width:330px;"><?php echo $row3['isi'];?></textarea>
          <input type="hidden" name="idservice" class="form-control" placeholder="id" value="<?php echo $row3['idservice'];?>"required>
        <button type="submit" class="btn btn-primary float-right mr-3 mt-3">Update</button> <br>
      </form>
        </div>



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
