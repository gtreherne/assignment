<!-- This script was introduced from learning content produced by Vimal Kumar -->
<?php
$username = $_POST["uname"];
$password = $_POST["pwd"];

if($username === "test" && $password === "alpha")
{
    setcookie("logged_in", "true");
    if(isset($_POST["remember"]))
    {
        setcookie("auto_login", "true", time() + (7*24*60*60));   
    }
    header("location: ./home.php" );
}
else
{
    header("location: ./login.php" );
}
?>