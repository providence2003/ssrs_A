
<?php 
session_start();
include '../router/web.php';
include '../config/database.php';
if (isset($_POST['register'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	

	$insert=mysqli_query($connect,"INSERT INTO users (name,email,password)VALUES('$name','$email','$password')");
	if ($insert) {
			echo "<script> alert('account created well') </script>";
			echo "<script> window.location.replace('../app/views/view_login.php') </script>";
		}

}
 ?>
