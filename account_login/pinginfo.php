<<?php

$uname = $_POST["username"];
$pword = $_POST["password"];

$msg = "Welcome, " . $uname . "!<br>Your password is: " . $pword . "<br>";

echo $msg;

?>
