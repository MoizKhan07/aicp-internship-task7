<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Business</title>
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

    /* Centering the Form */
    .add-business-screen {
      max-width: 600px;
      margin: 5% auto;
      padding: 20px;
      background: rgba(0, 0, 0, 0.6);
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin: 10px 0 5px;
      font-weight: bold;
    }

    input[type="text"],
    textarea,
    select {
      padding: 10px;
      border: 1px solid #ecf0f1;
      border-radius: 5px;
      margin-bottom: 15px;
      background: rgba(0, 0, 0, 0.3);
      color: #ecf0f1;
    }

    input[type="file"] {
      padding: 5px;
      margin-bottom: 15px;
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
  <div class="add-business-screen">
    <form action="../scripts/add_business.php" method="post" enctype="multipart/form-data">
      <label for="name">Business Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="address">Address:</label>
      <textarea id="address" name="address" required></textarea>

      <label for="phone_number">Phone Number:</label>
      <input type="text" id="phone_number" name="phone_number" required>

      <label for="category">Category:</label>
      <select id="category" name="category" required>
        <option value="food">Food</option>
        <option value="healthcare">Healthcare</option>
        <option value="hotels">Hotels</option>
        <option value="education">Education</option>
      </select>

      <label for="description">Description:</label>
      <textarea id="description" name="description" required></textarea>

      <label for="photos">Photos:</label>
      <input type="file" id="photos" name="photos">

      <button type="submit">Submit</button>
    </form>
  </div>
</body>
</html>
