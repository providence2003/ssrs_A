<?php 
session_start();
//include '../../router/web.php';
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
                <th>comment_id</th>
                <th>request_id</th>
                <th>user_id</th>
                <th>comment</th>
                <th>created_at</th>
                <th colspan="2">ACTION</th>


            </tr>
        </thead> 
        <tbody>
            <?php 
            $sql="SELECT * FROM comments";
            $result= mysqli_query($connect,$sql);
            while ($row=mysqli_fetch_array($result)) {
                ?>

                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['request_id'] ?></td>
                    <td><?php echo $row['user_id'] ?></td>
                    <td><?php echo $row['comment'] ?></td>
                    <td><?php echo $row['created_at'] ?></td>
                    <td><a href="../models/delete_comment.php?id=<?php echo $row['id'] ?>" onclick="return confirm('are you want to delete')">Delete</a></td>
                    <td><a href="../models/update_comment.php?id=<?php echo $row['id'] ?>" onclick="return confirm('are you want to update')">Update</a></td>
                </tr>
                    
            </tbody>
                <?php
                }
                 ?>
            </tbody>
        </table>


  
</body>
</html>