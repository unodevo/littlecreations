<?php 
// Include the server file
require_once("server-user.php");



$id = $_GET['GetID'];
$query = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($result)) {
$username = $row['username'];
$email = $row['email'];
$password = $row['password'];

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</head>

<body class="bg-light">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h3 class="bg-warning text-white text-center py-3">Edit Product</h3>
                    </div>
                    <div class="card-body">
                        <form action="update-user.php?id=<?php echo $id ?>" method="post">

                            <input type="text" class="form-control mb-2" name="username" placeholder="username"
                                value="<?php echo $username ?>">
                            <input type="text" class="form-control mb-2" name="email" placeholder="email"
                                value="<?php echo $email ?>">
                            <input type="text" class="form-control mb-2" placeholder="password" name="password"
                                value="<?php echo $password ?>">
                            <button type="submit" class="btn btn-warning" name="update">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>