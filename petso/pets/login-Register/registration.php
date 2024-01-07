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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="styleRegister.css">
</head>
<body>
    <div class="form-center">
        <?php
        if (isset($_POST["submit"])) {
           $fullName = $_POST["fullname"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $passwordRepeat = $_POST["repeat_password"];
           $passwordHash = password_hash($password, PASSWORD_DEFAULT);
           $errors = array();
           if (empty($fullName) AND empty($email) AND empty($password) AND empty($passwordRepeat)) {
            array_push($errors,"All fields are required");
           }
          else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
           }
          else if (strlen($password)<8) {
            array_push($errors,"Password must be at least 8 charactes long");
           }
           if ($password!==$passwordRepeat) {
            array_push($errors,"Password does not match");
           }
           require_once "database.php";
           $sql = "SELECT * FROM users WHERE email = '$email'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"Email already exists!");
           }
           if (count($errors)>0) {
            foreach ($errors as $error) {
                echo "<div class='alert-danger'>$error</div>";
            }
           }else{
            $sql = "INSERT INTO users (full_name, email, password) VALUES ( ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);  
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt){
                mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully.</div>";
            }else{
                die("Something went wrong");
            }
           }
        }
        ?>
        <form action="registration.php" method="post">
                <h2>Register</h2>
                <input type="text" name="fullname" placeholder="Full Name">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <input type="password" class="pass2" name="repeat_password" placeholder="Repeat Password">
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
        </form>
        <div>
        <h3>Already Registered ?<a href="login.php"> Login Here</a></h3>
      </div>
    </div>
</body>
</html>