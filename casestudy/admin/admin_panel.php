<?php
session_start();
if (!isset($_SESSION['admin_username'])) {
    header("Location: admin_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <h2>Welcome, Admin</h2>
    <a href="logout.php">Logout</a>
    <a href="view_orders.php">View Orders</a>

</body>
</html>
