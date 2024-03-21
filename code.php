<?php
session_start();

require 'dbcon.php';

if (isset($_POST['save_ticket'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $ticketsubject = mysqli_real_escape_string($con, $_POST['ticketsubject']);
    $ticketpriority = mysqli_real_escape_string($con, $_POST['ticketpriority']);
    $issue = mysqli_real_escape_string($con, $_POST['issue']);
    

    // Use prepared statement
    $query = $con->prepare("INSERT INTO tickets (name, email, phone, ticketsubject, ticketpriority, issue) VALUES (?, ?, ?, ?, ?, ?)");
    
    if (!$query) {
        die("Error in preparing the statement: " . $con->error);
    }

    $query->bind_param("ssssss", $name, $email, $phone, $ticketsubject, $ticketpriority, $issue);

    // Execute the prepared statement
    $result = $query->execute();

    if (!$result) {
        die("Error in executing the statement: " . $query->error);
    }

    // Close the prepared statement
    $query->close();

    if ($result) {
        $_SESSION['message'] = "Ticket created successfully";
        header("location: supporthome.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Ticket not created";
        header("location: create ticket.php");
        exit(0);
    }
}
?>
