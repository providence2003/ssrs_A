<?php 
session_start();
include '../../config/database.php';
$del=$_GET['id'];
$delete=mysqli_query($connect,"DELETE FROM comments WHERE id='$del'");
if ($delete) {
	?>
	<script>
		window.alert("deleted!");
		window.location.href=("../views/view_comment_dashboard.php");
	</script>
	<?php
}


 ?>