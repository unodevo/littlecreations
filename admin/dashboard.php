<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
  header('Location: ../login.php');
  exit();
}

if (isset($_POST['logout'])) {
  session_destroy();
  header('Location: ../login.php');
  exit();
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
  <style>
    .card {
      transition: transform 0.2s;
      border-radius: 10px;
      border: none;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
      height: 200px;
    }

    .card:hover {
      transform: scale(1.05);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }

    .icon {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background-color: pink;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0 auto;
      margin-top: 30px;
    }

    .icon i {
      color: white;
      font-size: 40px;
    }

    .card-title {
      text-align: center;
      margin-top: 20px;
      font-size: 1.2rem;
      font-weight: bold;
    }

    .card-body {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .btn-primary {
      margin: 0 auto;
    }

    /* Add margin-top to the container */
    .container {
      margin-top: 30px;
    }
    
    /* Media queries for smaller screens */
    @media only screen and (max-width: 768px) {
      .row.row-cols-5 .col {
        flex-basis: 100%;
        max-width: 100%;
        margin-bottom: 30px;
      }
    }
  </style>

</head>

<header class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Admin
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="../index.php">Home</a></li>
            <form method="POST">
              <button type="submit" name="logout" class="btn btn-danger">Logout</button>
            </form>

          </ul>
        </li>
      </ul>
    </div>
  </div>
</header>

<body>
  <div class="container">
    <div class="row row-cols-5">
<div class="col mb-4">
<div class="card">
<h6 class="card-title">Personal Care</h6>
<div class="icon">
<i class="fas fa-hand-holding-heart"></i>
</div>
<div class="card-body">
<a href="admin-personalcare.php" class="btn btn-primary">View Products</a>
</div>
</div>
</div>
<div class="col mb-4">
<div class="card">
<h6 class="card-title">Jewelry</h6>
<div class="icon">
<i class="fas fa-gem"></i>
</div>
<div class="card-body">
<a href="admin-jewelry.php" class="btn btn-primary">View Products</a>
</div>
</div>
</div>
<div class="col mb-4">
<div class="card">
<h6 class="card-title">Household</h6>
<div class="icon">
<i class="fas fa-home"></i>
</div>
<div class="card-body">
<a href="admin-household.php" class="btn btn-primary">View Products</a>
</div>
</div>
</div>
<div class="col mb-4">
<div class="card">
<h6 class="card-title">Users</h6>
<div class="icon">
<i class="fas fa-users"></i>
</div>
<div class="card-body">
<a href="admin-users.php" class="btn btn-primary">View Users</a>
</div>
</div>
</div>
<div class="col mb-4">
<div class="card">
<h6 class="card-title">Favorites</h6>
<div class="icon">
<i class="fas fa-heart"></i>
</div>
<div class="card-body">
<a href="admin-favorites.php" class="btn btn-primary">View favorites</a>
</div>
</div>
</div>
</div>
  </div>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
</body
</html>



