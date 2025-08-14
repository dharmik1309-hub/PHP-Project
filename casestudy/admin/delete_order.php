<?php
include('../config.php'); // Make sure this file contains the database connection

if (isset($_GET['id'])) {
    $order_id = $_GET['id']; // Get the order ID from the URL
    
    // Use order_id instead of id in the query
    $query = "DELETE FROM orders WHERE order_id = ?";
    
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $order_id); // Bind the order_id as an integer
    
    if ($stmt->execute()) {
        // Redirect back with a success message
        header("Location: view_orders.php?success=Order Deleted");
        exit();
    } else {
        // Redirect back with an error message
        header("Location: view_orders.php?error=Failed to Delete Order");
        exit();
    }
}
?>



