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

	<title>request page</title>
	<link rel="stylesheet" type="text/css" href="../../public/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<header class="sidebar">
        <div class="container">
            
            <h2><?php echo 'Welcome:  '.$_SESSION['name']; ?></h2>
            <nav>
                 <a href="../models/view_comment_form.php">Add comment</a><br><br><br>
                <a href="view_response_dashboard.php">view Responses </a><br><br><br>
                <a href="view_user_dashboard.php">view_user_dashboard</a><br><br><br>
                <a href="add_response.php">add_response</a><br><br><br>
               <!--- <a href="#user">Edit_userimfomation</a>-->
                <a href="view_request.php" class="btn">Create New Request</a><br><br><br>
                <a href="../../auth/logout.php">Logout</a>
            </nav>
        </div>
    </header> <br><br>
	<form method="POST" action="../models/admin_response_insert.php">
		<label>request_id</label>
           <select name="request_id" user_id="option">
            <option>...choose request_id...</option>
            <?php 
            include '../../config/database.php';
            $select=mysqli_query($connect,"SELECT * FROM requests");
            while ($fetch=mysqli_fetch_array($select)) {
                            ?>
            <option value="<?php echo $fetch['request_id'] ?>"><?php echo $fetch['request_id'] ?><?php echo $fetch['title'] ?></option>
            <?php
                 }
                ?>
                        
                    </select>
                    <label>user_id</label>
        <select name="user_id" user_id="option">
            <option>......choose user_id...</option>
            <?php 
            include '../../config/database.php';
            $select=mysqli_query($connect,"SELECT * FROM users");
            while ($fetch=mysqli_fetch_array($select)) {
                            ?>
            <option value="<?php echo $fetch['user_id'] ?>"><?php echo $fetch['user_id'] ?><?php echo $fetch['name'] ?><?php echo $fetch['role'] ?></option>
            <?php
                 }
               	?>
                        
                    </select>
        <textarea name="response_message" ></textarea>
        
        <input type="submit" name="send"value="send">

		
	</form>


</body>
</html><!--(id, user_id, title, , category, status (pending/resolved), created_at