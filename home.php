<!DOCTYPE html>
<html>

<head>
	<meta charset='UTF-8'>
		<?php
			require_once("setTheme.php");
			require_once("lib.php");
		?>
	<title>Home</title>
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
<?php
if(isset($_COOKIE["logged_in"])) {
    echo "<h3>Welcome to my assignment</h3>";        
}else{
    echo "Click <a href='login.php'>here</a> to log in";
}
?>
<h1>Home Page</h1>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam posuere, velit vel tincidunt sagittis, nibh risus imperdiet lorem, ac consequat est est non turpis. Vivamus sit amet sollicitudin arcu, eget vestibulum nisi. Praesent non nibh sed augue rutrum porta nec a leo. Integer vel est a urna gravida aliquet vitae vitae eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris a ultricies augue, ac facilisis enim. Aliquam erat volutpat.
</p>
<p>
In nec sollicitudin ex. Fusce tincidunt massa a fringilla vulputate. Praesent lacinia massa dapibus massa dictum, et gravida felis condimentum. Nulla ornare nulla sed condimentum fringilla. Donec vitae sem id nisl mattis sollicitudin quis ut enim. Vivamus quis libero eget metus elementum egestas. Phasellus eget vehicula nunc. Donec feugiat pulvinar nibh in mattis. Suspendisse interdum erat sed tortor ullamcorper, sit amet iaculis purus accumsan.
</p>
<p>
Donec interdum erat ut urna finibus vestibulum. Aenean sollicitudin, mauris id gravida placerat, arcu nulla interdum sapien, vel auctor neque nulla nec erat. Duis non risus vitae lacus elementum porttitor. Duis vel ante at massa vulputate lacinia nec quis lectus. Suspendisse consectetur rhoncus nibh a fermentum. Ut tincidunt urna in congue porttitor. In eget neque neque.
</p>
<p>
Vestibulum consectetur, magna eget vestibulum tempus, risus diam ullamcorper nibh, vitae tristique sem arcu non elit. Sed cursus egestas ligula, ac euismod purus. Aenean nisi neque, placerat ut mi eu, condimentum congue lectus. Nam aliquam nec dui et posuere. Donec ornare est vel fringilla tempus. Nunc sed enim a dolor faucibus sodales. Sed tellus magna, sagittis non suscipit in, mollis id ex. Sed varius mauris ac lobortis mollis. Sed id tortor quis nisi tempus hendrerit. Sed molestie sem est, in fringilla mi rhoncus eu. Proin lobortis purus nec lectus mollis, eget dapibus nisi tempor.
</p>
<p>
Duis augue felis, consequat eu diam sed, egestas rutrum mauris. Quisque rhoncus neque id nisl pellentesque gravida. Fusce nec neque nunc. Ut placerat tristique aliquam. Maecenas semper sed urna vel ultrices. Maecenas sagittis est gravida sodales lobortis. In hac habitasse platea dictumst. Sed id augue et lorem pharetra consectetur volutpat vitae eros. Sed condimentum arcu a feugiat dignissim. Nam elementum facilisis metus, id tincidunt ligula interdum nec. Maecenas id felis felis. Interdum et malesuada fames ac ante ipsum primis in faucibus.
</p>
</content>
</body>
</html>