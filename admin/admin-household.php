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


// Include the server file
require_once("server-pro.php");
?>
<?php include '../includes/admin-nav.php'; ?>

<div class="col py-3">

    <div class="container my-4">
        <h1 class="text-center">Household Inventory</h1>

        <a href="add-product.php" class="btn btn-primary my-3">Add Product</a>


        <table class="table table-striped">
            <tr>

                <th>ID</th>
                <th>Category</th>
                <th>Image</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Edit</th>
                <th>Delete</th>



            </tr>
            <tbody>
                <?php
            // Connect to the database
         
            // Check connection
         // connect to the database
$con = mysqli_connect('localhost', 'u903839165_updevo', 'LKND,Lhdk8799#', 'u903839165_updevo')
or die ("could not connect network");

            // Select all products from the products table
            $sql = "SELECT * FROM products where category = 'household'";
            $result = mysqli_query($con, $sql);
            // Loop through the result set and display the products
            while($product = mysqli_fetch_assoc($result)) {

                $id = $product['id'];
                $category = $product['category'];
                $image = $product['image'];
                $title = $product['title'];
                $description = $product['description'];
                $price = $product['price'];
                $quantity = $product['quantity'];
            
                ?>


                <td><?php echo $id ?></td>
                <td><?php echo $category ?></td>
                <td> <img style='height:130px;  width:120px' src='images/<?php echo $product ['image']; ?>'
                        alt='<?php echo $product ['image']; ?>'></td>
                <td><?php echo $title ?></td>
                <td><?php echo $description?></td>
                <td><?php echo $price?></td>
                <td><?php echo $quantity?></td>

                <td> <a class="btn btn-warning" href="edit-product.php?GetID=<?php echo $id?>">Edit</a></td>
                <td><a class="btn btn-danger" href="delete-product.php?Del=<?php echo $id?>">Delete</a> </td>


                <?php
              echo "</tr>";
            }
            // Close the database connection
            mysqli_close($con);
          ?>
            </tbody>
        </table>
    </div>


</div>
</div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>


</body>

</html>