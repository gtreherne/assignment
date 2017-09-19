<?php
if (isset($_COOKIE['theme'])) {
	if ($_COOKIE['theme'] === 'darkside') {
		echo '<link href="../css/darkside.css" rel="stylesheet" type="text/css" />';
	}else{
		echo '<link href="../css/lightside.css" rel="stylesheet" type="text/css" />';
	}
}else{
	echo '<link href="../css/lightside.css" rel="stylesheet" type="text/css" />';
}
?>
