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
<h1 align="center"> Edit Client</h1>
<?php
//ambil data berdasarkan parameter GET id
$b = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM client where idclient='$_GET[idclient]'"));

//buat variabel dari setiap field name form produk

$file=$_FILES['foto']['tmp_name'];    //temporary foto
$nama_file=$_FILES ['foto']['name']; //ambil nama file
$ukuran=$_FILES['foto']['size'];    //ukuran file
$extensi= strtolower(substr(strrchr($nama_file,"."),1));  //extensi setelah .(titik)
$lama=$_POST['foto_lama']; //variabel foto lama

if(isset($_POST['simpan'])){
    if(empty($file)){
            $save=mysqli_query($db, "UPDATE client set gambar='$lama' where idclient='$_GET[idclient]'");
            if($save){ //jika update berhasil maka muncul pesan dan menuju ke halaman produk
                       echo "<script>alert('Data Produk Berhasil disimpan ke database');document.location='clientsetting.php'</script>";
            }else{  //jika update gagal maka muncul pesan
                     echo "<script>alert('Proses simpan gagal, coba kembali');document.location='clientsetting.php'</script>";
             }
    }
    else{
    unlink('image/'.$lama); //hapus foto lama
    move_uploaded_file($file,"image/$nama_file");    //upload foto baru

    $save=mysqli_query($db, "UPDATE client set gambar='$nama_file' where idclient='$_GET[idclient]'");
    if($save){ //jika update berhasil maka muncul pesan dan menuju ke halaman produk
        echo "<script>alert('Data Produk Berhasil disimpan ke database');document.location='clientsetting.php'</script>";
    }else{  //jika update gagal maka muncul pesan
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
        <td><input type="file" name="foto" accept=".jpg, .png"/>
        <input type="hidden" name="foto_lama" value="<?php echo $b['gambar'];?>"/></td>
    </tr>
    <tr>
        <td colspan="3"><button type="submit" name="simpan">Proses Data</button</td>
    </tr>
</tbody>

</table>
</form>

</body>
</html>