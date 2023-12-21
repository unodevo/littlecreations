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



if (!isset($_SESSION['admin_id'])) {
  header('Location: login.php');
  exit();
}


// Include the server file
require_once("server-user.php");
?>
<?php include '../includes/admin-nav.php'; ?>


<div class="col py-3">

    <div class="container my-4">
        <h1 class="text-center">Current Users</h1>

        <a href="add-user.php" class="btn btn-primary my-3">Add new user</a>


        <table class="table table-striped">
            <tr>

                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Edit</th>
                <th>Delete</th>



            </tr>
            <tbody>
                <?php
            // Connect to the database
         
            while($user = mysqli_fetch_assoc($result)) {
                $id = $user['id'];
                $username = $user['username'];
                $email = $user['email'];
                $password = $user['password'];
            ?>
                <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $username?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $password ?></td>
                    <td><a class="btn btn-warning" href="edit-user.php?GetID=<?php echo $id?>">Edit</a></td>
                    <td><a class="btn btn-danger" href="delete-user.php?Del=<?php echo $id?>">Delete</a>
                    </td>
                </tr>
                <?php
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