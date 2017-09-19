<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
	    <?php
			require_once("setTheme.php");
			require_once("lib.php");
		?>
    <title>Preferences</title>
</head>
<body class=" <?php echo get_font_size(); ?> ">
<header>
    <h1>COMP233 Assignment 3</h1>
</header>
<nav class=" <?php echo get_menu_position(); ?>">
    <ul>
        <li>
            <a href="home.php">Home</a>
        </li>
        <li>
            <a href="pageone.php">Page One</a>
        </li>
        <li>
            <a href="pagetwo.php">Page Two</a>
        </li>
        <li>
            <a href="pagethree.php">Page Three</a>
        </li>
        <li>
            <a href="preferences.php">Preferences</a>
        </li>
        <li>
            <a href="final.php">Logout</a>
        </li>
    </ul>
</nav>
<content>
    <h1>Preferences</h1>
    <form id="form1" action="savePreferences.php" name="save" method="POST">
        <h2>Theme</h2> Which theme would you like
        <select name="theme-color" id="dropdown1">
            <option value="lightside">lightside</option>
            <option value="darkside">darkside</option>
        </select>
        <h2>Text Size</h2> What text size would you like
        <select name="theme-font" id="dropdown2">
            <option value="default">100%</option>
            <option value="smallest">80%</option>
            <option value="small">90%</option>
            <option value="large">110%</option>
            <option value="largest">120%</option>
        </select>
        <h2>Navigation Menu Placement</h2>
        <input type="radio" name="navpos" value="left" checked="checked">left
        <br>
        <input type="radio" name="navpos" value="right">right
        <br>
        <br>
        <input type='submit' value='Save Preferences'>
</content>
</body>

</html>