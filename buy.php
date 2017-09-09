<?php

include 'connection.php' ;

if(isset($_GET['item']))
{
	$id=$_GET['item'];
	$extract = @mysql_query("SELECT * FROM items WHERE id='$id'") or die(mysql_error());
	
	
	$data=mysql_fetch_array($extract);
	
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
	
	font-size:30px;
	}
	

	
	 input[type=button] {
    	background-color: #4CAF50;
    	border-radius:10px ;
    	color: white;
    	padding: 10px 20px;
    	text-decoration: none;
    	margin: 10px 5px;
    	cursor: pointer;
}
#img{
	position:absolute;
	top:160px;
	left:70px;
}

	
</style>
</head>
<body>
<div id="header">
<h1>E-SHOPPING</h1>
</div>
<div id="form1">
<pre>
	 
     <b>	Item   : <?php echo $data['name'];?></b>
	 
	 <b>Price  : <?php echo $data['price'];?> Rs</b>
	 
     <b>Discount : <?php echo $data['discount'];?>%</b>
	
  <b>amount payable  :  <?php echo $data['price']-$data['discount']*$data['price']/100 ?></b>
	<img id="img" src="<?php echo $data['image'];?>" width="385px" height="350px">
	
	<input type="button" name="buy" value="Buy" onclick="window.location = 'pay.php?item=<?php echo $data['name'];?>';" >   <input type="button" name="add" value="add to cart" onclick="window.location = 'buy1.html';">
</pre>
</form>
</div>
</body>
</html>
<?php
}
?>