<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search</title>
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

    /* Container for Search Screen */
    .search-screen {
      max-width: 600px;
      margin: 5% auto;
      padding: 20px;
      background: rgba(0, 0, 0, 0.7);
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
      text-align: center;
    }

    form {
      margin-bottom: 20px;
    }

    input[type="text"] {
      width: calc(100% - 22px);
      padding: 10px;
      border: 1px solid #ecf0f1;
      border-radius: 5px;
      background: rgba(0, 0, 0, 0.3);
      color: #ecf0f1;
      font-size: 16px;
      margin-right: 10px;
      box-sizing: border-box;
    }

    button {
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      background-color: #3498db;
      color: #ecf0f1;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #2980b9;
    }

    .search-results {
      margin-top: 20px;
      text-align: left;
    }

    .search-results .search-result {
      padding: 10px;
      border-bottom: 1px solid #ecf0f1;
      margin-bottom: 40px;
      background: rgba(0, 0, 0, 0.5);
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <div class="search-screen">
    <form action="../scripts/search.php" method="get">
      <input type="text" name="query" placeholder="Search for businesses" required>
      <button type="submit">Search</button>
    </form>
    <div class="search-results">
      <?php
      include '../scripts/search.php';
      ?>
    </div>
  </div>
</body>
</html>
