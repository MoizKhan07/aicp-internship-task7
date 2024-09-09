<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Business Details</title>
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

    /* Centering the Content */
    .business-details-screen {
      max-width: 800px;
      margin: 5% auto;
      padding: 20px;
      background: rgba(0, 0, 0, 0.7);
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    }

    h1, h2 {
      color: #f39c12;
    }

    p {
      margin: 10px 0;
    }

    img {
      max-width: 100%;
      height: auto;
      border-radius: 5px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
      margin-top: 15px;
    }

    .reviews {
      margin-top: 20px;
    }

    .review-item {
      background: rgba(0, 0, 0, 0.5);
      padding: 15px;
      border-radius: 5px;
      margin-bottom: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    }

    .review-item p {
      margin: 5px 0;
    }

    .review-item strong {
      color: #f39c12;
    }
  </style>
</head>
<body>
  <div class="business-details-screen">
    <?php
    include '../includes/config.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM businesses WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      $business = $result->fetch_assoc();
      echo "<h1>" . $business['name'] . "</h1>";
      echo "<p><strong>Address:</strong> " . $business['address'] . "</p>";
      echo "<p><strong>Phone:</strong> " . $business['phone_number'] . "</p>";
      echo "<p><strong>Description:</strong> " . $business['description'] . "</p>";
      if ($business['photos']) {
        echo "<img src='../images/" . $business['photos'] . "' alt='" . $business['name'] . "'>";
      }
    } else {
      echo "Business not found.";
    }
    ?>
    <div class="reviews">
      <h2>Reviews</h2>
      <!-- Display reviews -->
      <?php
      $sql = "SELECT * FROM reviews WHERE business_id=$id";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while ($review = $result->fetch_assoc()) {
          echo "<div class='review-item'>";
          echo "<p><strong>User ID:</strong> " . $review['user_id'] . "</p>";
          echo "<p><strong>Rating:</strong> " . $review['rating'] . "</p>";
          echo "<p><strong>Review:</strong> " . $review['review'] . "</p>";
          echo "</div>";
        }
      } else {
        echo "No reviews yet.";
      }
      ?>
    </div>
  </div>
</body>
</html>
