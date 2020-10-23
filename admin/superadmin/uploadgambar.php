<?php
/**
 * Created by PhpStorm.
 * User: putuguna
 * Date: 2/13/2017
 * Time: 3:07 PM
 */
require_once("config.php");
class InsertImageFromWeb{
    function insertImage(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        $dir = "image/";
        $target_file = $dir.basename($_FILES['myimage']['name']);
        $uploadOK = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        if(isset($_POST['saveimage']) && isset($_POST['myimage']['tmp_name'])){
            $check = getimagesize($_FILES['myimage']['tmp_name']);
            if($check !== false){
                echo "File is an image - " . $check["mime"] . ".";
                echo "<br>";
                $uploadOK = 1;
            }else{
                echo "File is not an image.";
                echo "<br>";
                $uploadOK = 0;
            }
        }
        // this line for check the image size
        if ($_FILES["myimage"]["size"] > 50000000) {
            echo "Sorry, your file is too large.";
            echo "<br>";
            $uploadOK = 0;
        }
        // this line for check the type of the image
        if($imageFileType != 'jpg' && $imageFileType != 'JPG' && $imageFileType != 'png' && $imageFileType != 'PNG' && $imageFileType != 'jpeg' && $imageFileType != 'gif'){
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            echo "<br>";
            $uploadOK = 0;
        }
        // this like for check of all process was ok or not
        if($uploadOK==0){
            echo "Your file was not uploaded.";
            echo "<br>";
        }else{
            if(move_uploaded_file($_FILES['myimage']['tmp_name'], $target_file)){
                $imagePath = $target_file;
                try{
                    $sql = "INSERT INTO gallery (image) VALUES ('$imagePath')";
                    $myImage = $conn->prepare($sql);
                    $myImage->execute();
                    echo "Insert image successful";
                    echo "<br>";
                }catch (PDOException $e){
                    echo "ERROR : " . $e->getMessage();
                }
            }
        }
    }
}
$insertImage = new InsertImageFromWeb();
$insertImage->insertImage();