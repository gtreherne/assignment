<?php
if(isset($_COOKIE["logged_in"])) {
    header('location: home.php');
   }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
        <?php
            require_once("setTheme.php");
            require_once("lib.php");
        ?>
    <title>Login</title>
</head>
<body class=" <?php echo get_font_size(); ?> ">
<!-- Start header section -->
<header>
    <h1>COMP233 Assignment 3</h1>
</header>
<!-- Navigation menu -->
<nav class=" <?php echo get_menu_position(); ?>">
    <ul>
        <li>
            <a href="./home.php">Home</a>
        </li>
        <li>
            <a href="./pageone.php">Page One</a>
        </li>
        <li>
            <a href="./pagetwo.php">Page Two</a>
        </li>
        <li>
            <a href="./pagethree.php">Page Three</a>
        </li>
        <li>
            <a href="./final.php">Logout</a>
        </li>
    </ul>
</nav>
<!-- Start content section -->
    <content>
        <div class="position-center">
<!-- Login form -->
        <h1>Login</h1>
    		<div class='login'>
        		<form name='form'  action='./processLogin.php' method='POST' >
                    <input type='text' name='uname' placeholder="Username"> <br>
                    <input type='text' name='pwd' placeholder="Password"> <br><br>
                    <input type='submit' value='submit form'> 
                    <input type='submit' value='reset form'> 
        		</form>
            </div>
        </div>
    </content>
</body>
</html>