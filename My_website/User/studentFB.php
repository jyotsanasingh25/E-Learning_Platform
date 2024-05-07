

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback Form</title>
  <link rel="stylesheet" href="../CSS/studentFB.css">
</head>
<body>
  <div class="container">
    <h2>Feedback Form</h2>
    <form action="Feedback_Logic.php" method="POST">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php ?>"required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>
      </div>
    <a href="FeeddBack_SuccessFull.php"><button type="submit"name="submitfeedbackbtn">Submit</button></a>

    </form>
  </div>
</body>
</html>
