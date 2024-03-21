<?php
$full names = $_POST['full names'];
$email = $_POST['email'];
$phone number = $_POST['phone number'];

//Database connection
$conn = new msqli('localhost','root','','test');
if($conn->connect_error){ die('connection failed : '.$conn->coonect_error);
}else{ $stmt = $conn->prepare("insert into tickets(full names,email,phone
number)values(?,?,?,)"); $stmt-> bind_param("ssi",$full names, $email, $phone
number); $stmt->execute(); echo "submission succesful......"; $stmt->close();
$conn->close(); } ?>
