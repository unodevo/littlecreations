<?php
session_start();

if(isset($_SESSION['username'])) {
    // User is already logged in, redirect to home page
    header("Location: welcome.php");
    exit();
}

if(isset($_POST['submit'])) {
    // Get form data
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // TODO: Validate form data
    // ...

    // Connect to database
// connect to the database
$con = mysqli_connect('localhost', 'u903839165_updevo', 'LKND,Lhdk8799#', 'u903839165_updevo')
or die ("could not connect network");
    // Check if username exists in database and retrieve hashed password
    $check_username_query = "SELECT * FROM users WHERE username = '$username'";
    $check_username_result = mysqli_query($con, $check_username_query);
    if(mysqli_num_rows($check_username_result) > 0) {
        $row = mysqli_fetch_assoc($check_username_result);
        $hashed_password = $row['password'];
        // Validate password
        if($password == $hashed_password) {
            // Password is correct, set session variables and redirect to welcome page
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $row['user_id'];
            header("Location: welcome.php");
            exit();
        } else {
            $error_message = "Invalid password.";
        }
    } else {
        $error_message = "Invalid username.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
       html, body {
            height: 100%;
            margin: 0;
            background: url('/admin/images/about.jpg') no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        h1 {
            text-align: center;
            margin-top: 50px;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        label {
            font-weight: bold;
        }

        input[type="submit"] {
            background-color: #007bff;
            border: none;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0069d9;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-6">
                <h1 class="text-center mt-5">Login</h1>

                <?php if(isset($error_message)) { ?>
                <p class="text-danger text-center"><?php echo $error_message; ?></p>
                <?php } ?>

                <form method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="d-grid gap-2">
                        <input type="submit" name="submit" value="Login" class="btn btn-primary">
                    </div>
                </form>
                <p class="text-center mt-3">Don't have an account? <a href="registration.php">Register here</a>.</p>
            </div>
        </div>
    </div>
    
     
     <script>
    window.onload = function() {
        var url = new URL(window.location.href);
        var success = url.searchParams.get("success");
        if(success) {
            alert("Registration successful! you can now log in.");
        }
    };
    </script>
    
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js"></script>
</body>
</html>

