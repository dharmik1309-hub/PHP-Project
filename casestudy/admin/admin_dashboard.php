<?php
session_start();
include("db_connection.php"); // Include the database connection file

// Check if the admin is logged in
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit();
}

// Fetch orders from the database
$query = "SELECT * FROM orders ORDER BY order_id DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css"> <!-- Add your CSS file -->
</head>
<body>
    <h2>Admin Dashboard</h2>
    <h3>Customer Orders</h3>
    
    <table border="1">
        <tr>
            <th>Order ID</th>
            <th>Customer Name</th>
            <th>Menu Item</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Status</th>
        </tr>

        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['order_id']}</td>
                    <td>{$row['customer_name']}</td>
                    <td>{$row['menu_item']}</td>
                    <td>{$row['quantity']}</td>
                    <td>{$row['total_price']}</td>
                    <td>{$row['status']}</td>
                </tr>";
        }
        ?>
    </table>

    <br>
    <a href="logout.php">Logout</a>
</body>
</html>
