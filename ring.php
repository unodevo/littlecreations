<!DOCTYPE html>
<html lang="en">
<html lang="en">
    <head>
  <meta charset="UTF-8">
  <meta name="description" content="Add a touch of elegance to your outfit with our beautiful collection of handmade rings. Our rings are crafted by skilled artisans using high-quality materials, and come in a variety of styles, including minimalist, bohemian, and statement pieces.">
  <meta name="keywords" content="handmade rings, artisan-made, high-quality materials, minimalist, bohemian, statement pieces">
  <meta name="author" content="Little Creations">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:image" content="admin/images/r3.jpg">
  <title>Handmade Rings | Artisan-Made with High-Quality Materials</title>
<link rel="stylesheet" href="css/products.css">
</head>

<?php include 'includes/header.php'; ?>

<body>
<?php include 'includes/navbar.php'; ?>
    <?php include 'includes/carousel.php'; ?>




    <?php
// connect to the database
$con = mysqli_connect('localhost', 'u903839165_updevo', 'LKND,Lhdk8799#', 'u903839165_updevo')
or die ("could not connect network");    $category = 'jewelry'; // Only display items from the jewelrycategory
  $category = 'jewelry'; // Only display items from the Household category
$itemTitle = '%ring%'; // Retrieve items where the title contains the word "ring"
$query = "SELECT * FROM products WHERE category='$category' AND title LIKE '$itemTitle'";
$result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) > 0) { // If there are any matching products
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
                            <p class="mb-3">"I received this white gold ring with a pearl stone as a gift from my
                                husband and I absolutely love it! The craftsmanship is impeccable, and the pearl is
                                perfectly sized and sits beautifully on my finger. I've received so many compliments on
                                it and it goes well with all of my outfits. I highly recommend this ring to anyone who
                                wants a timeless and elegant piece of jewelry."</p>
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
                            <p class="mb-3">"I purchased this white gold ring with a pearl stone for my daughter's
                                graduation gift and I couldn't be happier with my purchase. The ring is stunning and the
                                pearl has a lustrous shine to it. The band is well made and fits her finger comfortably.
                                She wears it all the time and it has become one of her favorite pieces of jewelry. This
                                ring is definitely worth the investment and will be cherished for years to come."</p>
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
                            <p class="mb-3">"I have a collection of pearl jewelry and this white gold ring is now one of
                                my favorites. The craftsmanship is outstanding, and the ring is truly a work of art. The
                                pearl is perfectly set and has a gorgeous shine to it. The white gold band is simple yet
                                elegant, making it perfect for both casual and formal occasions. I'm so glad I added
                                this ring to my collection, and I highly recommend it to anyone looking for a beautiful
                                and unique piece of jewelry."</p>
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