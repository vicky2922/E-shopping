<?php

session_start();


$connect = @mysql_connect("localhost","Gaurav","P@ssword") or die(mysql_error());


$select = @mysql_select_db("users") or die(mysql_error());
if(@$_SESSION['admin']){

$extract = @mysql_query("SELECT * FROM shipping") or die(mysql_error());

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
	width:20%;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
padding: 10px;
width:20%;
}

	
</style>
</head>
<body>
<div id="header">
<h1>E-SHOPPING</h1>
</div>
<h2>pending orders</h2>
<table>
<tr>
<th>id</th>
<th>name </th>
<th>item</th>
<th>address</th>
<th>dateofdelivery</th>

</tr>
</table>
<?php	
	while($row = mysql_fetch_assoc($extract))
	{
		//echo "$row[id]	$row[name]	$row[category]	$row[image]	$row[price]	$row[discount]	$row[stock] <a href='edit.php?edit=$row[id]'>edit</a><br>";
	
	
?>

<html>
<body>
<table>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['customerName'];?></td>
<td><?php echo $row['item'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['dateofdelivery'];?></td>

</tr>
</table>



</body>
</html>
<?php
	}
}
	else{
		if(@$_SESSION['username']){
			$name1=$_SESSION['username'];
			$extract = @mysql_query("SELECT * FROM shipping WHERE customerName='$name1'") or die(mysql_error());

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
	width:20%;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
padding: 10px;
width:20%;
}

	
</style>
</head>
<body>
<div id="header">
<h1>E-SHOPPING</h1>
</div>
<h2>your orders</h2>
<table>
<tr>
<th>id</th>
<th>name </th>
<th>item</th>
<th>address</th>
<th>dateofdelivery</th>

</tr>
</table>
<?php	
	while($row = mysql_fetch_assoc($extract))
	{
		//echo "$row[id]	$row[name]	$row[category]	$row[image]	$row[price]	$row[discount]	$row[stock] <a href='edit.php?edit=$row[id]'>edit</a><br>";
	
	
?>

<html>
<body>
<table>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['customerName'];?></td>
<td><?php echo $row['item'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['dateofdelivery'];?></td>

</tr>
</table>



</body>
</html>
	
<?php
	}
		}
	}
?>

