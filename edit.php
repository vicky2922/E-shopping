<?php

session_start();
if(@$_SESSION['admin'])
{

$connect = @mysql_connect("localhost","Gaurav","P@ssword") or die(mysql_error());

$select = @mysql_select_db("users") or die(mysql_error());
	if(isset($_GET['edit']))
	{
		$id=$_GET['edit'];
		$res=mysql_query("SELECT * FROM items WHERE id='$id'") or die(mysql_error());
	
		$data=mysql_fetch_array($res);
	}
	if(isset($_POST['update']))
	{
		$id=$_POST['id'];
		$name = $_POST['item'];
		$category = $_POST['category'];
		$price = $_POST['price'];
		$stock = $_POST['stock'];
		$discount = $_POST['discount'];
		$target_dir = "photo/";
		
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		$check = getimagesize($_FILES["image"]["tmp_name"]);
			if(basename($_FILES["image"]["name"])==NULL)
			{
				$uploadOk = 0;
			}
			else if($check !== false) {
				//echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
				$target_file = $target_dir . basename($_FILES["image"]["name"]);
				} else {
					//echo "File is not an image.";
					$uploadOk = 0;
				}
			if ($uploadOk == 0) {
				//echo "Sorry, your file was not uploaded.";
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
		$res = mysql_query("UPDATE items SET category='$category',name='$name',image='$target_file',price='$price',discount='$discount',stock='$stock' WHERE id='$id' ") or die("could not update".mysql_error());
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
	
	
	input[type=text],select
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
#img{
	position :absolute;
	top:100px;
	left:20px;
}

	
</style>
</head>
<body>
<div id="header">
<h1>E-SHOPPING</h1>
</div>

<div id="form1">
<div id="img">
<img src="<?php echo $data['image'];?>" width="385px" height="350px">
</div>
<form action="edit.php" method="post" enctype="multipart/form-data">
<pre>
	 id       :  <input type="text" name="id" required autocomplete="off" value="<?php echo $data['id'];?>">
       Itemname   :  <input type="text" name="item" required autocomplete="off" value="<?php echo $data['name'];?>" autofocus>
		 Category  :  <select id="cat" name="category" value="<?php echo $data['category'];?>" required>
    			            <option value="mens fashion">men's fashion</option>
    			            <option value="womens fashion">women's fashion</option>
							<option value="kids fashion">kids fashion</option>
							<option value="computers">computers</option>
							<option value="mobiles">mobiles & tablets</option>
							<option value="electronics">Electronics</option>
							<option value="sports">sports</option>
							<option value="home">Home & Kitchen</option>
  			            </select>		
	Price     :  <input type="text" name="price" value="<?php echo $data['price'];?>"  autocomplete="off">
	stock     :  <input type="text" name="stock" value="<?php echo $data['stock'];?>"  autocomplete="off">
	Discount  :  <select id="discount" name="discount" value="<?php echo $data['discount'];?>">
    			            <option value="none">none</option
    			            <option value="10">10%</option>
							<option value="20">20%</option>
							<option value="30">30%</option>
							<option value="40">40%</option>
							<option value="50">50%</option>
  			            </select><br>
Image     :		<input type="file" name="image" >
	
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

		      