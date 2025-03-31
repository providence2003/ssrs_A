<?php 
session_start();
include '../../config/database.php';
$del=$_GET['user_id'];
$delete=mysqli_query($connect,"DELETE FROM users WHERE user_id='$del'");
if ($delete) {
	?>
	<script>
		window.alert("deleted!");
		window.location.href=("../views/view_user_dashboard.php");
	</script>
	<?php
}


 ?>