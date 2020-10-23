<?php  
include 'config.php';
session_start();
if(!isset($_SESSION['username'])) {
   header('location:index.php'); 
} else { 
   $username = $_SESSION['username']; 
}

$id = $_GET['idfaq'];
$query = "DELETE FROM faq
WHERE idfaq =  '$id'"; 
mysqli_query($db, $query); 
$sql2 = "INSERT INTO logs(role, username, aktivitas) VALUES ('admin','$username','$username menghapus faq')";
    $query2 = $db->query($sql2);

            if($query2){ //jika update berhasil maka muncul pesan dan menuju ke halaman produk
                       echo "<script>alert('FAQ berhasil dihapus');document.location='faqsetting.php'</script>";
            }else{  //jika update gagal maka muncul pesan
                     echo "<script>alert('Proses hapus gagal, coba kembali');document.location='faqsetting.php'</script>";
             }

die();  
?>