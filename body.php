<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Treat your skin to a luxurious exfoliating experience with our handmade body scrubs. Our scrubs are made with high-quality ingredients and come in a variety of scents to leave your skin feeling soft and smooth.">
  <meta name="keywords" content="body scrubs, exfoliating, handmade, high-quality ingredients">
  <meta name="author" content="Little Creations">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:image" content="admin/images/b3_20.jpg">
  <title>Handmade Body Scrubs | Exfoliating with High-Quality Ingredients</title>
  <link rel="stylesheet" href="css/products.css">
</head>

<?php include 'includes/header.php'; ?>

<body>
    <?php include 'includes/navbar.php'; ?>

    <?php include 'includes/carousel.php'; ?>

    <?php
// connect to the database
$con = mysqli_connect('localhost', 'u903839165_updevo', 'LKND,Lhdk8799#', 'u903839165_updevo')
or die ("could not connect network");    $category = 'personal care'; // Only display items from the personal care category
    $itemTitle = '%body%'; // Retrieve items where the title contains the word "face"
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
                            <p class="mb-3">"I absolutely love this body cream! It's so nourishing and moisturizing. I
                                have really dry skin, and this cream keeps it feeling soft and smooth all day long.
                                Plus, it smells amazing! The scent is light and refreshing, not overpowering at all.
                                I've noticed a significant improvement in the texture of my skin since I started using
                                this cream. I highly recommend it to anyone looking for a luxurious and effective body
                                moisturizer."</p>
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
                            <p class="mb-3">"I have sensitive skin, so I'm always hesitant to try new body creams. But I
                                decided to give this one a try, and I'm so glad I did! It's so gentle and soothing, and
                                it doesn't irritate my skin at all. Plus, it's super hydrating and helps to soothe any
                                dryness or itchiness. The texture is lovely too - it's thick and creamy without feeling
                                heavy or greasy. I've been using it every day for a few weeks now and my skin feels so
                                much softer and smoother. I would definitely recommend it!"</p>
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
                            <p class="mb-3">"This body cream is my new favorite! I love how quickly it absorbs into my
                                skin, and how it leaves me feeling silky and smooth. It has a lovely light scent that
                                isn't overpowering, which is great for me since I'm sensitive to strong fragrances. I
                                also love that it's made with all natural ingredients - I feel good about using a
                                product that's good for my skin and good for the environment. I've noticed a significant
                                improvement in the texture and appearance of my skin since I started using this cream.
                                It's definitely worth the investment!"</p>
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