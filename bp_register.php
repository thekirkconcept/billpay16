<?php

include_once('dataconnect.php'); 
include('header.html');

// Create variables of column names from database
$userID = $_POST["userID"];
$ufname = $_POST["u_fname"];
$ulname = $_POST["u_lname"];
$uemail = $_POST["email"];
$uphone = $_POST["u_phone"];
$usernameID = $_POST["username"];
$upassword = $_POST["u_password"];
$upasswordv = $_POST["u_pw_verify"];
$uaddress = $_POST["u_address"];
$uaddress2 = $_POST["u_address2"];
$ucity = $_POST["u_city"];
$ustate = $_POST["u_state"];
$uzipcode = $_POST["u_zipcode"];

// Query to insert data into database table
$sql="INSERT INTO users(userID,u_fname,u_lname,email,u_phone,username,u_password,u_pw_verify,u_address,u_address2,u_city,u_state,u_zipcode) 
VALUES('".$userID."','".$ufname."','".$ulname."','".$uemail."','".$uphone."','".$usernameID."','".$upassword."','".$upasswordv."','".$uaddress."','".$uaddress2."','".$ucity."','".$ustate."','".$uzipcode."')";

if (mysqli_query($dbcon, $sql)) {
      //header("Location: bank_details.html");
	 //echo <a href="index.php">Go back to the main page</a>;
	 
	 echo 'Successfully Registered';
	 echo '<a href="index.html">Go back to the main page</a>';
	 
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($dbcon);
}





?>