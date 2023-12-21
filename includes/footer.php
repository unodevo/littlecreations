<style>
    /* Change link hover color */
    a:hover {
        color: pink !important;
    }

    /* Change button hover background color */
    button:hover {
        background-color: pink !important;
    }

    h5.mb-3 {
        color: pink !important;
    }
</style>



<footer class="footer py-5" style="background-color: #013220;">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center mb-5">
                <h5 class="mb-3">Social Media</h5>
                <ul class="list-unstyled d-flex justify-content-center mb-0">
                    <li><a href="#"><i class="fab fa-facebook fa-lg text-white mx-3"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram fa-lg text-white mx-3"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter fa-lg text-white mx-3"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin fa-lg text-white mx-3"></i></a></li>
                </ul>
            </div>

            <div class="col-md-3 col-sm-12 mb-3 text-center-sm">
                <h5 class="mb-3">Customer Service</h5>
                <ul class="list-unstyled">
                    <li><a href="faq.php" style="text-decoration:none; color:white;">FAQ</a></li>
                    <li><a href="delivery-info.html" style="text-decoration:none; color:white;">Delivery Information</a></li>
                    <li><a href="returns&refund.php" style="text-decoration:none; color:white;">Returns & Refunds</a>
                    </li>
                    <li><a href="contact.php" style="text-decoration:none; color:white;">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-12 mb-3 text-center-sm">
                <h5 class="mb-3">Agreements</h5>
                <ul class="list-unstyled">
                    <li><a href="terms.html" style="text-decoration:none; color:white;">Terms & Conditions</a></li>
                    <li><a href="privacy.html" style="text-decoration:none; color:white;">Privacy Policy</a></li>
                    <li><a href="Regulation.html" style="text-decoration:none; color:white;">GDPR Regulation</a></li>
                </ul>
            </div>


<div class="col-md-3 col-sm-12 text-center">
  <h5 class="mb-3">Our Newsletter</h5>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">    <div class="mb-3">
      <input type="email" class="form-control" name="email" placeholder="Email Address" required>
    </div>
    <div class="d-grid gap-2">
      <button type="submit" class="btn btn-success" style="background-color: #013220;">Subscribe</button>
    </div>
  </form>
</div>

</footer>



<?php
if(isset($_POST['email'])) {

    // EDIT THE FOLLOWING TWO LINES WITH YOUR EMAIL ADDRESS AND SUBJECT
    $to = "help@littlecreations.updevo.net";
    $subject = "New Subscriber";

    $email = $_POST['email'];

    // EDIT THE MESSAGE AS NEEDED
    $message = "New subscriber: " . $email;

    // SEND THE EMAIL
    mail($to, $subject, $message);

    // REDIRECT THE USER TO A THANK YOU PAGE
    echo "<script>window.location.href='thankyou.html';</script>";
    exit();
}
?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">