<?php
error_reporting(0); //abaikan error pada browser
//panggil file koneksi.php yang sudah anda buat
include "config.php";
?>
<!doctype html public "-//W3C//DTD HTML 4.0 //EN">
<html>
<head>
       <title>JUDUL WEBSITE ANDA</title>
</head>
<body>
<h1 align="center">Tambah Client</h1>
<?php

//buat variabel dari setiap field name form produk

$file=$_FILES['foto']['tmp_name'];    //temporary foto
$nama_file=$_FILES ['foto']['name']; //ambil nama file
$ukuran=$_FILES['foto']['size'];    //ukuran file
$extensi= strtolower(substr(strrchr($nama_file,"."),1));  //extensi setelah .(titik)

if(isset($_POST['simpan'])){
    if(empty($file)){
        $error="<p style='color:#F00;'>* Masukan Gambar Client</p>";
    }
    else{  //jika semua sudah terpenuhi maka simpan ke tb_produk
    //simpan gambar ke folder
    move_uploaded_file($file,"image/$nama_file");

    $save=mysqli_query($db, "INSERT INTO client (idclient,gambar)
    values ('','$nama_file')");
    if($save){ //jika simpan berhasil maka muncul pesan dan menuju ke halaman produk
        echo "<script>alert('Data Produk Berhasil disimpan ke database');document.location='clientsetting.php'</script>";
    }else{  //jika simpan gagal maka muncul pesan
         echo "<script>alert('Proses simpan gagal, coba kembali');document.location='clientsetting.php'</script>";
    }
}
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <table border="0" cellspacing="10" width="800" align="center">
    <tbody>
    <tr><td colspan="3"><?php echo $error;?></td></tr>
    <tr>
        <td>Gambar Produk</td>
        <td>:</td>
        <td><input type="file" name="foto" accept=".jpg, .png"/></td>
    </tr>
    <tr>
        <td colspan="3"><button type="submit" name="simpan">Proses Data</button</td>
    </tr>
</tbody>

</table>
</form>

</body>
</html>