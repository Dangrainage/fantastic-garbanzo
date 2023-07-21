<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmPassword = $_POST["confirm-password"];

  // Validate form data (you can add more complex validation here)
  if (empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
    echo "Please fill in all the fields.";
  } elseif ($password !== $confirmPassword) {
    echo "Passwords do not match.";
  } else {
    // All validation passed, process the signup here (e.g., store data in a database)
    // For demonstration purposes, let's assume signup is successful.
    // In a real-world scenario, you should store user data securely and handle errors properly.
    echo "Sign up successful! Welcome, $username!";

    // Redirect the user to a different page
    header("Location: welcome.php");
    exit(); // Make sure to exit after redirection to prevent further execution.
  }
}
?>
