<?php 
session_start();
include '../../config/database.php';
if (isset($_POST['send'])) {
	$title=$_POST['title'];
	$description=$_POST['description'];
	$category=$_POST['category'];

	$insert=mysqli_query($connect,"INSERT INTO requests(title,description,category) values('$title','$description','$category')");
	if ($insert) {
		?>
		<script>
			window.alert("inserted!");
			window.location.href=("../views/view_request_dashboard.php")
		</script>
		<?php
	}
	
}

 ?>


