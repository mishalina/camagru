<?php
	require_once('database.php');
	try {
		$pdo = new PDO($DB_NEW_DSN, $DB_USER, $DB_PASSWORD, $OPT);
	} catch (PDOException $error) {
		print "Error while connecting !: " . $error->getMessage() . "<br/>";
		die();
}
?>
