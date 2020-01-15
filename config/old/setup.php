<?php
require('database.php');
session_start();
try {
	$dbh = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD, $OPT);
} catch (PDOException $error) {
    print "Error while connecting !: " . $error->getMessage() . "<br/>";
    die();
}
try {
    $request = "DROP DATABASE IF EXISTS `$DB_NAME`";
    $dbh->exec($request);
    echo "Previous database removed ... <br/>";
} catch (PDOException $error) {
    print "Error while removing previous database !: " . $error->getMessage() . "<br/>";
    die();
}
try {
    $request = "CREATE DATABASE `$DB_NAME` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
    $dbh->exec($request);
    echo "... New camagru database created ... <br/>";
} catch (PDOException $error) {
    print "Error  hile creating to a new database!: " . $error->getMessage() . "<br/>";
    die();
}
try {
    $dbh->exec("USE $DB_NAME");
    echo "... Connected to the new database ... <br/>";
} catch (PDOException $error) {
    print "Error while connecting to the new database !: " . $error->getMessage() . "<br/>";
    die();
}
try {
    $request = "CREATE TABLE users (
    ID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    NAME VARCHAR(20),
    PASSWORD VARCHAR(128),
    EMAIL VARCHAR (50),
    NOTIF INT,
    HASH_MAIL VARCHAR (128),
    VALIDATE BOOLEAN)";
    $dbh->exec($request);
    echo "... New users table created ... <br/>";
} catch (PDOException $error) {
    print "Error while creating users table !: " . $error->getMessage() . "<br/>";
    die();
}
try {
    $request = "CREATE TABLE loves (
    ID INT,
    USER_ID INT)";
    $dbh->exec($request);
    echo "... New loves table created ... <br/>";
} catch (PDOException $error) {
    print "Error while creating users table !: " . $error->getMessage() . "<br/>";
    die();
}
try {
    $request = "CREATE TABLE comments (
    ID_COMMENT INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    ID_PICTURE INT,
    TEXT LONGTEXT,
    ID_USER INT)";
    $dbh->exec($request);
    echo "... New comments table created ... <br/>";
} catch (PDOException $error) {
    print "Error while creating users table !: " . $error->getMessage() . "<br/>";
    die();
}
try {
    $request = "CREATE TABLE pictures (
    ID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    USER_ID INT,
    LINK BLOB(4294967295),
    CHOICE VARCHAR(255))";
    $dbh->exec($request);
    if (isset($_SESSION['user'])) {
        unset($_SESSION['user']);
    }
    if (isset($_SESSION['id_user'])) {
        unset($_SESSION['id_user']);
    }
    echo "... New pictures table created <br/>Redirecting to index.php...";
?>
    <html>
        <head>
            <meta http-equiv="refresh" content="2; URL='../index.php'"/>
        </head>
    </html>
<?php 
} catch (PDOException $error) {
    print "Error while creating pictures table !: " . $error->getMessage() . "<br/>";
    die();
}
?>
