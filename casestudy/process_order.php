<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store success message in session
    $_SESSION['order_success'] = true;

    // Redirect back to home page
    header("Location: index.php");
    exit();
}
?>


