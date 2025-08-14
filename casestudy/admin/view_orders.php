<?php
include('../config.php'); // Ensure this file contains the correct database connection

$query = "SELECT * FROM orders"; 
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: black;
            color: white;
        }
        .warning {
            color: red;
            font-weight: bold;
        }
        a {
            text-decoration: none;
            padding: 5px 10px;
            margin: 5px;
        }
        .edit {
            color: blue;
        }
        .delete {
            color: red;
        }
    </style>
</head>
<body>

    <h2>Order Management</h2>

    <table>
        <tr>
            <th>Order ID</th>
            <th>Customer Name</th>
            <th>Menu Item</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>

        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            // Check if 'id' exists in the array before using it
            $order_id = isset($row['order_id']) ? $row['order_id'] : 'N/A';

            ?>
            <tr>
                <td><?php echo $order_id; ?></td>
                <td><?php echo htmlspecialchars($row['customer_name']); ?></td>
                <td><?php echo htmlspecialchars($row['menu_item']); ?></td>
                <td><?php echo htmlspecialchars($row['quantity']); ?></td>
                <td>$<?php echo number_format($row['total_price'], 2); ?></td>
                <td><?php echo htmlspecialchars($row['status']); ?></td>
                <td>
                    <?php if ($order_id !== 'N/A') { ?>
                
                        <td>
                        <td>
    <a href='edit_order.php?id=<?php echo $row['order_id']; ?>' style='color:blue;'>Edit</a> |  
    <a href='delete_order.php?id=<?php echo $row['order_id']; ?>' style='color:red;' onclick="return confirm('Are you sure you want to delete this order?');">Delete</a>
</td>

</td>

                        
                    <?php } else { ?>
                        <span class="warning">No ID</span>
                    <?php } ?>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>




    

