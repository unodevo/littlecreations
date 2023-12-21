<!DOCTYPE html>
<html lang="en">
    <head>
  <meta charset="UTF-8">
  <meta name="description" content="Light up your life with our selection of beautiful scented candles. Our range of candles includes a variety of scents to create a warm and inviting atmosphere in your home.">
  <meta name="keywords" content="candles, scented candles, candle scents, home decor, ambiance">
  <meta name="author" content="Your Name">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:image" content="admin/images/c2.jpg">
  <title>Candle Scents | Shop Beautiful Scented Candles Online</title>
     <link rel="stylesheet" href="css/products.css">
</head>

 

<?php include 'includes/header.php'; ?>

<body>
    <?php include 'includes/navbar.php'; ?>

    <?php include 'includes/carousel.php'; ?>



<?php
// connect to the database
$con = mysqli_connect('localhost', 'u903839165_updevo', 'LKND,Lhdk8799#', 'u903839165_updevo')
or die ("could not connect network");

$category = 'Household'; // Only display items from the Household category
$itemTitle = '%candle%'; // Retrieve items where the title contains the word "candle"
$query = "SELECT * FROM products WHERE category='$category' AND title LIKE '$itemTitle'";
$result = mysqli_query($con, $query);

if(mysqli_num_rows($result) > 0) { // If there are any matching products
    // Your code to display the products goes here

?>
 <div class="row justify-content-center">
    <?php while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $title = $row['title'];
        $description = $row['description'];
        $price = $row['price'];
        $image = $row['image'];
    ?>
    <div class="col-md-4 col-sm-12 my-4">
        <div class="card h-100" style="margin: 0 10px;">
            <img src="admin/images/<?php echo $image; ?>" class="card-img-top mx-auto mt-4" alt="<?php echo $image; ?>">
            <div class="card-body text-center">
                <h1 class="card-title"><?php echo $title; ?></h1>
                <p class="card-text"><?php echo $description; ?></p>
                <p class="card-text font-weight-bold">$<?php echo $price; ?></p>
                <form action="shopping-cart/add-to-basket.php" method="post">
                    <div class="mb-3">
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" class="form-control" value="1" min="1" max="10" style="width: 50px;">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-outline-primary btn-sm me-2"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                    <a href="pro.php?product_id=<?php echo $id; ?>" class="btn btn-dark">View Product</a>
                    </div>
                    <input type="hidden" name="product_id" value="<?php echo $id; ?>">
                </form>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
<?php } else { // If there are no matching products ?>
<div class="alert alert-info">No matching products found.</div>
<?php } ?>



    <section class="reviews">
        <div class="container">
            <h2 class="text-center mb-5">Product Reviews</h2>

            <div class="row justify-content-center">
                <div class="col-md-4 col-sm-12">
                    <div class="review text-center">
                        <div class="avatar  mx-auto zoom-out">
                            <img src="admin/images/1.jpg" alt="User Avatar" class="rounded-circle">
                        </div>
                        <div class="content mt-4">
                            <h4 class="mb-3">Emma Smith</h4>
                            <div>
                                <p>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star-half-alt text-warning"></i>
                                    <span class="ms-2"></span>
                                </p>
                            </div>
                            <p class="mb-3">"I absolutely love Scentences candles! The
                                fragrances are so unique and
                                truly transport me to another place. My favorite scent
                                is the
                                lavender and sage, it's so
                                calming and refreshing at the same time. These candles
                                burn
                                evenly and last a long time,
                                making them the perfect addition to my home."</p>
                            <p><small class="text-muted">Reviewed on August 9,
                                    2022</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="review text-center">
                        <div class="avatar  mx-auto zoom-in">
                            <img src="admin/images/2.jpg" alt="User Avatar" class="rounded-circle">
                        </div>
                        <div class="content mt-4">
                            <h4 class="mb-3">Sophie Taylor</h4>
                            <div>
                                <p>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star-half-alt text-warning"></i>
                                    <span class="ms-2"></span>
                                </p>
                            </div>
                            <p class="mb-3">"As a candle fanatic, I have to say that
                                Scentences
                                candles are some of the
                                best I've ever tried. The scents are perfectly balanced
                                and not
                                overpowering, which is a
                                problem I've had with other candle brands. I especially
                                love the
                                citrus and basil scent,
                                it's so invigorating and uplifting. I highly recommend
                                these
                                candles to anyone who loves
                                candles as much as I do!"</p>
                            <p><small class="text-muted">Reviewed on June 10,
                                    2022</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="review text-center">
                        <div class="avatar  mx-auto zoom-out">
                            <img src="admin/images/3.jpg" alt="User Avatar" class="rounded-circle">
                        </div>
                        <div class="content mt-4">
                            <h4 class="mb-3">Jessica Johnson</h4>
                            <div>
                                <p>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star-half-alt text-warning"></i>
                                    <span class="ms-2"></span>
                                </p>
                            </div>
                            <p class="mb-3">"As a candle fanatic, I have to say that
                                Scentences
                                candles are some of the
                                best I've ever tried. The scents are perfectly balanced
                                and not
                                overpowering, which is a
                                problem I've had with other candle brands. I especially
                                love the
                                citrus and basil scent,
                                it's so invigorating and uplifting. I highly recommend
                                these
                                candles to anyone who loves
                                candles as much as I do!"</p>
                            <p><small class="text-muted">Reviewed on June 10,
                                    2022</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <?php include 'includes/footer.php'; ?>
</body>

</html>