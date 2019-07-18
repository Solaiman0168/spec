<?php
	
	$dbname = "spec_spec";
	$hostname = "localhost";
	$username = "spec_spec";
	$password = "asdf@1234";
	$con = mysqli_connect($hostname, $username, $password, $dbname );
	mysqli_set_charset($con, "utf8");
?>