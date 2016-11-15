<?php
// Create Connection
$dbhost = 'localhost'; 
$dbuser = 'root'; 
$dbpass = ''; 
$dbname = 'fp1-data';
$dbcon = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Test connection
if (mysqli_connect_errno()) { //if there is an error number then we know theres a problem
	die("Database connection failed: " . // completely stop with this message
		mysqli_connect_error() . // Display the actual error w/ version
		" (" . mysqli_connect_errno() . ")" // Display actual error number
		);
}else {
	//echo "Connected Successfully";
}
?>