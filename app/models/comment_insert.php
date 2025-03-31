<?php 
session_start();
include '../../config/database.php';
if (isset($_POST['send'])) {
	$request_id=$_POST['request_id'];
	$user_id=$_POST['user_id'];
	$comment=$_POST['comment'];

	$insert=mysqli_query($connect,"INSERT INTO comments(request_id,user_id,comment) values('$request_id','$user_id','$comment')");
	if ($insert) {
		?>
		<script>
			window.alert("inserted!");
			window.location.href=("../views/view_comment_dashboard.php");	
		</script>
		<?php
	}
	
}

 ?>


