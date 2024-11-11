<!-- admin/auth.php -->
<?php
session_start();

function isAdmin() {
    return isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;
}

if (!isAdmin() && basename($_SERVER['PHP_SELF']) !== 'login.php') {
    header('Location: login.php');
    exit();
}
?>
