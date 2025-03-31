<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="../../public/assets/css/style.css"> <!-- Corrected path for CSS -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>

	<center>
		<p>WELCOME to Smart Service Request System (SSRS)</p>
		<form action="../../auth/login.php" method="POST">
			<div>
				<i class="fas fa-user"></i>
				<input type="text" name="name" placeholder="Enter your username" required>
			</div>
			<div>
				<i class="fas fa-lock"></i>
				<input type="password" name="password" placeholder="Enter your password" required>
			</div>
		
			<div>
				<input type="submit" name="login" value="Login">
				<p>If you don't have an account, click <a href="view_register.php">here</a> to register.</p>
			</div>
		</form>
	</center>
</body>
</html>
