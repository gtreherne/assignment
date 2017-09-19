<!-- This script contains content and ideas from Chris Clark @ Shift Innovation Centre -->
<?php
$theme = $_POST["theme-color"];
$font = $_POST["theme-font"];
$position = $_POST["navpos"];

setcookie("theme", $theme, time()+604800);
setcookie("font", $font, time()+604800);
setcookie("position", $position, time()+604800);
header("location: preferences.php" );
?>