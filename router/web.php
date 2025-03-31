<?php 
// Routes/web.php
if ($_SERVER['REQUEST_URI'] == '/login') {
    include 'auth/login.php';
} elseif ($_SERVER['REQUEST_URI'] == '/logout') {
    include 'auth/logout.php';
} elseif ($_SERVER['REQUEST_URI'] == '/user/dashboard') {
    include 'app/views/view_user_dashboard.php';
} elseif ($_SERVER['REQUEST_URI'] == '/admin/dashboard') {
    include 'app/views/view_admin_dashboard.php';
}


 ?>