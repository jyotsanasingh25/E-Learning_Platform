<?php

$User = $_POST['username'];
$password = $_POST['password'];

$conn = new mysqli('localhost', 'root', '', 'lms_db');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
        // Prepared statement for insertion
        $stmt = $conn->prepare("INSERT INTO admin_details(User_name , Passward) VALUES (?, ?)");
        
        // Check if statement preparation was successful
        if ($stmt === false) {
            die("Error in preparing statement: " . $conn->error);
        }


        $stmt->bind_param("ss", $User , $password);
        if ($stmt->execute()) {
            echo "Registration Successful!";
        } else {
            echo "Error: " . $stmt->error;
        }

         // Close the statement and database connection
         $stmt->close();
         $conn->close();
     }

?>