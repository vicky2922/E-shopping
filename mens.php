<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
<style>
	body{
	background-color : lightgray;}
	div.relative{
	width:100%;
	height:135px;
	position:fixed;
	top:0;
	left:0;
	background-color:white;}
	#username{
		position:absolute;
		top:50px;
		right:130px;}
	
	#s1{
	position:absolute;
	top:20px;
	left:250px;
	}
	#s2{
	position:absolute;
	top:10px;
	left:10px;}
	#s3{
	position:absolute;
	top:10px;
	left:270px;
	padding:20px;
	}
	#s4{
	position:absolute;
	top:30px;
	left:589px;
	}
	input[type=text]{
	padding:10px;
	width:300px;
	}
	
	div.items{
	position:relative;
	top:140px;
	left:0px;
	width:800px;
	z-index:-1;
	}
	#A{
	position:absolute;
	left:0px;
	top:0px;
	}
	#B{
	position:absolute;
	left:340px;
	top:0px;
	}
	#E{
	position:absolute;
	left:0px;
	top:360px;
	}
	#F{
	position:absolute;
	left:340px;
	top:360px;
	}
	#I{
	position:absolute;
	left:0px;
	top:720px;
	}
	#J{
	position:absolute;
	left:340px;
	top:720px;
	}
	#C{
	position:absolute;
	left:680px;
	top:0px;
	}
	#G{
	position:absolute;
	left:680px;
	top:360px;
	}
	#K{
	position:absolute;
	left:680px;
	top:720px;
	}
	#D{
	position:absolute;
	left:1020px;
	top:0px;
	}
	#H{
	position:absolute;
	left:1020px;
	top:360px;
	}
	#L{
	position:absolute;
	left:1020px;
	top:720px;
	}
	#admin{
		position:absolute;
		top:50px;
		right:200px;
	}
	input[type=button]{
		background-color:black;
		color:white;
		border:2px solid blue;
	}
li a{
	display: block;
	color: white;
    padding: 8px 0 8px 20px;
    text-decoration: none;
}
li a:hover {
    background-color: white;
    color: black;}
	#a{
	position:fixed;
	top:150px;
	left:0px;
	}
	div.nav{
	padding:10px;
	border-bottom:2px solid black;}
	
.dropdown {
    position: absolute;
	top:30px;
	right:10px;
    display: inline-block;
}
.dropbtn{
	border:none;
	background-color:white;
	margin:0;
	padding:0;}
	#reg{
		font-size:15px;
		color:blue;
	}
	#reg:hover{
		color:white;
	}

.help {
    position: absolute;
	top:30px;
	right:70px;
}

.dropdown-content {
    display: none;
	right:0;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
.dropdown-content a:hover {
	background-color: #696969;
	color:white;
	}
.dropdown:hover .dropdown-content {
    display: block;
}
 .dropbtn:hover{
    cursor:pointer;}
	
	
</style>
</head>
<body>
<div class="relative">
<div id="s1">
<img src="shopping-cart.png" width="50px" height="50px"></div>
<div id="s2">
<img src="shopping.jpg" width="200px" height="125px"></div>
<div id="s3">
<input type="text" name="searchtext" placeholder="search.."></div>
<div id="s4">
<a href="search.php"><img src="search.png" width="50px" height="39px"></a>
</div>
<?php
	if(@$_SESSION['username'])
{
	?>

<label id="username">
<?php

	echo "Hi, ".$_SESSION['username']."";
	
?>
</label>
<div class="dropdown">
	<button class="dropbtn"><img src="user.png" width="50px" height="50px"></button>
	<div class="dropdown-content">
    <a href="orders.php">Orders</a>
    <a href="logout.php">Logout</a>
  </div>
</div>
<div class="help">
<a href="help"><img src="help.png" width="50px" height="50px"></a></div>
	
<?php
}
else
{
?>
<div class="dropdown">
	<button class="dropbtn"><img src="user.png" width="50px" height="50px"></button>
	<div class="dropdown-content">
	<a href="login.html">LOGIN</a>
	<a id="reg" href="form.html">New User? Register</a>
    </div>
</div>

<div class="help">
<a href="help"><img src="help.png" width="50px" height="50px"></a></div>
	
<?php
}
?>
</div>


<?php

$connect = @mysql_connect("localhost","Gaurav","P@ssword") or die(mysql_error());
$select = @mysql_select_db("users") or die(mysql_error());
$category="mens fashion";
$extract = @mysql_query("SELECT * FROM items WHERE category='$category'") or die(mysql_error());
$ch = 'A';
	while($row = mysql_fetch_assoc($extract))
	{
?>
<div class="items">
	<a href='buy.php?item=<?php echo $row['id'];?>'><img id="<?php echo $ch ;?>" src="<?php echo $row['image'];?>" width="330px" height="350px"></a>
	
</div>
<body>
<html>

<?php
	$ch++;
	if($ch=='M')
		break;
	}
?>

