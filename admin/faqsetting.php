<?php
require_once("sessionadmin.php");

$sql2 = "SELECT * FROM faq ";
$result2 = $db->query($sql2);
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>FAQ Setting</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <?php 
 include('sidebar.php');
 ?>
    <div class="container-fluid">
    <h1> FAQ Setting </h1>
            <form method="post" action="upfaq.php" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">    
                            <label for="pertanyaan">Pertanyaan</label>
                            <input type="text" name="pertanyaan" class="form-control" id="pertanyaan"required>
                            <label for="jawaban">Jawaban</label>
                            <input type="text" name="jawaban" class="form-control" id="jawaban"required>
                        </div>
                              
                    </div>

                         <button type="submit" class="btn btn-primary mt-3">Tambah FAQ</button> <br>
                </div>
            </form>

             <h1>Daftar FAQ</h1>
        
      <table id="tabeladmin" class="table table-bordered">
        <thead>
        <tr>
            <td>Pertanyaan</td>
            <td>Jawaban</td>
            <td>aksi</td>
            </tr>
          </thead>
          <tbody>
            
       
<?php while($row=$result2->fetch_assoc()) :?>
    <tr>
            <td><?php echo $row['pertanyaan']?></td>
            <td><?php echo$row['jawaban']?></td>
            <td><a href="hapusfaq.php?idfaq=<?php echo$row['idfaq']?>"><button type="button" class="btn btn-sm btn-danger">Hapus</button></a>
                <a href="faqedit.php?idfaq=<?php echo$row['idfaq']?>"><button type="button" class="btn btn-sm btn-primary">Edit</button></a></td>
            </tr>

<?php endwhile;?>
   </tbody>

    </table>
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
