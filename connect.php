<?php
session_start();
$connect = @mysql_connect("localhost","Gaurav","P@ssword") or die(mysql_error());

$Username = $_POST['userid'];
$Password = $_POST['password'];

$select = @mysql_select_db("users") or die(mysql_error());

$extract = @mysql_query("SELECT * FROM login WHERE UserID = '$Username' AND Password = '$Password'") or die(mysql_error());

$rows = @mysql_num_rows($extract);
	
$data = @mysql_fetch_assoc($extract);

if($Username && $Password)
{
	if($data['UserID']==$Username && $data['Password']==$Password)
	{
		$_SESSION['username']=$data['Firstname'];
		header('Location: member.php');
	}
	else
	{
		?>
		<html>

		<body>
		<script type="text/javascript">

		alert("invalid id or password");
		location.href="login.html";
		</script>
		</body>
		</html>
		<?php
	}
}
else
	echo "fill the required fields";
	
?>