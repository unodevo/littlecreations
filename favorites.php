<?php
session_start();

if (isset($_POST['logout'])) {
    unset($_SESSION['username']);
    unset($_SESSION['cart']);
    header('Location: login.php');
    exit;
}

// Check if user is logged in
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    // Connect to the database
    $con = mysqli_connect('localhost', 'u903839165_updevo', 'LKND,Lhdk8799#', 'u903839165_updevo')
    or die ("could not connect network");

    // Check if a product should be removed from the favorites
    if (isset($_POST['product_id'])) {
        $product_id = $_POST['product_id'];
        $query = "DELETE FROM favorites WHERE username='$username' AND id=$product_id";
        mysqli_query($con, $query);
    }

    // Retrieve the current user's favorites from the database
    $query = "SELECT * FROM favorites WHERE username='$username'";
    $result = mysqli_query($con, $query);

} else {
    header('Location: login.php');
    exit;
}
?>

<?php include 'includes/header.php'; ?>

<body>
  <?php include 'includes/nav.php'; ?>

  <div class="container mt-5">
    <h1 class="text-center mb-5">My Favorites items list</h1>

    <div class="row">
      <?php
      // Display the user's favorite products
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          $title = $row['title'];
          $price = $row['price'];
          $image = $row['image'];
          $product_id = $row['product_id'];
      ?>
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top img-fluid rounded" src='admin/images/<?php echo $image; ?>'
            alt='<?php echo $image; ?>' style="height: 200px;">
          <div class="card-body">
            <h5 class="card-title"><?php echo $title; ?></h5>
            <p class="card-text">$<?php echo $price; ?></p>
          </div>
          <div class="card-footer">
            <form method="post">
              <input type="hidden" name="product_id" value="<?php echo $id; ?>">
              <button type="submit" class="btn btn-outline-danger"><i class="bi bi-heart-fill"></i> Remove from
                Favorites</button>
            </form>
          </div>
        </div>
      </div>
      <?php
        }
      } else {
        echo "<p class='text-center'>You haven't added any favorites yet.</p>";
      }
      ?>
    </div><!-- close row -->
  </div><!-- close container -->

  <?php include 'includes/footer.php'; ?>
</body>
