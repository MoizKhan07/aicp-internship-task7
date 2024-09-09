<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
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

    .user-profile-screen {
      background: rgba(0, 0, 0, 0.7);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
      max-width: 500px;
      width: 100%;
    }

    h1 {
      font-size: 2.5em;
      margin: 0;
      padding: 0;
      color: #ecf0f1;
    }

    p {
      font-size: 1.2em;
      margin: 10px 0;
      color: #bdc3c7;
    }

    img {
      border-radius: 50%;
      margin-top: 20px;
      width: 150px;
      height: 150px;
      object-fit: cover;
    }

    a {
      display: inline-block;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      background-color: #3498db;
      color: #ecf0f1;
      font-size: 1.2em;
      text-decoration: none;
      transition: background-color 0.3s ease;
      margin-top: 20px;
    }

    a:hover {
      background-color: #2980b9;
    }
  </style>
</head>
<body>
  <div class="user-profile-screen">
    <?php
    include '../includes/config.php';
    session_start();
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM users WHERE id=$user_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      $user = $result->fetch_assoc();
      echo "<h1>" . $user['name'] . "</h1>";
      echo "<p><strong>Email:</strong> " . $user['email'] . "</p>";
      echo "<p><strong>City:</strong> " . $user['city'] . "</p>";
      echo "<p><strong>Address:</strong> " . $user['address'] . "</p>";
    } else {
      echo "User not found.";
    }
    ?>
    <a href="update_profile_screen.php">Update Profile</a>
  </div>
</body>
</html>
