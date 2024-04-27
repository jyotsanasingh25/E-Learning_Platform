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
      height: 100vh;
    }
    .container {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);
      padding-top: 50px;
      max-width: 700px;
      width: 100%;
      text-align: center;
    }
    h2 {
      color: #333;
    }
    input[type="text"],
    input[type="number"],
    textarea {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
      outline: none;
    }
    textarea {
      height: 100px;
    }
    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
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

  <form action="/submit_course" method="POST">
    <label for="title">Course Title:</label>
    <input type="text" id="title" name="title" required>

    <label for="description">Description:</label>
    <textarea id="description" name="description" rows="4" required></textarea>

    <label for="instructor">Instructor:</label>
    <input type="text" id="instructor" name="instructor" required>

    <label for="duration">Duration (in hours):</label>
    <input type="number" id="duration" name="duration" required>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
