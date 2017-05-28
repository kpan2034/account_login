<?php

$server = 'http://localhost/';
$username = 'XXX_username';
$password = 'XXX_password';
$dbname = 'XXX_dbname';

$conn = new mysqli($server, $username, $password, $dbname);

if($conn->connect_errno)
	die("Connection unsuccessful");

echo "Connection Successful";
?>
