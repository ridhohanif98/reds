<?php
require_once("sessionadmin.php");
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


        $sql3 = "SELECT * FROM tiket";
        $result3 = $db->query($sql3);

        include ("visitor.php");
  

          ?>

      <div class="container-fluid">
        <div class="alert alert-success mt-3" role="alert">
  <h5> Selamat Datang <b><?php echo $username1;?></b></a></h5>
</div>
        

        <div class="card-deck">
          <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
            
             <div class="card-body ">
              <h3 class="card-title">Total Visitor</h3>
              <p class="card-text" style="font-size: 70px"><?php echo $kunjungan[0];?></p>
              </div>
           </div>

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
        <div class="container-fluid">

      <h1>Pesan yang dikirim oleh visitor</h1>
        
      <table id="tabeltiket" class="table table-bordered">
        <thead>
        <tr>
            <td>Pengirim</td>
            <td>Subjek</td>
            <td>Action</td>
            </tr>
          </thead>
          <tbody>
<?php while($row=$result3->fetch_assoc()) :?>
    <tr>
            <td><?php echo $row['nama']?></td>
            <td><?php echo $row['subjek']?></td>
            <td><a href="#"  data-toggle="modal" data-target="#pesan<?php echo $row['idtiket']; ?>" class="btn btn-sm btn-primary">Lihat Pesan</a>





<div id="pesan<?php echo $row['idtiket']; ?>" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- konten modal-->
            <div class="modal-content">
              <!-- heading modal -->
              <div class="modal-header">
                <h4 class="modal-title">Pesan Dari <?php echo $row['nama']?> </h4>
              </div>
              <!-- body modal -->
              <div class="modal-body">

<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nama">Pengirim</label>
      <input class="form-control" type="text" placeholder="<?php echo $row['nama']?>" readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="email">email</label>
      <input class="form-control" type="text" placeholder="<?php echo $row['email']?>" readonly>
    </div>
  </div>
  <div class="form-group">
    <label for="subjek">Subjek</label>
    <input class="form-control" type="text" placeholder="<?php echo $row['subjek']?>" readonly>
  </div>
  <div class="form-group">
  <label for="isi">Isi</label>
  <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10" placeholder="<?php echo $row['isi']?>" readonly></textarea>
</div>
  
</form>

                
              </div>
              <!-- footer modal -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
              </div>
            </div>
          </div>
        </div>







                <a href="hapustiket.php?idtiket=<?php echo$row['idtiket']?>"><button type="button" class="btn btn-sm btn-danger">Hapus Pesan</button></a></td>
            
            </tr>

<?php endwhile;?>
</tbody>


    
      </div>

       


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