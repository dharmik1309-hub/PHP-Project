<?php
session_start();

// Show success message if order was placed
if (isset($_SESSION['order_success'])) {
    echo "<script>alert('Order placed successfully!');</script>";
    unset($_SESSION['order_success']); // Remove session variable after showing
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brewhaven</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to CSS file -->
    <script src="script.js" defer></script> <!-- Link to JavaScript -->
    
    <style>
   /* Hover Effect on Menu */
.myclass:hover {
    background-color: #8e44ad; /* Rich purple */
    color: #f9f9f9; /* Soft off-white */
    font-size: 32px;
    border-radius: 10px;
    padding: 10px;
    text-decoration: underline;
    transition: all 0.3s ease-in-out;
}

li {
    padding: 20px;
}

/* Hover Effect for Menu Images */
.menu-item img {
    transition: transform 0.3s ease-in-out;
}

.menu-item:hover img {
    transform: scale(1.1); /* Zoom Effect */
}

/* Site Credits */
.site-credits {
    background: linear-gradient(90deg, #6a1b9a, #ab47bc, #8e44ad);
    color: #f0e9ff;
    text-align: center;
    padding: 15px;
    font-size: 22px;
    font-weight: 700;
    letter-spacing: 2px;
    border-radius: 8px;
    animation: gradientShift 6s ease infinite;
    box-shadow: 0 4px 12px rgba(107, 33, 143, 0.6);
    user-select: none;
    background-size: 200% 200%;
}

/* Header */
header {
    background: linear-gradient(135deg, #7b3fbf, #ab47bc 60%, #6a1b9a);
    color: #f0e9ff;
    box-shadow: 0 4px 10px rgba(107, 33, 143, 0.5);
}

/* Navigation links and buttons */
.myclass a,
.myclass button {
    color: #fafafa;
    font-weight: 700;
    transition: color 0.3s ease, background-color 0.3s ease;
}

.myclass a:hover,
.myclass button:hover {
    color: #4a007e;
    background-color: #d39cff;
    box-shadow: 0 0 10px #d39cff;
}

/* Menu Preview Section */
.menu-preview {
    background-color: #f4e6ff;
    border-radius: 12px;
    box-shadow: 0 6px 18px rgba(171, 71, 188, 0.25);
    color: #5a2a7e;
}

.menu-preview h2 {
    color: #6a1b9a;
    font-weight: 900;
}

.menu-preview p {
    color: #804ca1;
}

.menu-btn {
    background-color: #9c46c4;
    color: white;
    box-shadow: 0 6px 15px rgba(156, 70, 196, 0.7);
}

.menu-btn:hover {
    background-color: #7839a4;
    box-shadow: 0 8px 20px rgba(120, 57, 164, 0.8);
}

/* Footer */
footer {
    background: linear-gradient(135deg, #7b3fbf, #ab47bc);
    color: #f0e9ff;
    box-shadow: 0 -4px 12px rgba(107, 33, 143, 0.6);
}

/* Gradient Animation Keyframes */
@keyframes gradientShift {
    0% {background-position: 0% 50%;}
    50% {background-position: 100% 50%;}
    100% {background-position: 0% 50%;}
}

    </style>
</head>
<body>
  <div class="site-credits">
    Website Created By Dharmik Barot & Divya Bhatia
</div>
    <!-- Header with Navigation -->
    <header>
        <div class="logo">BrewHaven</div>
        <br>
        
        <nav>
            <ul>
                <li class="myclass"><a href="index.php">Home</a></li>
                <li class="myclass"><a href="menu.php">Menu</a></li>
                <li class="myclass"><a href="order.php">Order</a></li> <!-- Updated to avoid broken links -->
                <li class="myclass"><a href="contact.php">Contact</a></li>
                <li class="myclass"><button class="open-modal">Register</button></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <section class="hero">
        
    </section>

    <!-- Menu Preview -->
    <section class="menu-preview">
        <h2>Our Menu</h2>
        <p>Explore our wide range of coffee and desserts.</p>
        <a href="menu.php" class="menu-btn">View Menu</a>
    </section>

    

    <!-- Registration Modal -->
    <div class="modal" id="register-modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Register</h2>
            <form action="register.php" method="POST">
                <input type="username" name="username" placeholder="Username" required>
                <input type="email" name="email" placeholder="Email Address" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Register</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>© 2025 Brewhaven. All rights reserved.</p>
        
    </footer>

</body>
</html>



