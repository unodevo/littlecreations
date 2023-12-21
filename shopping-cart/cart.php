<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // User is not logged in. Redirect them to the login page
    header('Location: login.php');
    exit;
}

// Get the username from the session
$username = $_SESSION['username'];


// Check if the form has been submitted to update cart quantities
if(isset($_POST['update_quantity'])) {
    // Connect to the database
    $con = mysqli_connect('localhost', 'u903839165_updevo', 'LKND,Lhdk8799#', 'u903839165_updevo') or die("could not connect network")
        or die ("could not connect network");
    
    foreach($_POST['quantity'] as $product_id => $quantity) {
        // Ensure the quantity is a positive integer
        $quantity = max(0, intval($quantity));
        
        // If the quantity is zero, remove the item from the cart
        if($quantity == 0) {
            unset($_SESSION['cart'][$product_id]);
        }
        else {
            // Otherwise, update the quantity in the cart
            $_SESSION['cart'][$product_id]['quantity'] = $quantity;
            
            // Update the quantity in the database
            $query = "UPDATE items SET quantity = $quantity WHERE id = $product_id";
            mysqli_query($con, $query);
        }
    }
}

$total = 0;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Shopping Cart</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>

<body>
   
        
        <div class="container">
        <h1 class="mt-3 mb-3">Shopping Cart</h1>
           <H3>Welcome, <?php echo $username; ?></H3>
<a href="<?php echo isset($_SESSION['username']) ? '../welcome.php' : '../index.php'; ?>" class="btn btn-primary">Continue Shopping</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($_SESSION['cart'])) {
    // Connect to the database
    $con = mysqli_connect('localhost', 'u903839165_updevo', 'LKND,Lhdk8799#', 'u903839165_updevo') or die("could not connect network")
        or die ("could not connect network");

    foreach($_SESSION['cart'] as $product_id => $item) {
        $subtotal = $item['price'] * $item['quantity'];
        $total += $subtotal;
?>
                <tr>
                    <td><?php echo $item['title']; ?></td>
                    <td><img src="/admin/images/<?php echo $item['image']; ?>" alt="<?php echo $item['image']; ?>"
                            width="100" height="100"></td>

                    <td>$<?php echo number_format($item['price'], 2); ?></td>
                    <td>

                        <form method="POST" action="cart.php">
                            <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                            <input type="number" name="quantity[<?php echo $product_id; ?>]"
                                value="<?php echo $item['quantity']; ?>" min="1">
                            <button type="submit" name="update_quantity" class="btn btn-sm btn-primary">Update</button>
                        </form>
                    </td>
                    <td>$<?php echo number_format($subtotal, 2); ?></td>
                    <td>
                        <form method="post" action="handle_cart.php">
                            <input type="hidden" name="remove_item" value="<?php echo $product_id; ?>">
                            <button type="submit" class="btn btn-danger">Remove</button>

                        </form>
                    </td>

                    <?php
}
}
?>
            </tbody>
            <tfoot>
                <tr>

                    <td colspan="3" align="right"><strong>Total</strong> </td>
                    <td><strong>$<?php echo number_format($total, 2); ?></strong></td>
                    <td>
                        <div id="paypal-button-container"></div>
                    </td>

                </tr>
            </tfoot>
        </table>
    </div>
</body>
<script
    src="https://www.paypal.com/sdk/js?client-id=AYhTdioAcHJHAfzDyiNdPcnMxMXssw_g8v7I8WGk3BksHNe4D8k49AaM-rPlrRQuxxkAdGuAcQgpyVLu&currency=USD">
</script>

<script>
    // Set the amount to charge
    const amount = '<?php echo $total; ?>';

    // Render the PayPal button into #paypal-button-container
    paypal.Buttons({
        style: {
            layout: 'horizontal'
        },
        createOrder: function (data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: amount
                    }
                }]
            });
        },
   onApprove: function (data, actions) {
            return actions.order.capture().then(function (details) {
                alert('Transaction completed by ' + details.payer.name.given_name + '!');
                // Call your server to save the transaction
                return fetch('/path/to/save/transaction', {
                    method: 'post',
                    headers: {
                        'content-type': 'application/json'
                    },
                    body: JSON.stringify({
                        orderID: data.orderID,
                        transaction: details
                    })
                });
            });
        }
    }).render('#paypal-button-container');
</script>

</html>