<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $order_id = $_POST['order_id'];
    $new_status = $_POST['status'];

    $update_query = "UPDATE orders SET status = '$new_status' WHERE order_id = $order_id";
    if (mysqli_query($conn, $update_query)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>

