<?php
  include 'config.php';
  
    $msg = "";
    // Get image name
    $gambar = $_FILES['gambar']['name'];
    // Get text
    $judul = mysqli_real_escape_string($db, $_POST['judul']);
    $isi = mysqli_real_escape_string($db, $_POST['isi']);
    $id = $_POST['idservice'];

    // execute query
    $update= mysqli_query($db, "UPDATE service SET judul='$judul', isi='$isi' WHERE idservice='$id'");

    header('Location: servicesetting.php');
?>