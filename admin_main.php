<?php

session_start();

if(@$_SESSION['admin']){
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
	ul {

	list-style-type:none;
	padding:0;
	margin:0;
	width:250px;
	height:500px;
	background-color:#696969;
	}
	div.items{
	position:relative;
	top:140px;
	left:250px;
	width:800px;
	z-index:-1;
	}
	#s5{
	position:absolute;
	left:0px;
	top:0px;
	}
	#s6{
	position:absolute;
	left:0;
	top:470px;
	}
	#s7{
	position:absolute;
	left:410px;
	top:470px;
	}
	#s8{
	position:absolute;
	left:0px;
	top:840px;
	}
	#s9{
	position:absolute;
	left:410px;
	top:840px;
	}
	#s10{
	position:absolute;
	left:810px;
	top:0px;
	}
	#s11{
	position:absolute;
	left:810px;
	top:190px;
	}
	#s12{
	position:absolute;
	left:810px;
	top:380px;
	}
	#s13{
	position:absolute;
	left:810px;
	top:570px;
	}
	#s14{
	position:absolute;
	left:810px;
	top:740px;
	}
	#s15{
	position:absolute;
	left:810px;
	top:940px;
	}
	input[type=submit],input[type=button]{
		background-color: #4CAF50;
    	border-radius:10px ;
    	color: white;
    	padding: 10px 10px;
		cursor:pointer;
	}
	#a1{
		position:absolute;
		top:35px;
		right:450px;
	}
	#a2{
		position:absolute;
		right:355px;
		top:35px;
	}
	#a3{
		position:absolute;
		right:265px;
		top:35px;
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
.help {
    position: absolute;
	top:30px;
	right:70px;
}
.dropbtn{
	border:none;
	background-color:white;
	margin:0;
	padding:0;}

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
.dropdown-content a:hover {background-color: #696969;}
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
<div>
	<input id="a1" type="button" name="add" value="ADD" onclick="window.location = 'add_item.html';">
	<input id="a2" type="submit" name="remove" value="REMOVE" onclick="window.location = 'remove_item.html';">
	<input id="a3" type="button" name="update" value="UPDATE" onclick="window.location = 'update_item.html';">
</div>
<div>
<label id="username">
<?php

echo "Hi, ".$_SESSION['admin']."";

?>
</label>
</div>

<div class="dropdown">
	<button class="dropbtn"><img src="user.png" width="50px" height="50px"></button>
	<div class="dropdown-content">
    <a href="orders.php">Orders</a>
    <a href="logout.php">Logout</a>
  </div>
</div>
<div class="help">
<a href="help"><img src="help.png" width="50px" height="50px"></a></div>
	
</div>
<div id="a">
<ul>
<div class="nav">
	<li><a href="admin_main.php">All Offers</a></li></div>
	<div class="nav">
	<li><a href="mobiles.php">Mobiles & Tablets</a></li>
	<li><a href="computers.php">Computers</a></li></div>
	<div class="nav">
	<li><a href="mens.php">Men's Fashion</a></li>
	<li><a href="womens.php">Women's Fashion</a></li>
	<li><a href="kids.php">Kids Fashion</a></li></div>
	<div class="nav">
	<li><a href="home.php">Home & Kitchen</a></li>
	<li><a href="sports.php">Spotrs & Fitness</a></li></div>
	<div class="nav">
	<li><a href="electronics.php">Electronics</a></li></div>
</ul>
</div>
<?php

$connect = @mysql_connect("localhost","Gaurav","P@ssword") or die(mysql_error());
$select = @mysql_select_db("users") or die(mysql_error());
$extract = @mysql_query("SELECT * FROM display") or die(mysql_error());

	while($row = mysql_fetch_assoc($extract))
	{
?>
<div class="items">

	<a href='display.php?edit=1'><img id="s5" src="<?php if($row['id']==1) echo $row['imagepath'];?>" width="800px" height="450px"></a>
	<a href='display.php?edit=2'><img id="s6" src="<?php if($row['id']==2) echo $row['imagepath'];?>" width="385px" height="350px"></a>
	<a href='display.php?edit=3'><img id="s7" src="<?php if($row['id']==3) echo $row['imagepath'];?>" width="390px" height="350px"></a>
	<a href='display.php?edit=4'><img id="s8" src="<?php if($row['id']==4) echo $row['imagepath'];?>" width="390px" height="350px"></a>
	<a href='display.php?edit=5'><img id="s9" src="<?php if($row['id']==5) echo $row['imagepath'];?>" width="390px" height="350px"></a>
	<a href='display.php?edit=6'><img id="s10" src="<?php if($row['id']==6) echo $row['imagepath'];?>" width="270px" height="180px"></a>
	<a href='display.php?edit=7'><img id="s11" src="<?php if($row['id']==7) echo $row['imagepath'];?>" width="270px" height="180px"></a>
	<a href='display.php?edit=8'><img id="s12" src="<?php if($row['id']==8) echo $row['imagepath'];?>" width="270px" height="170px"></a>
	<a href='display.php?edit=9'><img id="s13" src="<?php if($row['id']==9) echo $row['imagepath'];?>" width="270px" height="160px"></a>
	<a href='display.php?edit=10'><img id="s14" src="<?php if($row['id']==10) echo $row['imagepath'];?>" width="270px" height="190px"></a>
	<a href='display.php?edit=11'><img id="s15" src="<?php if($row['id']==11) echo $row['imagepath'];?>" width="270px" height="220px"></a>
	
</div>
<body>
<html>
<?php
	}
}
else
	die ("you must be logged in first!!");
?>