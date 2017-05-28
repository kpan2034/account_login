<?php

include 'config.php';
include 'storepassword.php';

/*
$stmt = $conn->prepare("INSERT INTO Account(uname, pass) VALUES (?, ?));
$stmt->bind_param('ss',$_POST['username'] , $_POST['password']);

$stmt->excute();
$stmt->close();
 */

$uname = $conn->escape_string($_POST['username']);
$xpass = $conn->escape_string($_POST['password']);
$pword = get_hash($xpass);

//First check if user already exists

$sql = "SELECT * FROM Accounts WHERE username=$username";
$result = $conn->query($sql);

if($result->num_rows > 0){
	echo "ACCOUNT MAY ALREADY EXIST";
	exit(0);
};
$sql = "INSERT INTO Account(username, password) VALUES ('$uname', '$pword');
$conn->mysqli_query($sql);
$conn->close();
?>
