<?php
// PDO instantiation to initiate MySQL server connection, then create db
$db_dsn = 'mysql:host=127.0.0.1;charset=utf8';
$db_user = 'root';
$db_pass = '';
try {
    $db = new PDO($db_dsn, $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $error){
    echo "Database connection failed: " . $error->getMessage() . PHP_EOL;
}
try {
    $db->query("CREATE DATABASE IF NOT EXISTS camagru CHARACTER SET utf8; 
                                                USE camagru");
}
catch (PDOException $error) {
    echo "Error while creating database: " . $error->getMessage() . PHP_EOL;
    die();
}
?>