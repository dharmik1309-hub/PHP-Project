<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders - Brewhaven</title>
    <link rel="stylesheet" href="style.css">
    <style>
  
header, footer {
    padding: 10px 30px;
     background: linear-gradient(135deg, #7b3fbf, #ab47bc 60%, #6a1b9a);
}

.order {
    padding: 30px 20px;
    min-height: auto;
}

.order h2 {
    margin-bottom: 20px;
}

form button {
    margin-top: 15px;
}


    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <header>
        <nav>
            <div class="logo">Brewhaven</div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="order.php">Orders</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <div style="clear: both;"></div>
        </nav>
    </header>

    <!-- Order Form Section -->
    <section class="order">
        <h2>Order Your Coffee</h2>
        <form action="process_order.php" method="POST">
            <label>Name:</label>
            <input type="text" name="name" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Address:</label>
            <input type="text" name="address" required>

            <label>Coffee Selection:</label>
            <select name="coffee" required>
                <option value="Espresso">Espresso - ₹349</option>
                <option value="Cappuccino">Cappuccino - ₹129</option>
                <option value="Latte">Latte - ₹249</option>
                <option value="Mocha">Mocha - ₹439</option>
                <option value="Americano">Americano - ₹545</option>
                <option value="Matcha Latte">Matcha Latte - ₹645</option>
                <option value="Cheesecake">Cheesecake - ₹350</option>
                <option value="Butter Croissant">Butter Croissant - ₹645</option>
            </select>

            <button type="submit">Place Order</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Brewhaven. All Rights Reserved.</p>
    </footer>

</body>
</html>
