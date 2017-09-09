<?php

session_start();
if(@$_SESSION['username']){
	
		?>
		<html>

		<body>
		<script type="text/javascript">

		alert("Thank you for shopping with us,Your order has been successfully placed.It will be delivered within 5-6 days.");
		location.href="member.php";
		</script>
		</body>
		</html>
		<?php
	
}
else
{
	?>
		<html>

		<body>
		<script type="text/javascript">

		alert("Thank you for shopping with us,Your order has been successfully placed.It will be delivered within 5-6 days.");
		location.href="main.php";
		</script>
		</body>
		</html>
		<?php
}

?>