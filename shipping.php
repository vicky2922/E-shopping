<?php

include 'connection.php' ;
if(isset($_GET['item']))
{
	$name=$_POST['firstname'];
	$add=$_POST['country'];
	$itemname=$_GET['item'];
	$date=date("Y/m/d");
	$nextday=strftime("%Y-%m-%d", strtotime("$date +5 day"));
	
	$res=mysql_query("INSERT INTO shipping VALUES('','$name','$itemname','$add','$nextday')") or die(mysql_error());
	header('Location: thankyou.php');
}


?>