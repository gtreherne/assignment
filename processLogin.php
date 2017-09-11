<?php
$username = $_POST["uname"];
$password = $_POST["pwd"];

if($username === "root" && $password === "root")
{
    setcookie("logged_in", "true");
    if(isset($_POST["remember"]))
    {
        setcookie("auto_login", "true", time() + (7*24*60*60));   
    }
    header("location: ./../php/home.php" );
}
else
{
    header("location: ./../php/login.php" );
}
?>