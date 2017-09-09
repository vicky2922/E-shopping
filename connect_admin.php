<?php
session_start();
$connect = @mysql_connect("localhost","Gaurav","P@ssword") or die(mysql_error());

@$Username = $_POST['userid'];
@$Password = $_POST['password'];

$select = @mysql_select_db("users") or die(mysql_error());

$extract = @mysql_query("SELECT * FROM admin WHERE Username = '$Username' AND Password = '$Password'") or die(mysql_error());

$rows = @mysql_num_rows($extract);
	
$data = @mysql_fetch_assoc($extract);

if($Username && $Password)
{
	if($data['Username']==$Username && $data['Password']==$Password)
	{
		
		$_SESSION['admin']=$data['Username'];
		header('Location: admin_main.php');

	}
	else
	{
		?>
		<html>

		<body>
		<script type="text/javascript">

		alert("invalid id or password");
		location.href="admin.html";
		</script>
		</body>
		</html>
		<?php
	
	}
}
else
	echo "fill the required fields";
	
?>