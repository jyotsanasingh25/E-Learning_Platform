<!-- HEADER SECTION STARTS -->
<?php
include('./header.php');
?>
<!-- HEADER SECTION ENDS-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Status Form</title>
  <link rel="stylesheet" href="CSS/payment.css">
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
