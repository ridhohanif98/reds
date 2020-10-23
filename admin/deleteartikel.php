<?php
    include 'config.php';
session_start();
if(!isset($_SESSION['username'])) {
   header('location:index.php'); 
} else { 
   $username = $_SESSION['username']; 
}
    $id=$_GET['id'];
  $sql = "DELETE FROM artikel WHERE id_artikel=$id";  
  if(mysqli_query($db, $sql))  
  {  
    echo 'Data Deleted';  
    }

    if($sql){ //jika simpan berhasil maka muncul pesan dan menuju ke halaman produk
        echo "<script>alert('Artikel berhasil di hapus dari database');document.location='daftarartikel.php'</script>";
    }else{  //jika simpan gagal maka muncul pesan
         echo "<script>alert('Proses hapus gagal, coba kembali');document.location='daftarartikel.php'</script>";
    }

 ?>