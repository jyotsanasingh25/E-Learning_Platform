<?php
    // Retrieve form data
    $course_id =$_POST['id'];
    $Course_name = $_POST['title'];
    $description = $_POST['description']; // Corrected typo in variable name
    $author = $_POST['author'];
    $duration = $_POST['duration'];
    $original_price = $_POST['original'];
    $selling_price = $_POST['Selling'];
    $course_img = $_FILES['Image']['name'];

    $course_img_temp = $_FILES['Image']['tmp_name'];
    $img_folder = '../IMAGE_FOLDER/courseimg/'.$course_img;
    move_uploaded_file($course_img_temp,$img_folder);
    
    // Establish database connection
    $conn = new mysqli('localhost', 'root', '', 'lms_db');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        // Prepared statement for insertion
        $stmt = $conn->prepare("INSERT INTO add_courses(Course_id,Course_name, Description, Author, Duration, Orignal_price, Selling_price, Course_img) VALUES (?, ?, ?, ?, ?,?,?,?)");
        
        // Check if statement preparation was successful
        if ($stmt === false) {
            die("Error in preparing statement: " . $conn->error);
        }
        
        // Bind parameters and execute the statement
        $stmt->bind_param("ssssssss",  $course_id,$Course_name, $description, $author, $duration, $original_price ,$selling_price,$course_img);
        if ($stmt->execute()) {
                // include('./regissucc.php');
                echo "Add successFully";
                
        } else {
            echo "Error: " . $stmt->error;
        }
        
        // Close the statement and database connection
        $stmt->close();
        $conn->close();
    }
?>
