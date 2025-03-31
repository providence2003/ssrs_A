<?php 
session_start();
include '../../config/database.php';
$del=$_GET['response_id'];
$delete=mysqli_query($connect,"DELETE FROM responses WHERE response_id='$del'");
if ($delete) {
	?>
	<script>
		window.alert("deleted!");
		window.location.href=("../views/view_admin_response_dashboard.php");
	</script>
	<?php
}


 ?>