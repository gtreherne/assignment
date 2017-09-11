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
		<style>
			.div1{
				border: 1px solid;
                padding: 10px;
                background-color:salmon;
                width:intrinsic;
			}
            .labelDiv{
                background-color:salmon;
                border: 1px solid #ffa07a;
                margin-right:5px;
                width:180px;
                float:left;
                font-family:helvetica;
                font-size: 10pt;
			}
            .legendDiv{
                background-color:salmon;
                border: 1px solid #ffa07a;
                font-family:helvetica;
                font-size: 10pt;
			}
            .fieldset1{
                background-color:salmon;
                border: 1px solid #ffa07a;
                width:350px;
                font-family:helvetica;
                font-size: 10pt;
                margin-bottom:2px;
            }
		</style>
		<title>
			Form Test
		</title>
	</head>
	<body>
		<div class='div1'>
		<form name='form1'  action='../php/processLogin.php' method='POST' >
            Username <input type='text' name='uname'>
            Password <input type='text' name='pwd'> <br><br>
            <input type='checkbox' name='remember' value='check'> Keep me logged in for a week <br><br>
            <input type='submit' value='submit form'> 
            <input type='submit' value='reset form'> 
		</form>
        </div>
	</body>