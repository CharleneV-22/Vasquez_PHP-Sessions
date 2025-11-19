<?php
session_start();

$cart = $_SESSION["cart"] ?? [];
?>
<h2>Your Cart</h2>

<?php if (empty($cart)): ?>
    <p>Your cart is empty.</p>
<?php else: ?>
    <ul>
        <?php foreach ($cart as $item => $qty): ?>
            <li><?php echo $item . " — Quantity: " . $qty; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<a href="products.php">Continue Shopping</a>
<br><br>
<a href="clear_cart.php">Clear Cart</a>
