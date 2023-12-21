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
        <h1 class="text-center">Favorite Items of All Users</h1>

        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Title</th>
                <th>Price</th>
                <th>Image</th>
            </tr>
            <tbody>
                <?php
                // Connect to the database
$con = mysqli_connect('localhost', 'u903839165_updevo', 'LKND,Lhdk8799#', 'u903839165_updevo')
or die ("could not connect network");
                // Retrieve all the favorites from the database
                $query = "SELECT * FROM favorites";
                $result = mysqli_query($con, $query);

                // Loop through the result set and display the favorite items
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $username = $row['username'];
                        $title = $row['title'];
                        $price = $row['price'];
                        $image = $row['image'];
            ?>
                <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $username ?></td>
                    <td><?php echo $title ?></td>
                    <td>$<?php echo $price ?></td>
                    <td><img style='height:130px; width:120px' src='../admin/images/<?php echo $image; ?>'
                            alt='<?php echo $image; ?>'></td>
                </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='5' class='text-center'>There are no favorite items yet.</td></tr>";
                }

                // Close the database connection
                mysqli_close($con);
            ?>
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
</body>

</html>