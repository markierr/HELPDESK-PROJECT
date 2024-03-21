<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];




    $ hashed password = '$2y$10$BZak4y37p0Sn0J5e0TZvKuA.ML2Iz.15FNCxogpVG030uZwfgz0Xm';
    if(password_verify($password, $hashedPassword)) {
        echo "login succesful!";
    }
else{
    echo "invalid username or password";
}

