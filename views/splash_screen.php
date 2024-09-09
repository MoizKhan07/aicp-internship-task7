<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Splash Screen</title>
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
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      text-align: center;
    }

    @keyframes gradientAnimation {
      0% { background-position: 0% 0%; }
      50% { background-position: 100% 100%; }
      100% { background-position: 0% 0%; }
    }

    .splash-screen {
      background: rgba(0, 0, 0, 0.7);
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    }

    h1 {
      font-size: 2.5em;
      margin: 0;
      padding: 0;
      color: #ecf0f1;
    }

    .button {
      margin-top: 2em;
      display: inline-block;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      background-color: #3498db;
      color: #ecf0f1;
      font-size: 1.2em;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .button:hover {
      background-color: #2980b9;
    }
  </style>
</head>
<body>
  <div class="splash-screen">
    <h1>Welcome to Business Info App</h1>
    <a href="login_screen.php" class="button">Get Started</a>
  </div>
</body>
</html>
