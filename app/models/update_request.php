<?php 
session_start();
include '../../config/database.php';
$up=$_GET['request_id'];
$select=mysqli_query($connect,"SELECT * FROM requests WHERE request_id='$up'");
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
				<input type="text" name="title"value="<?php echo $row['title'] ?>" placeholder="enter your fisrt title" required>
			</div>
			<div>
				<i class="fas fa-envelope"></i>
				<input type="text" name="description" value="<?php echo $row['description'] ?>" placeholder="enter your description" required>
			</div>
			
			<div>
				<i class="fas fa-lock"></i>
				<input type="text" name="category" value="<?php echo $row['category'] ?>" placeholder="enter your category" required>
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
$up=$_GET['request_id'];
if (isset($_POST['update'])) {
	$title=$_POST['title'];
	$description=$_POST['description'];
	$category=$_POST['category'];
	$update=mysqli_query($connect,"UPDATE requests SET title='$title',description='$description',category='$category'WHERE request_id='$up'");
	if ($update) {
		?>
		<script>
			window.alert("updated!");
			window.location.href=("../views/view_request_dashboard.php")
		</script>
		<?php
	}
}

	 ?>
