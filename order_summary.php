<?php
    $food = $_POST['food'];
    $quantity = $_POST['quantity'];
    $cash = $_POST['cash'];
    
    $prices = array(
        "burger" => 50,
        "hotdog" => 70,
        "softdrinks" => 30
    );
    
    $total_cost = $prices[$food] * $quantity;
    
    $change = $cash - $total_cost;
    
    echo "<h1>Receipt:</h1>";
    echo "<h2>You ordered: $food</h2>";
    echo "<h3>Quantity: $quantity</h3>";
    echo "<h3>The total cost is: ₱$total_cost</h3>";
    echo "<h3>Your change is: ₱$change</h3>";
    echo "<p>Thank you for your order!</p>";
?>