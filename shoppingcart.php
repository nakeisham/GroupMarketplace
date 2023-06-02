ini_set('display_errors', 1);
<?php
// Start session
session_start();

// Connect to the database
$connect = mysqli_connect('localhost', 'njm55_groupuser', 'Jj?CPYz!6Op5', 'njm55_GroupMarketplace');

// Check if add-to-cart parameter exists in the URL
if(isset($_GET['add-to-cart'])){
    $product_id = $_GET['add-to-cart'];

    // Fetch the product from the database
    $sql = "SELECT * FROM product WHERE productid=?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("i", $product_id); 
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        $product = $result->fetch_assoc();

        // Add the product to the cart (or increment the quantity if it already exists)
        if(isset($_SESSION['cart'][$product_id])){
            $_SESSION['cart'][$product_id]['quantity']++;
        } else {
            $_SESSION['cart'][$product_id] = array(
                'name' => $product['productname'],
                'price' => $product['price'],
                'quantity' => 1
            );
        }
    }
}

// Check if remove-from-cart parameter exists in the URL
if(isset($_GET['remove-from-cart'])){
    $product_id = $_GET['remove-from-cart'];

    // Remove the product from the cart
    if(isset($_SESSION['cart'][$product_id])){
        unset($_SESSION['cart'][$product_id]);
    }
}

// Update quantities based on form submission
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    foreach($_POST['quantity'] as $product_id => $quantity){
        if(is_numeric($quantity) && $quantity > 0){
            $_SESSION['cart'][$product_id]['quantity'] = $quantity;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Your Shopping Cart</h1>

    <form action="shoppingcart.php" method="post">
        <?php
        if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0){
            foreach($_SESSION['cart'] as $product_id => $item){
                echo '
                <div class="cart-item">
                    <h2>'.$item['name'].'</h2>
                    <input type="number" name="quantity['.$product_id.']" value="'.$item['quantity'].'">
                    <p>Price: £'.$item['price'].'</p>
                    <p>Total: £'.($item['price'] * $item['quantity']).'</p>
                    <a href="shoppingcart.php?remove-from-cart='.$product_id.'">Remove</a>
                </div>
                ';
            }
            echo '<input type="submit" value="Update Quantities">';
        } else {
            echo '<p>Your cart is empty.</p>';
        }
        ?>
    </form>
</body>
</html>

