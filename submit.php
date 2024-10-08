<?php
// Connect to the database (adjust the credentials as needed)
$host = "localhost";
$user = "root";
$password = "";
$dbname = "user_details"; // Make sure this database exists

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Process form data if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Escape user input to avoid SQL injection
  $name = mysqli_real_escape_string($conn, $_POST["name"]);
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $message = mysqli_real_escape_string($conn, $_POST["message"]);

  // Insert data into the 'contact' table (make sure this table exists)
  $sql = "INSERT INTO contact (name, email, message) VALUES (?, ?, ?)";
  $stmt = mysqli_prepare($conn, $sql);

  if ($stmt) {
    // Bind parameters and execute statement
    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);
    if (mysqli_stmt_execute($stmt)) {
      echo "Thank you for contacting us! Your message has been received.";

      // Add a link to the homepage after the thank you message
      echo '<br><br><a href="index.html">Go back to Homepage</a>';
    } else {
      echo "Error: Could not submit message.";
    }
    mysqli_stmt_close($stmt);
  } else {
    echo "Error: Could not prepare statement.";
  }

  mysqli_close($conn);
}
