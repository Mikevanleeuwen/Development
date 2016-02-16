<?php

include 'dbconnection.php';

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