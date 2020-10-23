<?php
  
include 'config.php';

    $msg = "";
    // Get image name
    $gambar = $_FILES['gambar']['name'];
    // Get text
    $nama = mysqli_real_escape_string($db, $_POST['nama']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $subjek = mysqli_real_escape_string($db, $_POST['subjek']);
    $isi = mysqli_real_escape_string($db, $_POST['isi']);


    // image file directory
    $target = "image/".basename($gambar);

    $sql = "INSERT INTO tiket (nama, email, subjek, isi) VALUES ('$nama', '$email', '$subjek', '$isi')";
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
    $sql2 = "INSERT INTO logs(role, username, aktivitas) VALUES ('visitor','visitor','menambah tiket')";
    $query2 = $db->query($sql2);

            if($query2){ //jika update berhasil maka muncul pesan dan menuju ke halaman produk
                       echo "<script>alert('Anda berhasil mengirim tiket. Kami akan membalas melalui email');document.location='dashboard.php'</script>";
            }else{  //jika update gagal maka muncul pesan
                     echo "<script>alert('Proses kirim gagal, coba kembali');document.location='dashboard.php'</script>";
             }

?>