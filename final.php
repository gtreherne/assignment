<?php
setcookie("logged_in", "", time() - 60);
setcookie("auto_login", "", time() - 60);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='UTF-8'>
		<title>
			Logout Page
		</title>
	</head>
	<body>
		<p>Thank You for visiting the website. You have ben logged out</p> 
		<p>Click <a href="login.php">here</a> to log back in.</p>
	</body>
</html>