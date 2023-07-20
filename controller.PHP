<?php
// Route for handling login form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Check if username and password are valid
  if ($username === 'admin' && $password === 'password') {
    // Redirect to home page if login is successful
    header('Location: /');
    exit;
  } else {
    // Display an error message if login is unsuccessful
    $error = 'Invalid username or password.';
  }
}

// Route for handling sign-up form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signup'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  // Check if passwords match
  if ($password === $confirm_password) {
    // Redirect to home page if sign-up is successful
    header('Location: /');
    exit;
  } else {
    // Display an error message if passwords don't match
    $error = 'Passwords do not match.';
  }
}
?>

<!-- Login Form -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <h2>Login</h2>
  <?php if (isset($error) && !empty($error)): ?>
    <p><?php echo htmlspecialchars($error); ?></p>
  <?php endif; ?>
  <label for="username">Username:</label>
  <input type="text" id="username" name="username" required>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required>
  <button type="submit" name="login">Login</button>
</form>

<!-- Sign-up Form -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <h2>Sign Up</h2>
  <?php if (isset($error) && !empty($error)): ?>
    <p><?php echo htmlspecialchars($error); ?></p>
  <?php endif; ?>
  <label for="username">Username:</label>
  <input type="text" id="username" name="username" required>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required>
  <label for="confirm-password">Confirm Password:</label>
  <input type="password" id="confirm-password" name="confirm_password" required>
  <button type="submit" name="signup">Sign Up</button>
</form>
