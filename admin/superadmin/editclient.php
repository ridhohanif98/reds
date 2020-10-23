<?php
  include 'config.php';
  
    $msg = "";
    // Get image name
    $gambar = $_FILES['gambar']['name'];
    // Get text
    $clientid = $_POST['idclient'];

    // image file directory
    $target = "image/".basename($gambar);

    // execute query
    $update= mysqli_query($db, "UPDATE client SET gambar='$gambar' WHERE idclient='$clientid'");

    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
    header('Location: clientsetting.php');
?>