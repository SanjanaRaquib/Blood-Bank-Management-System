<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood Donation Form</title>
</head>
<body>
  <h1>Donate Blood and Save a life!</h1>
  <form method="post" action="process.php">

    <div>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
    </div>

    <div>
      <label for="bloodGroup">Blood Group:</label>
      <select id="bloodGroup" name="bloodGroup">
        <option value="A+">A+</option>
        <option value="B+">B+</option>
        <option value="O+">O+</option>
        <option value="AB+">AB+</option>
        <option value="A-">A-</option>
        <option value="B-">B-</option>
        <option value="AB-">AB-</option>
        <option value="O-">O-</option>
      </select>
    </div>

    <div>
      <label for="location">Location:</label>
      <input type="text" id="location" name="location" required>
    </div>

    <div>
      <label for="age">Age:</label>
      <input type="number" id="age" name="age" required>
    </div>

    <div>
      <label for="contact">Contact:</label>
      <input type="tel" id="contact" name="contact" required>
    </div>

    <button type="submit" name="submit">Submit</button>

  </form>
</body>
</html>