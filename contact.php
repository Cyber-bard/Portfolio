<?php
// Connect to database (replace with your actual credentials)
$host = "localhost";
$user = "root";
$password = "";
$dbname = "user_details";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Process form data (if form submitted)
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Validate user input (optional)
  // You can add checks for empty fields, valid email format, etc.

  $name = mysqli_real_escape_string($conn, $_POST["name"]);  // Escape user input
  $email = mysqli_real_escape_string($conn, $_POST["email"]); // Escape user input
  $message = mysqli_real_escape_string($conn, $_POST["message"]); // Escape user input

  // Prepare SQL statement (prevents SQL injection)
  $sql = "INSERT INTO contact (name, email, message) VALUES (?, ?, ?)";
  $stmt = mysqli_prepare($conn, $sql);

  if ($stmt) {
    // Bind parameters to the prepared statement
    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);

    if (mysqli_stmt_execute($stmt)) {
      echo "Thank you for contacting us! Your message has been received.";
      echo '<br><br/><br/><br/><div class="back-btn">
        <a href="index.html"><input type="submit" value="Back"></div>';
    } else {
      echo "Error: Could not submit message.";
    }

    mysqli_stmt_close($stmt);
  } else {
    echo "Error: Could not prepare statement.";
  }

  mysqli_close($conn);
}
?>
