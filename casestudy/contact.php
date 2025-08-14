<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Brewhaven</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Header */
        header {
           
     background: linear-gradient(135deg, #7b3fbf, #ab47bc 60%, #6a1b9a);

            padding: 15px 30px;
        }

        .logo {
            font-size: 36px;
            color: white;
            font-weight: bold;
            display: inline-block;
        }

        .nav-links {
            float: right;
            list-style: none;
            margin-top: 8px;
        }

        .nav-links li {
            display: inline;
            margin: 0 15px;
        }

        .nav-links li a {
            text-decoration: none;
            color: white;
            font-size: 18px;
        }

        .nav-links li a:hover {
            color: #FFCC80;
        }

        /* Background & Layout */
        #div1 {
            height: 700px;
            width: 100%;
            background-image: url(pclass.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        h2 {
            font-size: 50px;
            color: brown;
            text-decoration: underline;
            font-family: Arial, sans-serif;
            margin-bottom: 20px;
        }

        h2:hover {
            font-size: 60px;
            color: black;
            transition: font-size 1s, color 1s;
        }

        /* Contact Form */
        form {
            background-color: rgba(255, 255, 255, 0.85);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3);
        }

        table {
            font-size: 20px;
            color: black;
        }

        input,
        textarea {
            height: 40px;
            width: 300px;
            padding: 5px 10px;
            font-size: 16px;
            margin-top: 8px;
            border: 1px solid #999;
            border-radius: 6px;
        }

        input:hover,
        textarea:hover {
            background-color: #eee;
            font-size: 17px;
        }

        textarea {
            height: 80px;
            resize: vertical;
        }

        button {
            height: 45px;
            width: 320px;
            font-size: 18px;
            background-color:rgb(16, 24, 87);
            color: white;
            border: none;
            border-radius: 6px;
            margin-top: 20px;
            cursor: pointer;
        }

        button:hover {
            background-color: green;
        }

        footer {
            background: linear-gradient(135deg, #7b3fbf, #ab47bc 60%, #6a1b9a);
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <header>
        <div class="logo">Brewhaven</div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="order.php">Order</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <div style="clear: both;"></div>
    </header>

    <!-- Contact Form -->
    <section class="contact">
        <div id="div1">
            <h2>Contact Us</h2>
            <form action="process_contact.php" method="POST">
                <table>
                    <tr>
                        <td><label for="name">Name:</label></td>
                        <td><input type="text" name="name" id="name" required></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email:</label></td>
                        <td><input type="email" name="email" id="email" required></td>
                    </tr>
                    <tr>
                        <td><label for="message">Message:</label></td>
                        <td><textarea name="message" id="message" required></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <button type="submit">Send Message</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Brewhaven. All Rights Reserved.</p>
    </footer>

</body>
</html>
