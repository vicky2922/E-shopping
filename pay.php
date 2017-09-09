<?php

include 'connection.php';


if(isset($_GET['item']))
{
	
	$name=$_GET['item'];
	
	$res = @mysql_query("SELECT * FROM items WHERE name = '$name'") or die(mysql_error());
	$data=mysql_fetch_array($res);

	if(@$_SESSION['username']){
		
		$firstname=$_SESSION['username'];
		
		$user=mysql_query("SELECT * FROM login WHERE Firstname='$firstname'");
		$userdata=mysql_fetch_array($user);
		$name1=$userdata['Firstname'];
		$state=$userdata['State'];
		$date=date("Y/m/d");
		$nextday=strftime("%Y-%m-%d", strtotime("$date +5 day"));
		$entry=mysql_query("INSERT INTO shipping VALUES('','$name1','$name','$state','$nextday')");
		header('Location: thankyou.php');
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
	
	
	input[type=text],input[type=number],input[type=email],select,textarea
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
<h2>please fill out shipping details</h2>
<form action='shipping.php?item="<?php echo $name; ?>"' method="post">
<pre>
	Name   :  <input type="text" name="firstname" required autocomplete="off">

       E-mail  :  <input type="email" name="mail" required autocomplete="off">
	
   Contact no. :  <input type="number" name="contact" required autocomplete="off">
			      
   Country	:  <select id="country" name="country">
    			            <option value="australia">Australia</option>
    			            <option value="india">India</option>
   		 	            <option value="usa">USA</option>
						<option value="china">China</option>
						<option value="japan">Japan</option>
						<option value="south africa">South Africa</option>
						<option value="england">England</option>
						</select>
						
     Address      :   <textarea rows="4" cols="50"> 
					  </textarea>
	<input type="submit" name="submit" value="submit" >   <input type="reset" name="reset" value="Reset">
</pre>
</pre>
</form>
</div>
</body>
</html>
<?php
}
?>
