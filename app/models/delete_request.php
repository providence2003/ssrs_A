<?php 
session_start();
include '../../config/database.php';
$del=$_GET['request_id'];
$delete=mysqli_query($connect,"DELETE FROM requests WHERE request_id='$del'");
if ($delete) {
	?>
	<script>
		window.alert("deleted!");
		window.location.href=("../views/view_request_dashboard.php");
	</script>
	<?php
}


 ?>