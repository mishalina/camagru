<?php
session_start();
session_unset();
session_destroy();
$_SESSION['logged'] = '';
?>
<html>
        <head>
            <meta http-equiv="refresh" content="2; URL='../index.php'"/>
        </head>
</html>
