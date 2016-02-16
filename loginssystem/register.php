<?php

// Turn off all error reporting
error_reporting(0);

// Report simple running errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Reporting E_NOTICE can be good too (to report uninitialized
// variables or catch variable name misspellings ...)
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

// Report all PHP errors (see changelog)
error_reporting(E_ALL);

// Report all PHP errors
error_reporting(-1);

// Same as error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

foreach ($_POST as $k => $v)	$$k = $v;

$servername = "localhost";
$username = "root@localhost";
$password = "";
$dbname = "test";
$usremail = "";
$usr = "";
$usrpw = "";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
	echo "connection failed";
} 
	echo "connection succesfully";

$usremail = $_POST['email'];
$usr = $_POST['usrnam'];
$usrpw = $_POST['pw'];

$emailquery = mysqli_query($conn, "SELECT * FROM users WHERE email='".$email."'");
$usrquery = mysqli_query($conn, "SELECT * FROM users WHERE Username='".$usrnam."'");

if(mysqli_num_rows($emailquery) > 0 && mysqli_num_rows($usrquery) > 0){
	echo "<script>
		alert ('Our really intellegent monkeys say the email or username is already used');
		window.history.go(-1);
		</script>";
    
}else{

$sql = "INSERT INTO users (email, username, password)
values ('$usremail', '$usr', '$usrpw')";

if ($conn->query($sql) === TRUE)
{
	echo "Register succesfully";
}
else
{
	echo "Error:".$sql."<br>".$conn->error;
}
}

$conn->close();
?>