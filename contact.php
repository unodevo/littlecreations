<head>
  <meta charset="UTF-8">
  <meta name="description" content="Contact us to learn more about our handmade products or to place an order. We're here to help you find the perfect item for your needs.">
  <meta name="keywords" content="contact us, handmade products, place an order, customer service">
  <meta name="author" content="Little Creations">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | Little Creations Handmade Products</title>
</head>
<?php include 'includes/header.php'; ?>


<?php include 'includes/nav.php'; ?>

<body>

<style>
    .contact-icon i:hover {
      color: white!important;
    }
    
     /* Change link hover color */
    a:hover {
        color: pink !important;
    }
    
     @media (max-width: 767px) {
         
      .row {
        flex-direction: column;
      }
      .col-md-6 {
        margin-bottom: 30px;
        margin-top:30px;
      }
    }
  </style>
<section class="hero-section" style="background-image: url('admin/images/form1.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover; padding: 50px 0;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 position-relative">
        <div class="position-absolute top-50 start-50 translate-middle" style="z-index: 1; text-align: center; color: black;">
         
           <h1 class="mb-4 mb-md-0">Contact Us</h1>
          <p class="mb-4 mb-md-0">Have a question or feedback? We'd love to hear from you!</p>
          
        </div>
      </div>
      <div class="col-md-6">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="subject">Subject:</label>
            <input type="text" class="form-control" id="subject" name="subject" required>
          </div>
          <div class="form-group">
            <label for="message">Message:</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="subscribe" name="subscribe">
            <label class="form-check-label" for="subscribe">Subscribe to our newsletter</label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>






  <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
      // Get form data and sanitize input
      $name = test_input($_POST["name"]);
      $email = test_input($_POST["email"]);
      $subject = test_input($_POST["subject"]);
      $message = test_input($_POST["message"]);
      $subscribe = isset($_POST["subscribe"]) ? "Yes" : "No";
      
      // Set up email
      $to = "help@littlecreations.updevo.net"; // Replace with your Hostinger email
      $subject = "New message from Contact Us form";
      $headers = "From: " . $email . "\r\n";
      $headers .= "Reply-To: " . $email . "\r\n";
      $headers .= "Content-Type: text/html\r\n";
      $message_body = "<strong>Name:</strong> " . $name . "<br>";
      $message_body .= "<strong>Email:</strong> " . $email . "<br>";
      $message_body .= "<strong>Subject:</strong> " . $subject . "<br>";
      $message_body .= "<strong>Message:</strong> " . $message . "<br>";
      $message_body.= "<strong>Subscribe to newsletter:</strong> " . $subscribe . "<br>";
        // Send email
  if(mail($to, $subject, $message_body, $headers)) {
    echo "<div class='alert alert-success' role='alert'>Your message has been sent successfully!</div>";
  } else {
    echo "<div class='alert alert-danger' role='alert'>Sorry, there was an error sending your message. Please try again later.</div>";
  }
}

// Function to sanitize input data
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<section class="contact-section" style="background-color: #14A19C;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4 col-sm-12">
        <div class="contact-item text-center">
          <div class="contact-icon" style="margin-top: 10px;">
            <i class="bi bi-envelope" style="font-size: 2em; font-weight: bold; color: pink;"></i>
          </div>
          <h4 style="margin-top: 10px; color: pink;">Email</h4>
          <p style="color: white;">help@littlecreations.updevo.net</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-12">
        <div class="contact-item text-center">
          <div class="contact-icon" style="margin-top: 10px;">
            <i class="bi bi-telephone" style="font-size: 2em; font-weight: bold; color: pink;"></i>
          </div>
          <h4 style="margin-top: 10px; color: pink;">Phone</h4>
          <p style="color: white;"> +44 0289275869</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-12">
        <div class="contact-item text-center">
          <div class="contact-icon" style="margin-top: 10px;">
            <i class="bi bi-geo-alt" style=" font-size: 2em; font-weight: bold; color: pink;"></i>
          </div>
          <h4 style="margin-top: 10px; color: pink;">Address</h4>
          <p style="color: white;">Princess St Main,EH2<br> Edinburgh, UK</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- Bootstrap Icons (Latest version) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

</body>
</html>
