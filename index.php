<!DOCTYPE html>


<html lang="en">
    <head>
<meta property="og:image" content="admin/images/about.jpg">
<meta name="description" content="Little Creations offers a unique selection of handmade products including household items, personal care products, and jewelry. Our products are made with natural ingredients and high-quality materials. Shop now and find the perfect handcrafted item for your home or personal use.">
  <meta name="keywords" content="handmade products, household items, personal care products, jewelry, natural ingredients, high-quality materials">
  <meta name="author" content="Little Creations">
  <meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Favicon-->
    <link rel="shortcut icon" type="favicon.ico" href="favicon.ico" />
  <title>Little Creations - Handmade Products for Your Home and Personal Use</title>
</head>
    <link rel="stylesheet" href="css/header.css">
    
    
    <style>
    .icon {
    border-radius: 50%;
    width: 100px;
    height: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
}
    
     .bg-dark {
        position: relative;
        background: url('admin/images/header.jpg') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;

    }
    

/* cookie-banner.css */
.cookie-banner {
    display: none;
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    color: #ffffff;
    z-index: 1000;
    padding: 15px;
    font-size: 14px;
    text-align: center;
}

.cookie-banner-content {
    max-width: 1200px;
    margin: 0 auto;
}

.cookie-banner a {
    color: #ffffff;
    text-decoration: underline;
}

.accept-cookies {
    background-color: #4CAF50;
    color: #ffffff;
    border: none;
    padding: 5px 10px;
    margin-left: 10px;
    cursor: pointer;
    text-decoration: none;
}
</style>

</head>




<?php include 'includes/header.php'; ?>


<?php include 'includes/navbar.php'; ?>

<body>

    <section class="bg-dark py-5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="display-4 mb-4 text-white font-weight-bold">Little Creations</h1>
                    <h3 class="text-white">We believe that there is something special about handmade products
                        that mass-produced items simply cannot replicate. Each handmade piece is unique, with its own
                        character and charm, and carries a story that is deeply rooted in the hands that made it.</h3 class>
                    <br>
                    
                    <div class="d-grid gap-3 text-center d-sm-flex justify-content-sm-center">
                        <a href="registration.php" class="btn btn-dark btn-lg px-4 me-sm-3 ">Register</a>
                        <a href="login.php" class="btn btn-outline-light btn-lg px-4 me-sm-3">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/catalog.php'; ?>

    <div class="container my-5">
        <h4 class="text-center mb-5">Our Commitment to Sustainable and Organic Products</h4>
        <div class="row">
            <div class="col-lg-4 col-sm-4 mb-4">
                <div class="icon" style="background-color: #ffccc9;">
                    <i class="fas fa-leaf fa-3x text-white"></i>
                </div>
                <h6 class="mt-3 text-center"><strong>Sustainability</strong></h6>
                <p class="text-center">Our products are made with sustainably sourced ingredients,
                    ensuring that
                    you're
                    getting the highest quality organic skincare while also supporting a more
                    eco-friendly world.
                </p>
            </div>
            <div class="col-lg-4 col-sm-4 mb-4">
                <div class="icon" style="background-color: #ffe0b2;">
                    <i class="fas fa-seedling fa-3x text-white"></i>
                </div>
                <h6 class="mt-3 text-center"><strong>Organic</strong></h6>

                <p class="text-center">We use only organic ingredients to create products that are both
                    effective
                    and
                    safe for your body and the environment.</p>
            </div>
            <div class="col-lg-4 col-sm-4 mb-4">
                <div class="icon" style="background-color: #ff9aa2;">
                    <i class="fas fa-flask fa-3x text-white"></i>
                </div>
                <h6 class="mt-3 text-center"><strong>Technology</strong></h6>
                <p class="text-center">Our team of scientists and researchers use the latest technology
                    to create
                    products that deliver real results without harming the planet.</p>
            </div>
            <div class="col-lg-4 col-sm-4 mb-4">
                <div class="icon" style="background-color: #f3c4fb;">
                    <i class="fas fa-paw fa-3x text-white"></i>
                </div>
                <h6 class="mt-3 text-center"><strong>No Animal Testing</strong>
                </h6>

                <p class="text-center">We believe that all living beings deserve respect and kindness,
                    which is why
                    we
                    never test our products on animals.</p>
            </div>
            <div class="col-lg-4 col-sm-4 mb-4">
                <div class="icon" style="background-color: #d4e4f7;">
                    <i class="fas fa-hand-paper fa-3x text-white"></i>
                </div>
                <h6 class="mt-3 text-center"><strong>Handmade</strong> </h6>
                <p class="text-center">Each of our products is made by hand, with care and attention to
                    detail,
                    ensuring
                    that you receive a high-quality product every time.</p>
            </div>
            <div class="col-lg-4 col-sm-4 mb-4">
                <div class="icon" style="background-color: #d9ead3;">
                    <i class="fas fa-box fa-3x text-white"></i>
                </div>
                <h6 class="mt-3 text-center"><strong>Eco-Friendly Packaging</strong></h6>
                <p class="text-center">Our packaging is made from recyclable materials, so you can feel
                    good about
                    your
                    purchase and its impact on the environment.</p>
            </div>
        </div>
    </div>


    <div id="cookie-banner" class="cookie-banner">
        <div class="cookie-banner-content">
            <p>We use cookies to improve your browsing experience on our website. By continuing to use our site, you consent to our use of cookies. To learn more, please read our <a href="Cookies Policy.html">Cookie Policy</a>.</p>
            <button id="accept-cookies" class="accept-cookies">Accept</button>
        </div>
    </div>

    <!-- JavaScript for the cookie banner -->
    <script src="cookie-banner.js">
        
        
    </script>
    <!-- Include Font Awesome from CDN -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3 text-center/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3 text-center/js/all.min.js">
    </script>


    <?php include 'includes/footer.php'; ?>