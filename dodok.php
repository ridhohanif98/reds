<?php
require_once("config.php"); 
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

  <title>Dashboard</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<div class="container-fluid">
    <h1> Tidak Perlu Ragu , Tanyakan pada kami </h1>
    <h4> Kami akan membalas melalui email </h4>
            <form method="post" action="uptiket.php" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">    
                            <label for="judul">Nama Lengkap </label>
                            <input type="text" name="nama" class="form-control" id="nama"required>
                        </div>
                        <div class="col-md-6">    
                            <label for="judul">Email </label>
                            <input type="text" name="email" class="form-control" id="email"required>
                        </div>
                        <div class="col-md-6">    
                            <label for="judul">Subjek</label>
                            <input type="text" name="subjek" class="form-control" id="subjek"required>
                        </div>
                    </div>
                    <label for="isi">Isi</label>
                    <textarea type="text" name="isi" class="form-control ckeditor" id="isi" required></textarea> <br>
                    <button type="submit" class="btn btn-primary float-right">Submit</button> <br>
                </div>
            </form>
            </div>
