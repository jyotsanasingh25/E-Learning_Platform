<?php
    // Retrieve form data
    $stuname = $_POST['username'];
    $stuemail = $_POST['email']; // Corrected typo in variable name
    $stuPass = $_POST['password'];
    $stuC_Pass = $_POST['confirm_password'];
    $stuAddress = $_POST['address'];

    // Establish database connection
    $conn = new mysqli('localhost', 'root', '', 'lms_db');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        // Prepared statement for insertion
        $stmt = $conn->prepare("INSERT INTO student(Stu_Name, Stu_email, Stu_Pass, confirm_pass, address) VALUES (?, ?, ?, ?, ?)");
        
        // Check if statement preparation was successful
        if ($stmt === false) {
            die("Error in preparing statement: " . $conn->error);
        }
        
        // Bind parameters and execute the statement
        $stmt->bind_param("sssss", $stuname, $stuemail, $stuPass, $stuC_Pass, $stuAddress);
        if ($stmt->execute()) {
                include('./regissucc.php');
                
        } else {
            echo "Error: " . $stmt->error;
        }
        
        // Close the statement and database connection
        $stmt->close();
        $conn->close();
    }
?>
