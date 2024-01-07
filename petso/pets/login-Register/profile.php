<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styleProfile.css">
    <title>User Dashboard</title>
</head>
<body>
<div class="form-center">
    <h1>Welcome <?php echo $_SESSION["user"]; ?> to Petso Website </h1>
        <a href="logout.php" class="btn1">Logout</a>
        <a href="http://localhost/dashboard/sec3PHP/pets%20website.php" class="btn2">Home</a>
    </div>
</body>
</html>