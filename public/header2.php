<header>
	<ul>
	<?php
	$root = "http://".$_SERVER['HTTP_HOST'].substr($_SERVER['SCRIPT_NAME'], 0, (strpos($_SERVER['SCRIPT_NAME'], "/", 1) + 1));
	echo "
		<li><a href='".$root."../index.php'>Home</a></li>
		<li><a href='".$root."gallery.php'>Gallery</a></li>
		<li><a href='".$root."about.php'>About</a></li>";
		if (isset($_SESSION['logged']))
			echo "<li style='float:right'><a href='".$root."server/logout.php'>to logout</a></li>";
		else
		{
			echo "<li style='float:right'><a href='".$root."'>you're logout</a></li>";
		}
	?>
	</ul>
</header>