<?php

include 'dbconnection.php';

$usr = $_POST['usrnam'];
$usrpw = $_POST['pw'];

$usrquery = mysqli_query($conn, "SELECT * FROM users WHERE Username=$usrnam");
$pwquery = mysqli_query($conn, "SELECT * FROM users WHERE Password =$pw");

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