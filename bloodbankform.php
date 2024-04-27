<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood Bank Registration Form</title>
  <link rel="stylesheet" href="bloodbankform.css">
</head>
<body>
  <h1>Be a Hero - Blood Bank Registration</h1>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

    <h2>Personal Information</h2>
    <div class="form-group">
      <label for="fullName">Full Name:</label>
      <input type="text" id="fullName" name="fullName" required>
    </div>
    <div class="form-group">
      <label for="dateOfBirth">Date of Birth:</label>
      <input type="date" id="dateOfBirth" name="dateOfBirth" required>
    </div>
    <div class="form-group">
      <label for="contactNumber">Contact Number:</label>
      <input type="tel" id="contactNumber" name="contactNumber" required>
    </div>
    <div class="form-group">
      <label for="emailAddress">Email Address:</label>
      <input type="email" id="emailAddress" name="emailAddress" required>
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <textarea id="address" name="address" required></textarea>
    </div>

    <h2>Medical History (Optional)</h2>
    <div class="form-group">
      <label for="recentProcedures">Recent Surgeries/Procedures:</label>
      <input type="text" id="recentProcedures" name="recentProcedures">
    </div>
    <div class="form-group">
      <label for="medicalConditions">Medical Conditions (e.g., Anemia, Chronic Illnesses):</label>
      <input type="text" id="medicalConditions" name="medicalConditions">
    </div>

    <h2>Lifestyle Information</h2>
    <div class="form-group">
      <label for="weight">Weight:</label>
      <input type="number" id="weight" name="weight">
      <label for="height">Height:</label>
      <input type="number" id="height" name="height">
    </div>

    <h2>Additional Information</h2>
    <div class="form-group">
      <label for="bloodType">Blood Type (if known):</label>
      <input type="text" id="bloodType" name="bloodType">
    </div>
    <div class="form-group">
      <label for="donationReason">Reason for Donation:</label>
      <textarea id="donationReason" name="donationReason"></textarea>
    </div>
    <div class="form-group">
      <input type="checkbox" id="terms" name="terms" required>
      <label for="terms">I agree to the terms and conditions regarding blood donation process and risks.</label>
    </div>
    <div class="form-group">
      <label for="confidentiality">Donor Confidentiality Preference:</label>
      <input type="radio" id="confidentialYes" name="confidentiality" value="yes">
      <label for="confidentialYes">Yes, I prefer confidentiality.</label>
      <br>
      <input type="radio" id="confidentialNo" name="confidentiality" value="no">
      <label for="confidentialNo">No, I am open to being contacted by recipients.</label>
    </div>
    <div class="form-group">
      <button type="submit">Submit Registration</button>
    </div>

  </form>
  <p>Thank you for your interest in becoming a blood donor! Your contribution can save lives.</p>

  <?php
  // PHP code to process form submission
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection details (replace with your actual credentials)
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "blood_bank";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Escape user inputs for security
    $name = $conn->real_escape_string($_POST['name']);
    $blood_group = $conn->real_escape_string($_POST['blood_group']);
    $availability = $conn->real_escape_string($_POST['availability']);
    $location = $conn->real_escape_string($_POST['location']);
    $contact = $conn->real_escape_string($_POST['contact']);

    // Attempt insert query execution
    $sql = "INSERT INTO users (name, blood_group, availability, location, contact) 
            VALUES ('$name', '$blood_group', '$availability', '$location', '$contact')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
    </div>
</body>
</html>