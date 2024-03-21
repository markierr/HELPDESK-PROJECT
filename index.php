<?php
session_start();

include("register dbcon.php"); // Ensure this file contains your database connection code

if (isset($_POST['submit'])) {
    $gmail = mysqli_real_escape_string($con, $_POST['gmail']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Query to check if the entered credentials match with any record in the database
    $query = "SELECT * FROM registration WHERE gmail = '$gmail' AND password = '$password'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 1) {
        // If the user is found, redirect to a dashboard page or any other page
        $_SESSION['gmail'] = $gmail; // Store gmail in session for future use
        header("Location: supporthome.php");
        exit();
    } else {
        // If user not found, display an error message
        $error_message = "Invalid email or password. Please try again.";
    }
}
?>

<!doctype html>
<html lang="eng">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

    <title>Login</title>
    <link rel="stylesheet" href="login.css"> <!-- Make sure to create this CSS file with appropriate styles -->
</head>
<body>
<div class="login">
    <h1>Login</h1>
    <?php if(isset($error_message)) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $error_message; ?>
        </div>
    <?php } ?>
    <form method="POST">
        <label>Email</label>
        <input type="email" name="gmail" required>
        <label>Password</label>
        <input type="password" name="password" required>
        <input type="submit" name="submit" value="Login">
    </form>
    <p>Don't have an account? <a href="sign up.php">Sign up here</a></p>
</div>
</body>
</html>
