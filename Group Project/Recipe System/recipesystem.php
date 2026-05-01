<?php

  session_start();

  if (!isset($_SESSION[;user_id])) {
    
    header(Location: login.html");
    exit();

  }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OpenApron</title>

    <style>
      body {
        font-family: Arial;
        margin: 0;
        background-color: #f4f4f4;
        text-align: center;
      }

      header {
        background-color: #4caf50;
        color: white;
        padding: 20px;
      }

      nav {
        background-color: #ffffff;
        padding: 10px;
      }

      nav a {
        margin: 15px;
        text-decoration: none;
        color: black;
        font-weight: bold;
      }

      .dropdown {
        display: inline-block;
        position: relative;
      }

      .dropbtn {
        background: none;
        border: none;
        font-weight: bold;
        margin: 15px;
        cursor: pointer;
        font-size: 16px;
      }

      .dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        min-width: 150px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        z-index: 10;
      }

      .dropdown-content a {
        color: black;
        text-decoration: none;
        display: block;
        padding: 8px 12px;
      }

      .dropdown-content a:hover {
        background-color: #f1f1f1;
      }

      .dropdown:hover .dropdown-content {
        display: block;
      }

      main {
        padding: 60px 40px;
      }

      footer {
        background-color: #ddd;
        padding: 10px;
        margin-top: 40px;
      }

      /* Hero Card */
      .hero-card {
        background-color: white;
        max-width: 500px;
        margin: 0 auto;
        padding: 40px 30px;
        border-radius: 8px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      }

      .hero-card img {
        width: 200px;
        border-radius: 8px;
        margin-bottom: 20px;
      }

      .hero-card h2 {
        font-size: 26px;
        color: #333;
        margin: 0 0 10px;
      }

      .hero-card p {
        font-size: 15px;
        color: #555;
        margin-bottom: 25px;
      }

      .hero-buttons {
        display: flex;
        justify-content: center;
        gap: 12px;
      }

      .hero-buttons a {
        padding: 10px 22px;
        border-radius: 5px;
        text-decoration: none;
        font-size: 14px;
        font-weight: bold;
      }

      .btn-primary {
        background-color: #4caf50;
        color: white;
      }

      .btn-primary:hover {
        background-color: #45a049;
      }

      .btn-secondary {
        background-color: white;
        color: #4caf50;
        border: 2px solid #4caf50;
      }

      .btn-secondary:hover {
        background-color: #f0faf0;
      }
    </style>
  </head>

  <body>
    <header>
      <h1>OpenApron</h1>
    </header>

    <nav>
      <div class="dropdown">
        <button class="dropbtn">Recipes</button>
        <div class="dropdown-content">
          <a href="myrecipes.php">My Recipes</a>
        </div>
      </div>

      <a href="messaging.html">Messaging</a>

      <div class="dropdown">
        <button class="dropbtn">Contact Us</button>
        <div class="dropdown-content">
          <a href="faq.html">FAQ</a>
          <a href="contactform.html">Contact Form</a>
          <a href="customersupport.html">Customer Support</a>
          <a href="feedback.html">Feedback</a>
        </div>
      </div>

      <a href="logout.php">Sign Out</a>
    </nav>

    <main>
      <div class="hero-card">
        <img src="openapron1.jpg" alt="OpenApron logo" />
        <h2>Welcome to OpenApron!</h2>
        <p>
          Your digital recipe companion. Discover, share, and save your favorite
          recipes all in one place.
        </p>
        <div class="hero-buttons">
          <a href="myrecipes.php" class="btn-primary">Browse Recipes</a>
          <a href="register.html" class="btn-secondary">Get Started</a>
        </div>
      </div>
    </main>

    <footer>
      <p>© 2026 OpenApron</p>
    </footer>
  </body>
</html>
