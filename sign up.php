<?php
session_start();

include("register dbcon.php");

if (isset($_POST['submit'])) {
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']); // Corrected variable name
    $Gender = mysqli_real_escape_string($con, $_POST['Gender']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $gmail = mysqli_real_escape_string($con, $_POST['gmail']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Use prepared statement
    $query = $con->prepare("INSERT INTO registration (fname, lname, Gender, phone, gmail, password) VALUES (?, ?, ?, ?, ?, ?)");
    
    if (!$query) {
        die("Error in preparing the statement: " . $con->error);
    }

    $query->bind_param("ssssss", $fname, $lname, $Gender, $phone, $gmail, $password);

    // Execute the prepared statement
    $result = $query->execute();

    if (!$result) {
        die("Error in executing the statement: " . $query->error);
    }

    // Close the prepared statement
    $query->close();
   
    // Display JavaScript alert message
    echo "<script>alert('Registration successful. Please proceed to login.');</script>";

    // Redirect to index.php
    header("Location: index.php");
    exit(); // Ensure no further code is executed after redirection
} else {
    echo "<script type='text/javascript'> alert('Please enter valid information')</script>";
}
?>

<!doctype html>
<html lang="eng" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

    <title>Form login and Register</title>
    <link rel="stylesheet" href="sign up.css">

  </head>
  <body>
    <div class="signup">
        <h1>Sign up</h1>
        <h4>It's free and only takes a minute
        <a href="supporthome.php" class="btn btn-danger float-end">BACK</a>
        </h4>
        <form method="POST">
            <label>First name</label>
            <input type="text" name="fname" required>
            <label>Last name</label>
            <input type="text" name="lname" required>
            <label>Gender</label>
            <input type="text" name="Gender" required>
            <label>phone number</label>
            <input type="tel" name="phone" required>
            <label>Email</label>
            <input type="Email" name="gmail" required>
            <label>password</label>
            <input type="password" name="password" required>
            <input type="submit" name="submit" value="submit">
 </form>
 <p>By clicking the sign up button, you agree to our<br>
    <a href="">Terms and conditions</a> and <a href="#">policy privacy</a>
</p>
<p>Already have an account? <a href="login.php">Login here</a></p>
    </div>