<!DOCTYPE html>
<html lang="en">
    

<head>
  <style>
    /* Change button color to pink */
    .btn {
        background-color: #013220 !important;
        border-color: #013220 !important;
        color: #fff !important;
    }

    /* Change button hover color to black */
    .btn:hover {
        background-color: pink !important;
        border-color: pink !important;
        color: #fff !important;
    }

    .navbar-toggler {
        color: #fff;
        border-color: #fff !important;
    }

    .navbar {
        padding-top: 1rem;
        padding-bottom: 1rem;
        position: sticky;
        top: 0;
        z-index: 9999;
    }

    .navbar-dark {
        background-color:#013220!important;
    }

   .dropdown-menu a:hover,
.dropdown-menu a:focus {
  background-color: #013220;
  color: pink;
}

</style>

    <!-- Include Font Awesome from CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
<a class="navbar-brand" href="index.php">
  <img src="admin/images/logo3.png" alt="Little Creations Logo" height="120">
</a>            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="creators.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink1"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Household
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                            <li><a class="dropdown-item" href="candles.php">Candles</a></li>
                            <li><a class="dropdown-item" href="pillows.php">Pillows</a></li>
                            <li><a class="dropdown-item" href="vases.php">Vase</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink2"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Jewelry
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                            <li><a class="dropdown-item" href="bracelets.php">Bracelets</a></li>
                            <li><a class="dropdown-item" href="necklaces.php">Necklace</a></li>
                            <li><a class="dropdown-item" href="ring.php">Rings</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink3"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Personal Care
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                            <li><a class="dropdown-item" href="body.php">Body Cream</a></li>
                            <li><a class="dropdown-item" href="face.php">Face Cream</a></li>
                            <li><a class="dropdown-item" href="soaps.php">Soaps</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="<?php echo isset($_SESSION['username']) ? 'shopping-cart/cart.php' : 'login.php' ?>" class="btn btn-outline-light btn-sm me-2">
    <i class="fas fa-shopping-basket"></i> Cart
    <?php if (isset($_SESSION['cart'])) { ?>
        <span class="badge bg-dark"><?php echo count($_SESSION['cart']); ?></span>
    <?php } ?>
</a>

                    </li>
                    <li class="nav-item">
                        <a href="./admin-login.php" class="btn btn-outline-light btn-sm me-2">Admin</a>
                    </li>
                    <?php if (isset($_SESSION['username'])) { ?>
                    <li class="nav-item">
                        <form method="post">
                            <button type="submit" name="logout" class="btn btn-outline-light btn-sm">Logout</button>
                        </form>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
