<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_harsh($_POST["password"], PASSWORD_BCRYPT);


echo "Username: $username<br>"; echo "Hashed Password: $password"; } ?>
