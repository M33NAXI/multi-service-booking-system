<?php
session_start();

if (!isset($_SESSION['user_id'])) {
  header("Location: ../login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>User Dashboard</title>
</head>
<body>

<h1>Welcome to Dashboard</h1>
<a href="../logout.php">Logout</a>

</body>
</html>
