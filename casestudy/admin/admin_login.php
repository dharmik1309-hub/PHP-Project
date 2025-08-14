<?php
session_start();
include "db_connection.php"; // Ensure this file contains your database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Debugging: Display entered values (remove this after testing)
    echo "Username: $username <br>";
    echo "Password: $password <br>";

    // SQL Query to check login
    $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['admin_username'] = $row['username'];
        header("Location: admin_panel.php"); // Redirect to admin panel
        exit();
    } else {
        echo "<script>alert('Invalid username or password'); window.location.href='admin_login.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <form method="post" action="">
        <label>Username:</label>
        <input type="text" name="username" required>
        <br>
        <label>Password:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>

