<?php 
session_start();
include '../../config/database.php';
if (isset($_POST['send'])) {
	$request_id=$_POST['request_id'];
	$user_id=$_POST['user_id'];
	$response_message=$_POST['response_message'];

	$insert=mysqli_query($connect,"INSERT INTO responses(request_id,user_id,response_message) values('$request_id','$user_id','$response_message')");
	if ($insert) {
		?>
		<script>
			window.alert("inserted!");
			window.location.href=("../views/view_admin_response_dashboard.php")
		</script>
		<?php
	}
	
}

 ?>




