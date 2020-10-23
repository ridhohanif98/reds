<?php
  include 'config.php';
  
    $msg = "";
    // Get image name
    $gambar = $_FILES['gambar']['name'];
    // Get text
    $isi = mysqli_real_escape_string($db, $_POST['isi']);
    $judul = mysqli_real_escape_string($db, $_POST['judul']);
    $id = $_POST['id'];

    // image file directory
    $target = "image/".basename($gambar);

    // execute query
    $update= mysqli_query($db, "UPDATE artikel SET judul='$judul', gambar='$gambar', isi='$isi' WHERE id_artikel='$id'");

    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
    header('Location: daftarartikel.php');
?>