<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Category</title>
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

    /* Container for Category Screen */
    .category-screen {
      max-width: 900px;
      margin: 5% auto;
      padding: 20px;
      background: rgba(0, 0, 0, 0.7);
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    }

    h1 {
      color: #f39c12;
      margin-bottom: 20px;
    }

    /* Filters Styling */
    .filters {
      margin-bottom: 20px;
    }

    .filters form {
      display: flex;
      flex-direction: column;
    }

    .filters label {
      margin: 10px 0 5px;
      font-weight: bold;
    }

    .filters input[type="text"],
    .filters select {
      padding: 10px;
      border: 1px solid #ecf0f1;
      border-radius: 5px;
      margin-bottom: 10px;
      background: rgba(0, 0, 0, 0.3);
      color: #ecf0f1;
    }

    .filters button {
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      background-color: #3498db;
      color: #ecf0f1;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .filters button:hover {
      background-color: #2980b9;
    }

    /* Business List Styling */
    .business-list {
      margin-top: 20px;
    }

    .business-item {
      background: rgba(0, 0, 0, 0.5);
      padding: 15px;
      border-radius: 5px;
      margin-bottom: 15px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    }

    .business-item h2 {
      margin-top: 0;
      color: #f39c12;
    }

    .business-item p {
      margin: 10px 0;
    }
  </style>
</head>
<body>
  <div class="category-screen">
    <h1>Businesses in Category</h1>
    <div class="filters">
      <!-- Filters form -->
      <form action="" method="get">
        <label for="location">Location:</label>
        <input type="text" id="location" name="location">
        
        <label for="popularity">Popularity:</label>
        <select id="popularity" name="popularity">
          <option value="all">All</option>
          <option value="popular">Popular</option>
          <option value="regular">Regular</option>
        </select>

        <button type="submit">Apply Filters</button>
      </form>
    </div>
    <div class="business-list">
      <!-- List of businesses -->
      <?php
      include '../includes/config.php';

      $category = $_GET['category'];
      $sql = "SELECT * FROM businesses WHERE category='$category'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "<div class='business-item'>";
          echo "<h2>" . $row['name'] . "</h2>";
          echo "<p>" . $row['description'] . "</p>";
          echo "</div>";
        }
      } else {
        echo "No businesses found.";
      }
      ?>
    </div>
  </div>
</body>
</html>
