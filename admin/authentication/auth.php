<?php
session_start();

// Only allow admin users
if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: login.php"); // redirect to login if not logged in
    exit;
}
?>
