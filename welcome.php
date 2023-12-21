
<!DOCTYPE html>
<html lang="en">
<style>
    .card-title {
        font-size: 1.2rem;
        font-weight: bold;
        color: #333;
    }

    .card-text {
        font-size: 1rem;
        color: #555;
    }

   .pink-heading {
        color: #013220;
    }

 
</style>


<?php include 'includes/header.php'; ?>
<body>
<?php include 'includes/nav.php'; ?>




    <div class="container my-5">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div
                class="user-avatar rounded-circle border border-3 border-grey d-flex justify-content-center align-items-center">
                <img src="admin/images/user.jpg" alt="User avatar" class="rounded-circle" width="50" height="50">
            </div>
            <div class="text-center mt-2">
                <p class="card-text">You are logged in as: <strong><?php echo $username;?></strong></p>
            </div>
        </div>
    </div>


    <div class="container mt-5">

        <h1 class="text-center mb-5">Product Catalog List</h1>
        <?php
$con = mysqli_connect('localhost', 'u903839165_updevo', 'LKND,Lhdk8799#', 'u903839165_updevo')
or die ("could not connect network");
$categories = array('Household', 'Jewelry', 'Personal Care');
    foreach ($categories as $category) {
  ?>
        <div class="row justify-content-center">
            <h2 class="mb-4"><?php echo $category; ?></h2>
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
                        <p class="card-text">$<?php echo $price; ?></p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <form method="post" action="add-tofavorite.php">
                            <input type="hidden" name="product_id" value="<?php echo $id; ?>">
                            <button type="submit" class="btn btn-outline-danger me-2"><i class="bi bi-heart-fill"></i>
                                Add
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


    <?php include 'includes/footer.php'; ?>