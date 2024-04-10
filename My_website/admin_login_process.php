<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the username and password are correct (dummy credentials for demonstration)
    $admin_username = "JPS";
    $admin_password = "JPS123";

    if ($_POST["username"] == $admin_username && $_POST["password"] == $admin_password) {
        // Authentication successful, redirect to admin dashboard
        $_SESSION["admin_logged_in"] = true;
        header("Location: admin_dashboard.php");
        exit;
    } else {
        // Authentication failed, redirect back to login page with error message
        $_SESSION["login_error"] = "Invalid username or password";
        header("Location: admin_login.php");
        exit;
    }
}
?>