<?php
// Include the server file
$con = mysqli_connect('localhost', 'u903839165_updevo', 'LKND,Lhdk8799#', 'u903839165_updevo')
or die ("could not connect network");


$id = $_GET['GetID'];
$query = "SELECT * FROM products WHERE id='$id'";
$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $category = $row['category'];
    $title = $row['title'];
    $description = $row['description'];
    $price = $row['price'];
    $image = $row['image'];
    $quantity= $row['quantity'];
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
                        <form action="update.php?id=<?php echo $id ?>" method="post">
    <select class="form-control mb-2 form-select" name="category">
        <option value="category" disabled>Select category</option>
        <option value="household" <?php if ($category === 'household') { echo 'selected'; } ?>>
            Household</option>
        <option value="personal care"
            <?php if ($category === 'personal care') { echo 'selected'; } ?>>
            Personal Care</option>
        <option value="jewelry" <?php if ($category === 'jewelry') { echo 'selected'; } ?>>
            Jewelry
        </option>
    </select>
    <input type="text" class="form-control mb-2" name="title" placeholder="Title"
        value="<?php echo $title ?>">
    <textarea class="form-control mb-2" name="description" placeholder="Description" rows="5"><?php echo $description?></textarea>
    <input type="text" class="form-control mb-2" name="price" placeholder="Price"
        value="<?php echo $price ?>">
    <input type="number" class="form-control mb-2" name="quantity" placeholder="Quantity"
        value="<?php echo $quantity ?>">
    <input type="text" class="form-control mb-2" placeholder="image name" name="image"
        value="<?php echo $image ?>">
    <button type="submit" class="btn btn-warning" name="update">Update</button>
</form> 

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>