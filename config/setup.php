<?php
require('database.php');
// Database structure creation via PDO instance
try {
	$db->query("CREATE TABLE IF NOT EXISTS users
						(
							user_id INT(6) PRIMARY KEY AUTO_INCREMENT NOT NULL,
							login VARCHAR(40) UNIQUE NOT NULL,
							password VARCHAR(255) NOT NULL,
							email VARCHAR(128) UNIQUE NOT NULL,
							confirm_hash VARCHAR(255) NOT NULL
						)");
}
catch (PDOException $error) {
    print "Error while creating users table !: " . $error->getMessage() . "<br/>";
	die();
}

?>
<html>
        <head>
            <meta http-equiv="refresh" content="2; URL='../index.php'"/>
        </head>
</html>