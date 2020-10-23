<?php
  include 'config.php';
  
    $msg = "";
    // Get image name
    $gambar = $_FILES['gambar']['name'];
    // Get text
    $isi = mysqli_real_escape_string($db, $_POST['isi']);
    $judul = mysqli_real_escape_string($db, $_POST['judul']);
    $id = $_POST['id'];
    $lama=$_POST['foto_lama']; //variabel foto lama

    // image file directory
    $target = "image/".basename($gambar);

    // execute query
    if(empty($gambar)){
            $save=mysqli_query($db, "UPDATE artikel SET judul='$judul', gambar='$lama', isi='$isi' WHERE id_artikel='$id'");
            if($save){ //jika update berhasil maka muncul pesan dan menuju ke halaman produk
                       echo "<script>alert('Artikel berhasil di edit');document.location='daftarartikel.php'</script>";
            }else{  //jika update gagal maka muncul pesan
                     echo "<script>alert('Proses edit gagal, coba kembali');document.location='daftarartikel.php'</script>";
             }
    }
    else {
    $update= mysqli_query($db, "UPDATE artikel SET judul='$judul', gambar='$gambar', isi='$isi' WHERE id_artikel='$id'");

            if($update){ //jika update berhasil maka muncul pesan dan menuju ke halaman produk
                       echo "<script>alert('Artikel berhasil di edit');document.location='daftarartikel.php'</script>";
            }else{  //jika update gagal maka muncul pesan
                     echo "<script>alert('Proses edit gagal, coba kembali');document.location='daftarartikel.php'</script>";
             }
    }

    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
?>