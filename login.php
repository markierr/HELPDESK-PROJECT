<?php
session_start();


include("register dbcon.php");

if (isset($_POST['submit']))  {
    $gmail = $_POST['gmail'];
    $password = $_POST['password'];

    if (!empty($gmail) && !empty($password) && !is_numeric($gmail)) {
        $query = "SELECT * FROM 'registration' WHERE (gmail = '$gmail' LIMIT 1)";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);

            // Verify password (plain text comparison)
            if ($user_data['password'] == $password) {
                header("location: supporthome.php");
                die;
            }
        } else {
            echo "<script type='text/javascript'> alert('Wrong username or password')</script>";
        }
    } else {
        echo "<script type='text/javascript'> alert('Please enter valid username and password')</script>";
    }
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
      <div class="login">
          <h1>login</h1>
          <form  method="POST">
              <label>Email</label>
              <input type="gmail" name="gmail" required>
              <label>Password</label>
              <input type="password" name="password" required>
              <input type="submit" name="submit" value="submit">
   </form>
   <p>Don't have an account? <a href="sign up.php">Sign up here</a></p>
  </body>
  </html>