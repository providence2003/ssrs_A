<?php 
session_start();
include '../../config/database.php';
include '../../router/web.php';
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
                <a href="view_admin_response_dashboard.php">view Responses </a><br><br><br>
                <a href="view_user_admin_dashboard.php">view_user_dashboard</a><br><br><br>
                <a href="add_response.php">add_response</a><br><br><br>
               <!--- <a href="#user">Edit_userimfomation</a>-->
                <a href="view_request.php" class="btn">view Request</a><br><br><br>
                <a href="../../auth/logout.php">Logout</a>
            </nav>
        </div>
    </header> <br><br>
   
    <table border="1"id="user">
		<thead>
			<tr>
				<th>USERS ID</th>
				<th>USERS NAME</th>
				<th>EMAIL</th>
				<th>PASSWORD</th>
				
				<th>CREATED AT</th>
				<th colspan="2">ACTION</th>


			</tr>
		</thead>
		<tbody>
			<?php 
			$sql="SELECT * FROM users";
			$result= mysqli_query($connect,$sql);
			while ($row=mysqli_fetch_array($result)) {
				?>

				<tr>
					<td><?php echo $row['user_id'] ?></td>
					<td><?php echo $row['name'] ?></td>
					<td><?php echo $row['email'] ?></td>
					<td><?php echo $row['password'] ?></td>
					<td><?php echo $row['created_at'] ?></td>
					<td><a href="../models/delete_user_admin.php?user_id=<?php echo $row['user_id'] ?>" onclick="return confirm('are you want to delete')">Delete</a></td>
					<td><a href="../controllers/update_user_admin.php?user_id=<?php echo $row['user_id'] ?>" onclick="return confirm('are you want to update')">Update</a></td>
				</tr>
					
			</tbody>
				<?php
				}
				 ?>
			</tbody>
		</table>

  
</body>
</html>