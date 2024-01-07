<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: profile.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="styleLogin.css">
</head>
<body>
    <div class="form-center">
        <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = $user["email"];
                    header("Location: profile.php");
                    die();
                }else{
                    echo "<div class='alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert-danger'>Email does not match</div>";
            }
        }
        ?>
      <form action="login.php" method="post">
        <h2>Login</h2>
            <input type="email" placeholder="Enter Email" name="email">
            <input type="password" placeholder="Enter Password" name="password">
            <input type="submit" value="Login" name="login">
            <h3>You do not have an account ? <a href="registration.php">Rigister Here</a></h3>
      </form>
    </div>
</body>
</html>
