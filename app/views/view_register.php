<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>register page</title>
	<link rel="stylesheet" type="text/css" href="../../public/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<center>
		<form method="POST" action="../../auth/register.php">
			<div>
				<i class="fas fa-user"></i>
				<input type="text" name="name" placeholder="enter your fisrt name" required>
			</div>
			<div>
				<i class="fas fa-envelope"></i>
				<input type="email" name="email" placeholder="enter your email" required>
			</div>
			
			<div>
				<i class="fas fa-lock"></i>
				<input type="password" name="password" placeholder="enter your password" required>
			</div>
			
			<div>
				<input type="submit" name="register" value="register">
				<p>if you aready have account click hire to <a href="view_login.php">login</a></p>
			</div>
		</form>
	</center>

</body>
</html>