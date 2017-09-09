<?php

session_start();

if(@$_SESSION['admin'])
{

$connect = @mysql_connect("localhost","Gaurav","P@ssword") or die(mysql_error());




$select = @mysql_select_db("users") or die(mysql_error());
$edit= @$_GET["edit"];

$extract = @mysql_query("SELECT * FROM display WHERE id = '$edit'") or die(mysql_error());

?>
<!DOCTYPE html>
<html>
<head>
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
	
	font-size:20px;
	}
	
	
	select
	{
			width: 400px;
    		padding: 12px 20px;
			margin: 8px 0;
    		display: inline-block;
    		border: 1px solid #00cc66;
    		border-radius: 	0px;
    		box-sizing: border-box;	
	}
	
	 input[type=submit] {
    	background-color: #4CAF50;
    	border-radius:10px ;
    	color: white;
    	padding: 10px 20px;
    	text-decoration: none;
    	margin: 10px 5px;
    	cursor: pointer;
}
table, td, th {    
    border: 1px solid black;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

 td,th {
padding: 10px;
width:100px;
}

	
</style>
</head>
<body>
<div id="header">
<h1>E-SHOPPING</h1>
</div>
<h2>please select item to update :</h2>

<?php	
	while($row = mysql_fetch_assoc($extract))
	{
		//echo "$row[id]	$row[name]	$row[category]	$row[image]	$row[price]	$row[discount]	$row[stock] <a href='edit.php?edit=$row[id]'>edit</a><br>";
	
	
?>

<html>
<body>
<table>
<tr>
<th>image name </th>
<th>image path</th>
<th></th>
</tr>
<tr>

<td><?php echo $row['imagename'];?></td>
<td><?php echo $row['imagepath'];?></td>
<td><?php echo "<a href='edit_display.php?edit=$row[id]'>edit</a>"?></td>
</tr>
</table><br>
<img src="<?php echo $row['imagepath'];?>" width="385px" height="350px">



</body>
</html>
<?php
	}
}
	else{
		echo "you must be logged in to update the item!!";
	}
?>

