
<!DOCTYPE html>
<html>
<head>
  <title>City School Login</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="login-box">
    <h2>Login</h2>
    <form method="POST">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
    <p style="color:red;"><?php echo $error; ?></p>
  </div>
</body>
</html>

<?php
session_start();
include("includes/db.php");

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = md5($_POST['password']); // Simple encryption

  $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
    exit();
  } else {
    $error = "Invalid username or password";
  }
}
?>



</body>
</html>
