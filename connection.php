<?php

session_start();
$connect = @mysql_connect("localhost","Gaurav","P@ssword") or die(mysql_error());


$select = @mysql_select_db("users") or die(mysql_error());
?>