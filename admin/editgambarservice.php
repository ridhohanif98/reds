<?php
  include 'config.php';
  
    $msg = "";
    // Get image name
    $gambar = $_FILES['gambar']['name'];
    // Get text
    $serviceid = $_POST['idservice'];
    $lama=$_POST['foto_lama'];
    // image file directory
    $target = "image/".basename($gambar);

    if(empty($gambar)){
            $save=mysqli_query($db, "UPDATE service SET gambar='$lama' WHERE idservice='$serviceid'");
            if($save){ //jika update berhasil maka muncul pesan dan menuju ke halaman produk
                       echo "<script>alert('Gambar service berhasil di ubah');document.location='servicesetting.php'</script>";
            }else{  //jika update gagal maka muncul pesan
                     echo "<script>alert('Proses edit gagal, coba kembali');document.location='servicesetting.php'</script>";
             }
    }
    else {
    // execute query
    $update= mysqli_query($db, "UPDATE service SET gambar='$gambar' WHERE idservice='$serviceid'");

            if($update){ //jika update berhasil maka muncul pesan dan menuju ke halaman produk
                       echo "<script>alert('Gambar service berhasil di ubah');document.location='servicesetting.php'</script>";
            }else{  //jika update gagal maka muncul pesan
                     echo "<script>alert('Proses edit gagal, coba kembali');document.location='servicesetting.php'</script>";
             }

    }
    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
?>