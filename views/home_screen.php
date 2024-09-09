<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <style>
    /* Galaxy Gradient Background */
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background: linear-gradient(120deg, #2c3e50, #3498db, #9b59b6, #e74c3c);
      background-size: 400% 400%;
      animation: gradientAnimation 15s ease infinite;
      color: #ecf0f1;
    }

    @keyframes gradientAnimation {
      0% { background-position: 0% 0%; }
      50% { background-position: 100% 100%; }
      100% { background-position: 0% 0%; }
    }

    /* Container for Home Screen */
    .home-screen {
      max-width: 800px;
      margin: 5% auto;
      padding: 20px;
      background: rgba(0, 0, 0, 0.7);
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
      text-align: center;
    }

    nav {
      margin-bottom: 20px;
    }

    nav a {
      color: #f39c12;
      text-decoration: none;
      margin: 0 40px;
      font-size: 18px;
      transition: color 0.3s ease;
    }

    nav a:hover {
      color: #ecf0f1;
    }

    h1 {
      color: #f39c12;
      margin-bottom: 20px;
    }

    ul {
      list-style: none;
      padding: 0;
    }

    ul li {
      margin: 15px 0;
    }

    ul li a {
      width: 100px;
      display: inline-block;
      padding: 15px 30px;
      border-radius: 5px;
      background: rgba(255, 255, 255, 0.1);
      color: #ecf0f1;
      text-decoration: none;
      font-size: 20px;
      transition: background 0.3s ease, color 0.3s ease;
    }

    ul li a:hover {
      background: rgba(255, 255, 255, 0.3);
      color: #f39c12;
    }
  </style>
</head>
<body>
  <div class="home-screen">
    <nav>
      <a href="../views/user_profile_screen.php">Profile</a>
      <a href="../views/search_screen.php">Search Business</a>
      <a href="../views/add_business.php">Add Business</a>
      <a href="../scripts/logout.php">logout</a>
    </nav>
    <h1>Select a Category</h1>
    <ul>
      <li><a href="category_screen.php?category=food">Food</a></li>
      <li><a href="category_screen.php?category=healthcare">Healthcare</a></li>
      <li><a href="category_screen.php?category=hotels">Hotels</a></li>
      <li><a href="category_screen.php?category=education">Education</a></li>
    </ul>
  </div>
</body>
</html>
