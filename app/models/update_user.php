<?php 
session_start();
include '../../config/database.php';
$up=$_GET['user_id'];
$select=mysqli_query($connect,"SELECT * FROM users WHERE user_id='$up'");
while ($row=mysqli_fetch_array($select)) {
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>update</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="../../public/assets/css/style.css">
		

	</head>
	<body>
		<form method="POST" action="">
			<div>
				<i class="fas fa-user"></i>
				<input type="text" name="name"value="<?php echo $row['name'] ?>" placeholder="enter your fisrt name" required>
			</div>
			<div>
				<i class="fas fa-envelope"></i>
				<input type="email" name="email" value="<?php echo $row['email'] ?>" placeholder="enter your email" required>
			</div>
			
			<div>
				<i class="fas fa-lock"></i>
				<input type="password" name="password" value="<?php echo $row['password'] ?>" placeholder="enter your password" required>
			</div>
			
			<div>
				<input type="submit" name="update" value="update">
			</div>
		</form>
	</center>

	<?php
	}

 ?>
	
	</body>
	</html>
	<?php 
$up=$_GET['user_id'];
if (isset($_POST['update'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$update=mysqli_query($connect,"UPDATE users SET name='$name',email='$email',password='$password'WHERE user_id='$up'");
	if ($update) {
		?>
		<script>
			window.alert("updated!");
			window.location.href=("../views/view_user_dashboard.php")
		</script>
		<?php
	}
}

	 ?>
