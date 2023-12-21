<!DOCTYPE html>
<?php
unset($_SESSION['cart']);
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Thank You for Subscribing</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-8uG6UJ2XZ+V6/NCxhG8PvPuK6+uuc7HwWA6GzU6vJU6QoY6hc09fTQKW8HYvTnGptqFrcCugbl4k4hu1vLzX9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+V7QLZ75T/KvYI6QqFgR3i/ERdkBZl"
    crossorigin="anonymous">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: white;
    }
    .container {
      max-width: 90%;
      margin: 0 auto;
     
      color: green;
      text-align: center;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px #000;
    }
    h2 {
      font-weight: bold;
      font-size: 2.5rem;
      margin-bottom: 20px;
    }
    p {
      font-size: 1.5rem;
      margin-bottom: 30px;
    }
   
    
    .check-image {
  display: block;
  margin: 0 auto;
  max-width: 200px;
  height: auto;
}

  </style>
</head>

<body>
    
   
<div class="container">
    <div class="text-center mt-5 mb-5 pt-5">
        <img src="/admin/images/check.jpg" alt="check.jpg" class="check-image">
        <h1 class="mb-5 pb-5">Payment Successful</h1>
    <p>Thank you for your purchase! Your delivery will be sent in the next 3 days.</p>
        <a href="/index.php" class="btn btn-primary mt-3">Go back to home</a>
</div>





  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
    integrity="sha384-4OWVzg6mGm4Qa3Y1XlmBLVzTttkeSv7RcT6VEynRAK0eBU+lAbeVvZmh0WZQ0Xjb"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+V7QLZ75T/KvYI6QqFgR3i/ERdkBZl"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/yourkitid.js" crossorigin="anonymous"></script>
</body>
</html>
