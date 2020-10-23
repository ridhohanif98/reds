<?php
  include 'config.php';
  
    $msg = "";
    // Get image name
    $gambar = $_FILES['gambar']['name'];
    // Get text
    $judul = mysqli_real_escape_string($db, $_POST['judul']);
    $isi = mysqli_real_escape_string($db, $_POST['isi']);
    $id = $_POST['idabout'];

    // execute query
    $update= mysqli_query($db, "UPDATE about SET judul='$judul', isi='$isi' WHERE idabout='$id'");

    header('Location: aboutsetting.php');
?>