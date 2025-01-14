<?php
// Retrieve form data from URL parameters
$name = $_GET['name'];
$email = $_GET['email'];
$event = $_GET['event'];
$message = $_GET['message'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Submission Successful</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container my-5">
    <h3 class="text-center">Thank You for Your Submission!</h3>
    <p class="text-center">Your query has been successfully submitted. Below are the details you provided:</p>
    
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">User Information</h5>
            <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
            <p><strong>Event:</strong> <?php echo htmlspecialchars($event); ?></p>
            <p><strong>Message:</strong> <?php echo nl2br(htmlspecialchars($message)); ?></p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="text-center mt-4">
      <a href="index.html" class="btn btn-primary">Go Back to Home</a>
    </div>
  </div>
</body>
</html>
