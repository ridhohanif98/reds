!<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<?php
                include 'config.php';
                $id=(int)$_GET['id'];
                $data = mysqli_query($db,"SELECT * FROM artikel where id_artikel=$id");
                $row2 = $data->fetch_assoc();
            ?>
<form method="post" action="editartikel.php" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">    
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" class="form-control" id="judul" value="<?php echo $row2['judul'];?>">
                            <input type="hidden" name="id" id="id" value="<?php echo $row2['id_artikel'];?>">
                        </div>
                        <div class="col-md-6">    
                            <label for="gambar">Gambar</label>
                            <input type="file" name="gambar" class="form-control-file" id="gambar" accept="image/*">
                        </div>
                    </div>
                    <label for="isi">Isi</label>
                    <textarea type="text" name="isi" class="form-control ckeditor" id="isi"><?php echo $row2['isi'];?></textarea> <br>
                    <button type="submit" class="btn btn-primary float-right">Submit</button> <br>
                </div>
              </form>
</body>
</html>