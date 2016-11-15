<?php

include_once('dataconnect.php'); 

// Create variables of column names from database
$userID = $_POST["userID"];
$usernameID = $_POST["username"];
$uemail = $_POST["email"];
$upassword = $_POST["u_password"];
$upasswordv = $_POST["u_pw_verify"];
$uphone = $_POST["u_phone"];
$ufname = $_POST["u_fname"];
$ulname = $_POST["u_lname"];
$uaddress = $_POST["u_address"];
$uaddress2 = $_POST["u_address2"];
$ucity = $_POST["u_city"];
$ustate = $_POST["u_state"];
$uzipcode = $_POST["u_zipcode"];

// Query to insert data into database table
$sql="INSERT INTO users(userID,username,email,u_password,u_pw_verify,u_phone,u_fname,u_lname,u_address,u_address2,u_city,u_state,u_zipcode) 
VALUES('".$userID."','".$usernameID."','".$uemail."','".$upassword."','".$upasswordv."','".$uphone."','".$ufname."','".$ulname."','".$uaddress."','".$uaddress2."','".$ucity."','".$ustate."','".$uzipcode."')";

if (mysqli_query($dbcon, $sql)) {
      header("Location: thanks-registration.php");
	 //echo <a href="index.php">Go back to the main page</a>;
	 
	 //echo 'Thank you for registering! Check your email to confirm your registration. Once confirmed head to the <a href="login.php">Login Page</a>';
	 //echo '<a href="index.html">Go back to the main page</a>';
	 
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($dbcon);
}





?>