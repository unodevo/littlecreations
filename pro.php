<?php
session_start();

// Valid request, retrieve product details from the database
$con = mysqli_connect('localhost', 'u903839165_updevo', 'LKND,Lhdk8799#', 'u903839165_updevo') or die("Could not connect to the database");

$product_id = $_GET['product_id'];
$query = "SELECT * FROM products WHERE id=$product_id";
$result = mysqli_query($con, $query);

// Check if product exists
if (mysqli_num_rows($result) == 0) {
    // Product does not exist, show error message
    echo "Error: Product not found";
    exit();
}

// Product exists, get product details
$row = mysqli_fetch_assoc($result);
$id = $row['id'];
$category = $row['category'];
$title = $row['title'];
$description = $row['description'];
$price = $row['price'];
$image = $row['image'];

?>

<style>
    .navbar {
        padding-top: 1rem;
        padding-bottom: 1rem;
        position: sticky;
        top: 0;
        z-index: 9999;
    }

    .navbar-dark {
        background-color: #013220 !important;
    }

    .dropdown-menu a:hover,
    .dropdown-menu a:focus {
        background-color: lightgrey;
    }

    .btn-custom {
        background-color: #e4b4c4 !important;
        border-color: white !important;
        color: #fff !important;
    }

    .btn-custom:hover {
        background-color: #a76d8a !important;
        border-color: white !important;
        color: #fff !important;
    }

    .pink-heading {
        color: #013220;
    }

    .bg-nude-pink {
        background-color: #013220 !important;
        /* Set background color to nude natural pink */
        color: white !important;
        /* Set text color to white */
    }

    .badge.bg-secondary {
        background-color: #F4B1B9;
        color: #6B2737;
        text-transform: uppercase;
    }
</style>

<body>

    <?php include 'includes/header.php'; ?>

    <body>
        <?php include 'includes/navbar.php'; ?>


        <!-- Product Details -->
        <div class="container mt-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <h2 class="mb-6 badge text-uppercase bg-nude-pink text-white badge-lg"><?php echo $category; ?></h2>

                    <div class="card h-100 border-0">
                        <img class="card-img-top img-fluid rounded" src='admin/images/<?php echo $image; ?>'
                            alt='<?php echo $image; ?>'>

                        <div class="card-body">

                            <div class="mt-4">
                                <h5>Product Ratings:</h5>
                                <p>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star-half-alt text-warning"></i>
                                    <span class="ms-2">4.5 stars</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <div class="card h-100 border-0">
                        <div class="card-body">
                            <h1 class="card-title"><?php echo $title; ?></h1>

                            <p class="card-text"><?php echo $description; ?></p>
                            <p class="card-text">$<?php echo $price; ?></p>

                            <form action="shopping-cart/add-to-basket.php" method="post">
                                <div class="mb-3">
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" id="quantity" name="quantity" class="form-control" value="1"
                                        min="1" max="10" style="width: 50px;">
                                </div>

<button type="submit" class="btn btn-sm btn-custom" <?php echo (!isset($_SESSION['username'])) ? 'onclick="showLoginPrompt(); return false;"' : ''; ?>>
    <i class="fas fa-shopping-cart"></i> Add to Cart
</button>

<script>
    function showLoginPrompt() {
        if (confirm("Please login before adding items to the cart. Do you want to login now?")) {
            window.location.href = "login.php";
        }
    }
</script>


                                <a href="index.php" class="btn btn-sm btn-custom">Continue Shopping</a>


                                <input type="hidden" name="product_id" value="<?php echo $id; ?>">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>

    </html>

   
    <?php include 'includes/footer.php'; ?>
    <!-- jQuery and Bootstrap 5 JavaScript -->