
<?php 
session_start();
include '../../config/database.php';
if (!$_SESSION['name'] ) {
	echo "<script> window.location.replace('view_login.php?') </script>";
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>user dashboard page</title>
	<link rel="stylesheet" type="text/css" href="../../public/assets/css/style.css">
</head>
<body>
	<header class="sidebar">
        <div class="container">
            
            <h2><?php echo 'Welcome:  '.$_SESSION['name']; ?></h2>
            <nav>
                <a href="../models/view_comment_form.php">Add comment</a><br><br><br>
                <a href="view_response_dashboard.php">view Responses </a><br><br><br>
               <!--- <a href="#user">Edit_userimfomation</a>-->
                <a href="view_request.php" class="btn">Create New Request</a><br><br><br>
                <a href="../../auth/logout.php">Logout</a>
            </nav>
        </div>
    </header> <br><br>
   
    <table border="1"id="user">
		<thead>
			<tr>
				<th>REQUEST ID</th>
				<th>USERS ID</th>
				<th>TITLE</th>
				<th>DESCRIPTION</th>
				<th>CATEGORY</th>
				<th>status</th>
				<th>CREATED AT</th>
				<th colspan="2">ACTION</th>


			</tr>
		</thead>
		<tbody>
			<?php 
			$sql="SELECT * FROM requests";
			$result= mysqli_query($connect,$sql);
			while ($row=mysqli_fetch_array($result)) {
				?>

				<tr>
					<td><?php echo $row['request_id'] ?></td>
					<td><?php echo $row['user_id'] ?></td>
					<td><?php echo $row['title'] ?></td>
					<td><?php echo $row['description'] ?></td>
					<td><?php echo $row['category'] ?></td>
					<td><?php echo $row['status'] ?></td>
					<td><?php echo $row['created_at'] ?></td>
					<td><a href="../models/delete_request.php?request_id=<?php echo $row['request_id'] ?>" onclick="return confirm('are you want to delete')">Delete</a></td>
					<td><a href="../models/update_request.php?request_id=<?php echo $row['request_id'] ?>" onclick="return confirm('are you want to update')">Update</a></td>
				</tr>
					
			</tbody>
				<?php
				}
				 ?>
			</tbody>
		</table>

  
</body>
</html>