<?php

// Database connection details (replace with your own)
$servername = "localhost";
$username = "root";
$password = ""; // It's recommended to set a password
$dbname = "feedback";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get form data and sanitize inputs
$username = mysqli_real_escape_string($conn, $_POST['username']);
$rating = $_POST['rating'];
$comments = mysqli_real_escape_string($conn, $_POST['comments']);

// Prepare SQL statement
$sql = "INSERT INTO feedback (username, rating, comments) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

// Bind parameters to prepared statement
mysqli_stmt_bind_param($stmt, "sis", $username, $rating, $comments);

// Execute prepared statement
if (mysqli_stmt_execute($stmt)) {
  $username = htmlspecialchars($username); // Escape for display
  $comments = nl2br(htmlspecialchars($comments)); // Escape and add line breaks
  echo "<h2>Thank you for your feedback!</h2>";
  echo "<p>Username: $username</p>";
  echo "<p>Rating: $rating</p>";
  echo "<p>Comments: $comments</p>";
} else {
  echo "Error submitting feedback: " . mysqli_error($conn);
}

// Close prepared statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);

?>