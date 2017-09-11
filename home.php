<h3> Home page</h3>
<p> This is the home page. This text can be seen by anyone</p>
<?php
if(isset($_COOKIE["logged_in"]))
{
    echo "User has logged in <br>";
    echo "<p style='color:red'>This text will only be displayed if the user has logged in</p>";
    echo "To logout <a href='final.php'>click here </a>";
    
}
else
{
    echo "User has not logged in";
}
?>