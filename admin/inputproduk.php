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
<h1 align="center">Tambah Produk</h1>
<?php

//buat variabel dari setiap field name form produk

if(isset($_POST['simpan'])){
    $namaproduk = $_POST['namaproduk'];
    $harga = $_POST['harga'];
    $save=mysqli_query($db, "INSERT INTO produk (idproduk,idservice,namaproduk,harga)
    values ('','$_GET[idservice]','$namaproduk','$harga')");
    if($save){ //jika simpan berhasil maka muncul pesan dan menuju ke halaman produk
        echo "<script>alert('Data Produk Berhasil disimpan ke database');document.location='admin.php'</script>";
    }else{  //jika simpan gagal maka muncul pesan
         echo "<script>alert('Proses simpan gagal, coba kembali');document.location='admin.php'</script>";
    }
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <table border="0" cellspacing="10" width="800" align="center">
    <tbody>
    <tr><td colspan="3"><?php echo $error;?></td></tr>
    <tr>
        <td>Nama Produk</td>
        <td>:</td>
        <td><form method="post" enctype="multipart/form-data">
            <input type="text" name="namaproduk" class="form-control mt-3" id="namaproduk" value="" required></td>
    </tr>
    <tr>
        <td>Harga</td>
        <td>:</td>
        <td><form method="post" enctype="multipart/form-data">
            <input type="text" name="harga" class="form-control mt-3" id="harga" value="" required></td>
    </tr>
    <tr>
        <td colspan="3"><button type="submit" name="simpan">Tambah Produk</button</td>
    </tr>
</tbody>

</table>
</form>

</body>
</html>