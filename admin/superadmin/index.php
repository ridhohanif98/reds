<?php
require_once("sessionsuperadmin.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  
 <?php 
 include('sidebar.php');
 ?>
       <?php
        $sql = "SELECT * FROM artikel";
        $result = $db->query($sql);
        $jmlartikel = $result->num_rows;
        

        $sql1 = "SELECT * FROM user";
        $result1 = $db->query($sql1);
        $jmluser = $result1->num_rows;
        
        

        $sql2 = "SELECT * FROM admin";
        $result2 = $db->query($sql2);
        $jmladmin = $result2->num_rows;

        include ("visitor.php");
  

          ?>

      <div class="container-fluid">
        <div class="alert alert-success mt-3" role="alert">
  <h5> Selamat Datang <b><?php echo $username2;?></b></a></h5>
</div>
        

        <div class="card-deck">

             <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            
             <div class="card-body ">
              <h3 class="card-title">Jumlah Artikel</h3>
              <p class="card-text" style="font-size: 70px"><?php echo $jmlartikel;?></p>
              </div>
           </div>
           <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            
             <div class="card-body ">
              <h3 class="card-title">Jumlah Admin</h3>
              <p class="card-text" style="font-size: 70px"><?php echo $jmladmin;?></p>
              </div>
           </div> 
                
        </div>

       


        
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>

