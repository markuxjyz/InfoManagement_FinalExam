<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals: Part 2</title>
</head>
<body>
<h1>Welcome to the Burgel Stand! Here are the prices:</h1>
    <ul>
        <li>Burger - ₱50</li>
        <li>Hotdog - ₱70</li>
        <li>Softdrinks - ₱30</li>
    </ul>
    <form action="order_summary.php" method="post">
        <label for="food">Choose your order:</label>
        <select name="food" id="food">
            <option value="burger">Burger</option>
            <option value="hotdog">Hotdog</option>
            <option value="softdrinks">Softdrinks</option>
        </select><br><br>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" min="1"><br><br>
        <label for="cash">Cash payment:</label>
        <input type="number" name="cash" id="cash" min="0"><br><br>
        <input type="submit" value="Place Order">
        <a href="logout.php">Logout</a>
    </form>

</body>
</html>