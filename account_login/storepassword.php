<?php

function get_hash($val){
	$cipher = password_hash($val, PASSWORD_DEFAULT);
	return $cipher;
?>

