<?php

include 'config.php';

$username = $conn->escape_string($_POST['username']);
$password = $conn->escape_string($_POST['password']);

$sql = "SELECT * FROM Accounts WHERE username = $username AND password = $password;

$result = $conn->query($sql);

if($result->num_rows == 1){
	$row = $res->fetch_assoc();
	if(($row["username"]==$username) AND ($row["password"] == password_hash($password)))
		echo "LOGIN SUCCESSFUL";
	else
		echo "INCORRECT CREDENTIALS";
}
else{
	echo "SOMETHING WENT WRONG";
}

?>
