<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Menu | Brewhaven</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to CSS -->
   <style>
  /* Body and page background */
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 0;
    text-align: center;
    background: linear-gradient(135deg, #f0eafc, #c7b3f1);
    color: #3b0f70;
  }

  /* Header */
  header {
    background: linear-gradient(90deg, #6a1b9a, #ab47bc);
    color: white;
    padding: 20px 40px;
    box-shadow: 0 4px 15px rgba(106, 27, 154, 0.8);
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-weight: 700;
    font-size: 24px;
    letter-spacing: 2px;
    user-select: none;
  }

  header .logo {
    font-size: 28px;
    font-weight: 900;
    text-shadow: 0 0 8px #df9aff;
  }

  nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
  }

  nav ul li {
    margin: 0 20px;
  }

  nav ul li a {
    text-decoration: none;
    color: white;
    font-size: 18px;
    font-weight: 600;
    padding: 8px 15px;
    border-radius: 10px;
    transition: 
      background-color 0.3s ease,
      color 0.3s ease,
      transform 0.2s ease;
    display: inline-block;
  }

  nav ul li a:hover,
  nav ul li a:focus {
    background-color: #d39cff;
    color: #4a007e;
    box-shadow: 0 0 10px #d39cff;
    transform: scale(1.1);
  }

  /* Menu Section */
  .menu {
    max-width: 1000px;
    margin: 50px auto 70px;
    padding: 0 20px 40px;
  }

  .menu h1 {
    font-size: 42px;
    margin-bottom: 30px;
    font-weight: 900;
    color: #5f2a91;
    text-shadow: 0 0 8px #caa8f7;
  }

  .menu-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
  }

  .menu-item {
    background: white;
    border-radius: 15px;
    padding: 20px;
    box-shadow: 0 8px 20px rgba(171, 71, 188, 0.2);
    transition: transform 0.5s ease, box-shadow 0.5s ease, background-color 0.5s ease;
    cursor: pointer;
  }

  .menu-item:hover {
    background-color: #d9bbff;
    transform: scale(1.05) translateY(-10px);
    box-shadow: 0 15px 35px rgba(171, 71, 188, 0.5);
  }

  .menu-item img {
    width: 100%;
    height: 180px;
    object-fit: cover;
    border-radius: 15px;
    transition: transform 0.6s ease;
    box-shadow: 0 4px 10px rgba(171, 71, 188, 0.3);
  }

  .menu-item:hover img {
    transform: scale(1.2) rotate(3deg);
    box-shadow: 0 10px 25px rgba(171, 71, 188, 0.6);
  }

  .menu-item h3 {
    font-size: 26px;
    margin: 18px 0 10px 0;
    color: #5f2a91;
    text-shadow: 0 0 6px #a87bdf;
  }

  .menu-item p {
    font-size: 16px;
    color: #4a216f;
    margin: 0 0 15px 0;
    min-height: 48px;
  }

  .menu-item span {
    font-weight: 700;
    color: #8e44ad;
    font-size: 18px;
    letter-spacing: 1px;
  }

  /* Footer */
  footer {
    background: linear-gradient(90deg, #6a1b9a, #ab47bc);
    color: white;
    padding: 25px 20px;
    font-size: 18px;
    font-weight: 600;
    box-shadow: 0 -4px 12px rgba(106, 27, 154, 0.7);
    text-align: center;
    user-select: none;
  }
</style>

</head>
<body>

    <!-- Header -->
    <header>
        <div class="logo">Brewhaven</div>
        <nav>
            <ul>
                <li class="myclass"><a href="index.php">Home</a></li>
                <li class="myclass"><a href="menu.php">Menu</a></li>
                <li class="myclass"><a href="order.php">Orders</a></li>
                <li class="myclass"><a href="contact.php">Contact</a></li>
                
            </ul>
        </nav>
    </header>

    <!-- Menu Section -->
    <section class="menu">
        <h1>Our Menu</h1>
        <div class="menu-container">

            <div class="menu-item">
                <img src="espresso.jpg" alt="Espresso">
                <h3>Espresso</h3>
                <p>Rich and bold single shot of espresso.</p>
                <span> 349/-</span>
            </div>

            <div class="menu-item">
                <img src="cappucino.jpg" alt="Cappuccino">
                <h3>Cappuccino</h3>
                <p>Espresso with steamed milk and thick foam.</p>
                <span>129/-</span>
            </div>

            <div class="menu-item">
                <img src="latte.jpg" alt="Latte">
                <h3>Latte</h3>
                <p>Espresso blended with steamed milk.</p>
                <span>249/-</span>
            </div>

            <div class="menu-item">
                <img src="mocha.jpg" alt="Mocha" height:au>
                <h3>Mocha</h3>
                <p>Chocolate-infused espresso with milk.</p>
                <span>439/-</span>
            </div>

            <div class="menu-item">
                <img src="americano.jpg" alt="americano">
                <h3>americano</h3>
                <p>americano diluted with hot water.</p>
                <span>545/-</span>
            </div>

            <div class="menu-item">
                <img src="matcha.jpg" alt="Matcha Latte">
                <h3>Matcha Latte</h3>
                <p>Green tea blended with steamed milk.</p>
                <span>245/-</span>
            </div>

            <div class="menu-item">
                <img src="croissant.jpg" alt="Butter Croissant">
                <h3>Butter Croissant</h3>
                <p>Flaky and buttery French pastry.</p>
                <span>645/- </span>
            </div>

            <div class="menu-item">
                <img src="cheesecake.jpg" alt="Cheesecake">
                <h3>Cheesecake</h3>
                <p>Creamy New York-style cheesecake.</p>
                <span>350/-</span>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2025 Brewhaven. All rights reserved.</p>
    </footer>

</body>
</html>

