<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Pamper your skin with our luxurious handmade face creams. Our creams are made with high-quality ingredients and come in a variety of formulas to nourish and hydrate your skin.">
  <meta name="keywords" content="face cream, skincare, handmade, high-quality ingredients">
  <meta name="author" content="Little Creations">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:image" content="admin/images/face2.jpg">
  <title>Handmade Face Cream | Nourishing Skincare with High-Quality Ingredients</title>
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
    $itemTitle = '%face%'; // Retrieve items where the title contains the word "face"
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
                            <p class="mb-3">"I recently started using the natural product eye cream and I am amazed at
                                how it has transformed my under-eye area. The cream is packed with natural ingredients
                                that have improved the texture and tone of my skin. My dark circles have visibly reduced
                                and the fine lines around my eyes have softened. It feels light and refreshing on my
                                skin and is easily absorbed. I highly recommend this eye cream to anyone looking for a
                                natural and effective anti-aging solution"</p>
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
                            <p class="mb-3">"I have tried numerous eye creams over the years and none have impressed me
                                as much as this natural product eye cream. The cream is formulated with natural
                                ingredients that work together to nourish and hydrate the delicate skin around my eyes.
                                I have noticed a significant improvement in the appearance of my fine lines and wrinkles
                                since I started using this cream. It's gentle and has not caused any irritation to my
                                sensitive skin. I am very happy with the results and would recommend it to anyone
                                looking for a natural anti-aging eye cream"</p>
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
                            <p class="mb-3">"This natural product eye cream is truly a game-changer. The cream has a
                                rich, luxurious texture that feels indulgent on the skin. The formula is packed with
                                natural ingredients like shea butter and jojoba oil that have left my under-eye area
                                looking brighter and more youthful. I love that it's free of harsh chemicals and
                                synthetic fragrances, and the fact that it's handmade adds to its appeal. I would highly
                                recommend this eye cream to anyone who wants a natural and effective anti-aging solution
                                for their under-eye area"</p>
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