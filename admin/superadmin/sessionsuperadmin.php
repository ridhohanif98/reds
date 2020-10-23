<?php
require_once("config.php");
session_start();
if(!isset($_SESSION['username'])) {
   header('location:index.php'); 
} else { 
   $username2 = $_SESSION['username']; 
}
if($username2 != "admin"){
  header('location:http://localhost/pkl/admin/admin.php');
}
?>