<?php 
session_start();
include '../../config/database.php';
$up=$_GET['id'];
$select=mysqli_query($connect,"SELECT * FROM comments WHERE id='$up'");
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
                <input type="text" name="request_id"value="<?php echo $row['request_id'] ?>" placeholder="update your fisrt requiredid" required>
            </div>
            <div>
                <i class="fas fa-envelope"></i>
                <input type="text" name="user_id" value="<?php echo $row['user_id'] ?>" placeholder="update your user id" required>
            </div>
            
            <div>
                <i class="fas fa-lock"></i>
                <input type="text" name="comment" value="<?php echo $row['comment'] ?>" placeholder="update your comment" required>
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
$up=$_GET['id'];
if (isset($_POST['update'])) {
    $request_id=$_POST['request_id'];
    $user_id=$_POST['user_id'];
    $comment=$_POST['comment'];
    $update=mysqli_query($connect,"UPDATE comments SET request_id='$request_id',user_id='$user_id',comment='$comment'WHERE id='$up'");
    if ($update) {
        ?>
        <script>
            window.alert("updated!");
            window.location.href=("../views/view_comment_dashboard.php")
        </script>
        <?php
    }
}

     ?>
