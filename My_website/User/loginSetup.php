<?php
session_start();

// Retrieve form data
$stuemail = $_POST['email'];
$stuPass = $_POST['password'];

// Establish database connection
$conn = new mysqli('localhost', 'root', '', 'lms_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // Prepare and execute SQL query to fetch user with the given email and password
    $stmt = $conn->prepare("SELECT * FROM student WHERE Stu_email = ? AND Stu_Pass = ?");
    $stmt->bind_param("ss", $stuemail, $stuPass);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if there's a matching user
    if ($result->num_rows == 1) {
        // User found, set session variables and redirect to dashboard
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['Stu_ID'];
        $_SESSION['username'] = $row['Stu_Name'];
        header("Location: ../index.php");
        exit();
    } else {
        // No user found, redirect back to login page with error message
        $_SESSION['error'] = "Invalid email or password!";
        header("Location: login.php");
        exit();
    }
}

// Close the statement and database connection
$stmt->close();
$conn->close();
?>
