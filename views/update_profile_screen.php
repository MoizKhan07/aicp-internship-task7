<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Profile</title>
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

    .update-profile-screen {
      background: rgba(0, 0, 0, 0.7);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
      max-width: 600px;
      width: 100%;
      margin: 20px;
      box-sizing: border-box;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    label {
      font-size: 1.1em;
      margin-bottom: 5px;
      color: #ecf0f1;
      text-align: left;
    }

    input[type="text"],
    input[type="email"],
    textarea {
      padding: 10px;
      border: 1px solid #3498db;
      border-radius: 5px;
      background: #2c3e50;
      color: #ecf0f1;
      font-size: 1em;
      width: 100%;
      box-sizing: border-box;
    }

    textarea {
      resize: vertical;
      height: 100px;
    }

    button {
      padding: 10px;
      border: none;
      border-radius: 5px;
      background-color: #3498db;
      color: #ecf0f1;
      font-size: 1.2em;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #2980b9;
    }

    input[type="file"] {
      background: #2c3e50;
      border: 1px solid #3498db;
      padding: 10px;
      border-radius: 5px;
      color: #ecf0f1;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="update-profile-screen">
    <form action="../scripts/update_profile.php" method="post" enctype="multipart/form-data">
      <label for="picture">Profile Picture:</label>
      <input type="file" id="picture" name="picture">

      <label for="name">Name:</label>
      <input type="text" id="name" name="name" value="John Doe" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" value="john@example.com" required>

      <label for="city">City:</label>
      <input type="text" id="city" name="city" value="Lahore" required>

      <label for="address">Address:</label>
      <textarea id="address" name="address" required>123 Street Name</textarea>

      <button type="submit">Save Changes</button>
    </form>
  </div>
</body>
</html>
