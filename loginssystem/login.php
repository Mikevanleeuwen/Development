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

$usr = $_POST['usrnam'];
$usrpw = $_POST['pw'];

$usrquery = mysqli_query($conn, "SELECT * FROM users WHERE Username='".$usrnam."'");
$pwquery = mysqli_query($conn, "SELECT * FROM users WHERE Password ='".$pw."'");

if(mysqli_num_rows($usrquery) > 0 && mysqli_num_rows($pwquery) > 0){
	echo "<script>
		alert ('You are logged in!');
		window.history.go(-1);
		</script>";
    
}else{
 echo "<script>
 		alert ('Something went wrong!');
 		window.history.go(-1);
 		</script>";
}

$conn->close();
?>