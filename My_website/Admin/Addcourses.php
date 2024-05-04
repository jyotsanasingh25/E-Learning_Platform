<?php
include('./adminheader.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Course</title>
  <style>
    /* Styling for the form */
body {
  font-family: Arial, sans-serif;
  background-color: #f1f1f1;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh; /* Changed height to min-height for better responsiveness */
}

.container {
  background-color: #225470;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);
  padding: 50px 20px; /* Adjusted padding for better spacing */
  max-width: 600px;
  width: 100%;
  margin-top:30px;
}

h2 {
  color: #ffff;
  margin-bottom: 20px; /* Added margin-bottom for better separation */
}

input[type="text"],
input[type="number"],
textarea {
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 4px;
  outline: none;
  resize: vertical; /* Added resize property for textarea */
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 0;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 100%;
  font-size: 16px;
  transition: background-color 0.3s;
}

input[type="Close"] {
  background-color: red;
  color: white;
  padding: 10px 0;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 100%;
  font-size: 16px;
  transition: background-color 0.3s;
}

input[type="submit"]:hover {
  background-color: #45a049;
}
input[type="Close"] {
  background-color: red;
  color: white;
  padding: 10px 260px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 100%;
  font-size: 16px;
  transition: background-color 0.3s;
}

input[type="Close"]:hover {
  background-color: #8b0000;
}

input[type="Close"]:hover {
  background-color: red;
}

label {
  color: #333;
  font-weight: bold;
  margin-bottom: 6px;
  display: block;
  text-align: left;
}

  </style>
</head>
<body>

<div class="container">
  <h2>Add Course</h2>

  <form action="AdminDBconnection.php" method="POST" enctype="multipart/form-data">
    <label for="title">Course Id:</label>
    <input type="text" id="id" name="id" required>

    <label for="title">Course Title:</label>
    <input type="text" id="title" name="title" required>

    <label for="description">Course Description:</label>
    <textarea id="text" name="description" rows="4" required></textarea>

    <label for="instructor">Author</label>
    <input type="text" id="author" name="author" required>

    <label for="duration">Course Duration (in hours):</label>
    <input type="number" id="duration" name="duration" required>

    <label for="original">Course Original price</label>
    <input type="text" id="original" name="original" required>

    <label for="Selling">Selling price</label>
    <input type="text" id="Selling" name="Selling" required>

    <label for="image">Upload image</label>
    <input type="file" id="Image" name="Image">
    

    <a href=""> <input type="submit" value="Submit"></a>

    <a href="admin_dashboard.php"> <input type="Close" value="Close"></a>

  </form>
</div>

</body>
</html>
