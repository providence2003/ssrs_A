<?php
	session_start();
	include '../router/web.php';
	include '../config/database.php'; 

	if (isset($_POST['login'])) {
		$name = $_POST['name']; 
		$password = $_POST['password']; 

		
		$select = mysqli_query($connect, "SELECT * FROM users WHERE name='$name' AND password='$password'");
		$fetch = mysqli_fetch_array($select);

		if (mysqli_num_rows($select) > 0) {
			
			$_SESSION['name'] = $fetch['name'];
			$_SESSION['password'] = $fetch['password'];
			$_SESSION['role'] = $fetch['role'];

			if ($_SESSION['role'] == 'user') {
				echo "<script>alert('Welcome user!!!')</script>";
				echo "<script>window.location.replace('../app/views/view_user_dashboard.php')</script>";
			} elseif ($_SESSION['role'] == 'admin') {
				echo "<script>alert('Welcome admin!!!')</script>";
				echo "<script>window.location.replace('../app/views/view_admin_dashboard.php')</script>";
			}
		} else {
		
			echo "<script>alert('Username or password is incorrect!!')</script>";
			echo "<script>window.location.replace('../app/views/view_login.php')</script>";  // Redirect to the login page if login fails
		}
	}
?>
