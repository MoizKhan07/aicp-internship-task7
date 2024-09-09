<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
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

    /* Container for Sign Up Screen */
    .signup-screen {
      max-width: 600px;
      margin: 5% auto;
      padding: 20px;
      background: rgba(0, 0, 0, 0.7);
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin: 10px 0 5px;
      color: #ecf0f1;
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    textarea {
      padding: 10px;
      border: 1px solid #ecf0f1;
      border-radius: 5px;
      background: rgba(0, 0, 0, 0.3);
      color: #ecf0f1;
      font-size: 16px;
      margin-bottom: 10px;
    }

    textarea {
      resize: vertical;
      height: 100px;
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
  </style>
</head>
<body>
  <div class="signup-screen">
    <form action="../scripts/signup.php" method="post" enctype="multipart/form-data">
      <label for="picture">Profile Picture:</label>
      <input type="file" id="picture" name="picture">

      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <label for="confirm_password">Confirm Password:</label>
      <input type="password" id="confirm_password" name="confirm_password" required>

      <label for="city">City:</label>
      <input type="text" id="city" name="city" required>

      <label for="address">Address:</label>
      <textarea id="address" name="address" required></textarea>

      <button type="submit">Sign Up</button>
    </form>
  </div>
</body>
</html>
