
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

<body>
<div class="container mt-5">
    <h1 class="text-center mb-5">Product Catalog List</h1>
    <h2 class="text-center mb-5"> Discover Our Wide Range of Handmade and Organic Products</h2>
    <?php
    // connect to the database
$con = mysqli_connect('localhost', 'u903839165_updevo', 'LKND,Lhdk8799#', 'u903839165_updevo')
or die ("could not connect network");
    $categories = array('Household', 'Jewelry', 'Personal Care');
    foreach ($categories as $category) {
  ?>
    <div class="row justify-content-center">

<div class="max-w-lg mx-auto">
  <div class="jumbotron py-5" style="background: pink; background-size: cover; color:#013220;">
    <div class="container">
      <h1 class="mb-0"><?php echo $category; ?></h1>
    </div>
  </div>
</div>



        <?php

      $query = "SELECT * FROM products WHERE category='$category'";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $title = $row['title'];
        $price = $row['price'];
        $image = $row['image'];
    ?>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card h-100">
                <img class="card-img-top img-fluid rounded" src='admin/images/<?php echo $image; ?>'
                    alt='<?php echo $image; ?>' style="height: 300px;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $title; ?></h5>
<p class="card-text" style="font-weight: bold;">$<?php echo $price; ?></p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <form method="post" action="add-tofavorite.php">
                        <input type="hidden" name="product_id" value="<?php echo $id; ?>">
                        <button type="submit" class="btn btn-outline-danger me-2"><i class="bi bi-heart-fill"></i> Add
                            to Favorites</button>

                    </form>


                    <a href="pro.php?product_id=<?php echo $id; ?>" class="btn btn-dark">View Product</a>
                </div>

            </div>
        </div>
        <?php } ?>
    </div><!-- close row -->
    <?php } ?>
</div><!-- close container -->
