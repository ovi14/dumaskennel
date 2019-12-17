<?php

$mysqli = new mysqli($database_server, $database_user, $database_password, $database);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}	
?>
