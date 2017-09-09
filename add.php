<?php

session_start();

if(@$_SESSION['admin'])
{

$connect = @mysql_connect("localhost","Gaurav","P@ssword") or die(mysql_error());

$select = @mysql_select_db("users") or die(mysql_error());

$target_dir = "photo/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        //echo "File is not an image.";
        $uploadOk = 0;
    }
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


$name = $_POST['item'];
$category = $_POST['category'];
$price = $_POST['price'];
$stock = $_POST['stock'];
$discount = $_POST['discount'];



$write = @mysql_query("INSERT INTO items VALUES('','$category','$name','$target_file','$price','$discount','$stock')") or die(mysql_error());

header('Location: admin_main.php');
}
else
	echo "you must be logged in to add the item!!";


?>

