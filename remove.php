<?php

include 'connection.php' ;

if(isset($_GET['remove']))
{
	$id=$_GET['remove'];
	$res=mysql_query("DELETE FROM items WHERE id='$id'") or die(mysql_error());
	header('Location: admin_main.php');

}
?>