<?php

session_start();
$connect = @mysql_connect("localhost","Gaurav","P@ssword") or die(mysql_error());

$select = @mysql_select_db("users") or die(mysql_error());

$Firstname = $_POST['firstname'];
$Lastname = $_POST['lastname'];
$Contact = $_POST['contact'];
$Email = $_POST['mail'];
$Gender = $_POST['gender'];
$State = $_POST['country'];
$Username = $_POST['userid'];
$Password = $_POST['password'];


$write = @mysql_query("INSERT INTO login VALUES('','$Firstname','$Lastname','$Email','$Contact','$Gender','$State','$Username','$Password')") or die(mysql_error());



$_SESSION['username']=$Firstname;

echo "Congratulations,you are in!! <a href='member.php'>click</a> here to go to our main page";

?>

