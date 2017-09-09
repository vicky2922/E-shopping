<?php

session_start();

if(@$_SESSION['username']){
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
	.s5{
	display:none;
	position:absolute;
	left:260px;
	top:148px;
	z-index:-1;
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
.dropdown-content a:hover {
	background-color: #696969;
	color:white;}
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
<label id="username">
<?php

echo "Hi, ".$_SESSION['username']."";

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
	<li><a href="member.php">All Offers</a></li></div>
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
<a  class="s5" href="mobiles.php"><img  src="photo\Smartphones.jpg" width="800px" height="450px"></a>
	<a  class="s5" href='offers.php?item=3'><img  src="photo\man-shoes.jpg" width="800px" height="450px"></a>
	<a  class="s5" href='mens.php'><img  src="photo\watch.jpg" width="800px" height="450px"></a>
	<a  class="s5" href='offers.php?item=11'><img  src="photo\headphone.png" width="800px" height="450px"></a>
	<a  class="s5" href='offers.php?item=10'><img  src="photo\kitchen.jpg" width="800px" height="450px"></a>
	<a  class="s5" href='offers.php?item=7'><img  src="photo\ray-ban.jpg" width="800px" height="450px"></a>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("s5");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<?php

$connect = @mysql_connect("localhost","Gaurav","P@ssword") or die(mysql_error());
$select = @mysql_select_db("users") or die(mysql_error());
$extract = @mysql_query("SELECT * FROM display") or die(mysql_error());

	while($row = mysql_fetch_assoc($extract))
	{
?>
<div class="items">

	<!--<a href='offers.php?item=1'><img id="s5" src="<?php if($row['id']==1) echo $row['imagepath'];?>" width="800px" height="450px"></a>-->
	<a href='offers.php?item=2'><img id="s6" src="<?php if($row['id']==2) echo $row['imagepath'];?>" width="385px" height="350px"></a>
	<a href='offers.php?item=3'><img id="s7" src="<?php if($row['id']==3) echo $row['imagepath'];?>" width="390px" height="350px"></a>
	<a href='offers.php?item=4'><img id="s8" src="<?php if($row['id']==4) echo $row['imagepath'];?>" width="390px" height="350px"></a>
	<a href='offers.php?item=5'><img id="s9" src="<?php if($row['id']==5) echo $row['imagepath'];?>" width="390px" height="350px"></a>
	<a href='offers.php?item=6'><img id="s10" src="<?php if($row['id']==6) echo $row['imagepath'];?>" width="270px" height="180px"></a>
	<a href='offers.php?item=7'><img id="s11" src="<?php if($row['id']==7) echo $row['imagepath'];?>" width="270px" height="180px"></a>
	<a href='offers.php?item=8'><img id="s12" src="<?php if($row['id']==8) echo $row['imagepath'];?>" width="270px" height="170px"></a>
	<a href='offers.php?item=9'><img id="s13" src="<?php if($row['id']==9) echo $row['imagepath'];?>" width="270px" height="160px"></a>
	<a href='offers.php?item=10'><img id="s14" src="<?php if($row['id']==10) echo $row['imagepath'];?>" width="270px" height="190px"></a>
	<a href='offers.php?item=11'><img id="s15" src="<?php if($row['id']==11) echo $row['imagepath'];?>" width="270px" height="220px"></a>
	
</div>
</div>
<body>
<html>

<?php
	}
}
else
	die ("you must be logged in first!!");

?>

