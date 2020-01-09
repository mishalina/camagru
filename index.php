<?php 
	session_start(); 
	//require_once("config/pdo.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="stylesheets/global.css">
		<link rel="stylesheet" type="text/css" href="stylesheets/banners.css">
		<link rel="stylesheet" type="text/css" href="stylesheets/camera.css">
		<link rel="stylesheet" type="text/css" href="stylesheets/main.css">

		<?php
		if (isset($_SESSION['logged']))
			echo "<title>Camagru - Camera</title>";
		else
			echo "<title>Camagru - Log in</title>";
		echo "</head><body>";
		include('public/header.php');
		include('public/footer.php');
		if (isset($_SESSION['logged'])) {

		} else {

		}
		?>
	</body>
</html>
