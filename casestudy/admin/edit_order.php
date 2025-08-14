<?php
// Include database connection
include('../config.php'); 

// Check if 'id' is set in the URL
if (isset($_GET['id'])) {
    $order_id = $_GET['id'];

    // Query to fetch order details
    $query = "SELECT * FROM orders WHERE order_id = $order_id";  // Ensure 'order_id' matches your DB column
    $result = mysqli_query($conn, $query);

    if ($result) {
        $order = mysqli_fetch_assoc($result);
    } else {
        echo "Error fetching order details!";
        exit;
    }
} else {
    echo "Invalid request!";
    exit;
}

// Update order when form is submitted
if (isset($_POST['update'])) {
    $status = $_POST['status'];

    $update_query = "UPDATE orders SET status='$status' WHERE order_id=$order_id";
    if (mysqli_query($conn, $update_query)) {
        header("Location: view_orders.php?success=Order Updated");
        exit;
    } else {
        echo "Error updating order!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Order</title>
</head>
<body>
    <h2>Edit Order</h2>

    <form method="POST">
        <label>Customer Name:</label>
        <input type="text" value="<?= $order['customer_name'] ?>" disabled><br>

        <label>Menu Item:</label>
        <input type="text" value="<?= $order['menu_item'] ?>" disabled><br>

        <label>Quantity:</label>
        <input type="number" value="<?= $order['quantity'] ?>" disabled><br>

        <label>Total Price:</label>
        <input type="text" value="<?= $order['total_price'] ?>" disabled><br>

        <label>Status:</label>
        <select name="status">
            <option value="Pending" <?= ($order['status'] == 'Pending') ? 'selected' : '' ?>>Pending</option>
            <option value="Completed" <?= ($order['status'] == 'Completed') ? 'selected' : '' ?>>Completed</option>
        </select><br>

        <button type="submit" name="update">Update Order</button>
    </form>

    <a href="view_orders.php">Back to Orders</a>
</body>
</html>
