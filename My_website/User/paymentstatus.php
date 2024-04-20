<!-- HEADER SECTION STARTS -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Project</title>
</head>
<!-- font awesome css link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- main css file -->
<link rel="stylesheet" href="../CSS/project.css">
<!-- <link rel="stylesheet" href="CSS/bootstrap.min.css"> -->

<!--font-generator-->
<link rel="stylesheet" href="https://tools.picsart.com/text/font-generator/">
<!-----font-style link-->
<link rel="stylesheet" href="https://tools.picsart.com/text/font-generator/">

<!-----link of owl carousel--------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />




<body>


    <!------HEADER SECTION STARTS-->

    <header class="header">
        <!-- <img src="IMAGE_FOLDER/logo.png" alt=""> -->
        <a href="#" class="logo">𝕷𝖊𝖆𝖗𝖓𝖎𝖓𝖌 𝖜𝖎𝖙𝖍 𝖒𝖊!</a>

        <nav class="navbar">
            <a href="../index.php">
                Home
            </a>

            <a href="courses.php">
            Courses
            </a>
            <a href="paymentstatus.php">
                Payment status
            </a>
            <a href="#review">
            Review
            </a>
            <a href="contact.php">
            Contact
            </a>
            <a href="#My profile">
            My profile
            </a>
            <a href="#Logout">
            Logout
            </a>
            <a href="login.php">
            Login
            </a>
             <a href="registration.php">
            Register
            </a>
        
        </nav>

        <div class="menu-btn">
            <span></span>
        </div>
    </header>
    <!------header section ends-------->

<!-- HEADER SECTION ENDS-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Status Form</title>
  <link rel="stylesheet" href="../CSS/payment.css">
</head>
<body>
    <form action="" method="post">
        <div class="container">
            <h2>Payment Status</h2>
            <form id="paymentForm">
            <label for="transactionID">Transaction ID/Order Id :-</label>
            <input type="text" id="transactionID" name="transactionID" required>

            <button type="submit" value="View">Submit</button>
            </form>
        </div>
    </form>   
</body>
</html>




<!--FOOTER SECTION STARTS  -->

<?php
include('./footer.php');
?> 
<!--FOOTER SECTION ENDS-->
