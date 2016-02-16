<!DOCTYPE html>
	<html>
		<head>
			<link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
			<link rel="stylesheet" href="index.css">			
		</head>
		<body>
			<div class="jumbotron">
				<div class="container">
					<h2 style="text-align: center;">Login System</h2>
				</div>
			</div>
				<div class="container userbox">
				<form action="login.php" method="post">
					<p> Username: </p>
						<input type="text" class="usrnam" id="usrnam" name="usrnam" value="">
						<p> Password: </p>
						<input type="password" class="pw" id="pw" name="pw" value="">
						<input type="submit" value="Login">
				</form>
					<form action="register.php" method="post">
						<p> E-mail: </p>
						<input type="text" class="email" id="email" name="email" value="">
						<p> Username: </p>
						<input type="text" class="usrnam" id="usrnam" name="usrnam" value="">
						<p> Password: </p>
						<input type="password" class="pw" id="pw" name="pw" value="">
						<input type="submit" value="Register">
				</form>
				</div>
		</body>
	</html>