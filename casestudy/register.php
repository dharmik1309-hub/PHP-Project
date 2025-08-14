<?php
include 'db.php'; // Ensure your database connection is included
include 'index.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username']; 
    $email = $_POST['email']; 
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Secure password hashing

    // STEP 1: Check if the username or email already exists
    $checkQuery = "SELECT * FROM users WHERE username = ? OR email = ?";
    $stmt = $conn->prepare($checkQuery);
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Error: Username or Email already taken. Please choose another one.";
    } else {
        // STEP 2: Insert the new user if username and email are unique
        $insertQuery = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($insertQuery);
        $stmt->bind_param("sss", $username, $email, $password);

        if ($stmt->execute()) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $conn->error;
        }
    }

    $stmt->close();
    $conn->close();
}
?>



