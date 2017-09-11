<?php
if(isset($_COOKIE["logged_in"]))
   {
       header('location: home.php');
   }
if(isset($_COOKIE["auto_login"]))
{
    setcookie("logged_in", "true");
    header('location: home.php');
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='UTF-8'>
        <link rel="stylesheet" type="text/css" href="./css/lightside.css">
		<title>Login</title>
	</head>
	<body>
        <div class="position-center">
    		<div class='login'>
    		<form name='form'  action='./processLogin.php' method='POST' >
                <input type='text' name='uname' placeholder="Username"> <br>
                <input type='text' name='pwd' placeholder="Password"> <br><br>
                <input type='checkbox' name='remember' value='check'> Keep me logged in for a week <br><br>
                <input type='submit' value='submit form'> 
                <input type='submit' value='reset form'> 
    		</form>
            </div>
        </div>
	</body>
</html>