<?php

session_start();
if(@$_SESSION['admin'])
{

$connect = @mysql_connect("localhost","Gaurav","P@ssword") or die(mysql_error());

$select = @mysql_select_db("users") or die(mysql_error());
	if(isset($_GET['edit']))
	{
		$id=$_GET['edit'];
		$res=mysql_query("SELECT * FROM display WHERE id='$id'") or die(mysql_error());
	
		$data=mysql_fetch_array($res);
	}
	if(isset($_POST["update"]))
	{
		$id=$_POST['id'];
		$imagename = $_POST['imgname'];
		$target_dir = "photo/";
		$target_file = $target_dir . basename($_FILES["image"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		$check = getimagesize($_FILES["image"]["tmp_name"]);
			if($check !== false) {
				//echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
				} else {
					//echo "File is not an image.";
					$uploadOk = 0;
				}
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else if (file_exists($target_file)) {
				//echo "Sorry, file already exists.";
				$uploadOk = 0;
			}

			else if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
					//echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
				} else {
						echo "Sorry, there was an error uploading your file.";
					}
						
		$res =mysql_query("UPDATE display SET imagename='$imagename',imagepath='$target_file' WHERE id='$id' ") or die("could not update".mysql_error());
		header('Location: admin_main.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<style>
	body{
	text-align:center;
	font-family:courier;
	background-color:lightgray;
	}
	#header{
	background-color:#2F4F4F;
    	color:white;
    	text-align:center;
    	padding:5px;
	}
	#form1{
	
	font-size:15px;
	}
	
	
	input[type=text]
	{
			width: 400px;
    		padding: 12px 20px;
			margin: 8px 0;
    		display: inline-block;
    		border: 1px solid #00cc66;
    		border-radius: 10px;
    		box-sizing: border-box;	
	}
	
	 input[type=submit], input[type=reset] {
    	background-color: #4CAF50;
    	border-radius:10px ;
    	color: white;
    	padding: 10px 20px;
    	text-decoration: none;
    	margin: 10px 5px;
    	cursor: pointer;
}

	
</style>
</head>
<body>
<div id="header">
<h1>E-SHOPPING</h1>
</div>
<div id="form1">
<form action="edit_display.php" method="post" enctype="multipart/form-data">
<pre>
	 id       :  <input type="text" name="id" required autocomplete="off" value="<?php echo $data['id'];?>">
     Imagename   :  <input type="text" name="imgname" required autocomplete="off" value="<?php echo $data['imagename'];?>" autofocus>
	<img src="<?php echo $data['imagepath'];?>" width="385px" height="350px">
	
	Image     :		<input type="file" name="image">
	
		<input type="submit" name="update" >    <input type="reset" value="Reset">
</pre>
</form>
</div>
</body>
</html>
<?php
}
else
	echo "you must be logged in!!";
?>

		      