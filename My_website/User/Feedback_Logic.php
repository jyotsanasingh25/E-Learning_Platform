<?php
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email']; // Corrected typo in variable name
    $message = $_POST['message'];
    
    
    // Establish database connection
    $conn = new mysqli('localhost', 'root', '', 'lms_db');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        // Prepared statement for insertion
        $stmt = $conn->prepare("INSERT INTO  feedback( Name , Email,Message) VALUES (?, ?, ?)");
        
        // Check if statement preparation was successful
        if ($stmt === false) {
            die("Error in preparing statement: " . $conn->error);
        }
        
        // Bind parameters and execute the statement
        $stmt->bind_param("sss", $name, $email, $message);
        if ($stmt->execute()) {
                include('./FeedBack_SuccessFull.php');
                
        } else {
            echo "Error: " . $stmt->error;
        }
        
        // Close the statement and database connection
        $stmt->close();
        $conn->close();
    }
?>
