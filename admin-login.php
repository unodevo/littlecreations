<?php
session_start();

if (isset($_POST['logout'])) {
  session_destroy();
  header('Location: login.php');
  exit();
}



// connect to the database
$con = mysqli_connect('localhost', 'u903839165_updevo', 'LKND,Lhdk8799#', 'u903839165_updevo')
or die ("could not connect network");

// check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // retrieve the username and password from the form
  $username = $_POST['username'];
  $password = $_POST['password'];

  // retrieve the admin credentials from the database
  $stmt = $con->prepare("SELECT id, password FROM admin WHERE username = ?");
  $stmt->bind_param('s', $username);
  $stmt->execute();
  $stmt->store_result();
  $stmt->bind_result($admin_id, $admin_password);
  $stmt->fetch();

  // check if the username exists and the password is correct
  if ($stmt->num_rows > 0 && $password === $admin_password) {
    // set the admin id in the session
    $_SESSION['admin_id'] = $admin_id;

    // redirect to the admin dashboard
    header('Location: admin/dashboard.php');
    exit();
  } else {
    // display an error message
    $error_message = 'Invalid username or password.';
  }
}

// create a new admin account
$username = 'admin';
$password = 'password123';
$stmt = $con->prepare("INSERT INTO admin (username, password) VALUES (?, ?)");
$stmt->bind_param('ss', $username, $password);
$stmt->execute();

// display the login form
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin access</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
  <!-- Include Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css" rel="stylesheet">

</head>
<div class="container">
  <div class="row justify-content-center align-items-center vh-100">
    <div class="col-md-6 col-lg-5">
      <div class="card">
        <div class="card-body p-5">
          <div class="mb-3 d-flex justify-content-center">
            <span class="bi bi-person-circle rounded-circle fs-1 mb-3"></span>
          </div>
          <h5 class="text-center mb-3">Admin Login</h5>
          <form method="POST">
            <div class="mb-3">
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person"></i></span>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
              </div>
            </div>
            <div class="mb-3">
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                  required>
              </div>
            </div>
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <?php if (isset($error_message)) { ?>
            <div class="alert alert-danger mt-3" role="alert">
              <?php echo $error_message; ?>
            </div>
            <?php } ?>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>