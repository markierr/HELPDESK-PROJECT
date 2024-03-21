<?php
require 'dbcon.php';

if (isset($_GET['id'])) {
    $ticket_id = $_GET['id'];
    
    $query = "SELECT * FROM tickets WHERE id = $ticket_id";
    $query_run = mysqli_query($con, $query);

    if (mysqli_num_rows($query_run) > 0) {
        $ticket = mysqli_fetch_assoc($query_run);
    } else {
        // Redirect to view_tickets.php or handle the case where the ticket is not found
        header('Location: view_tickets.php');
        exit();
    }
} else {
    // Redirect to view_tickets.php or handle the case where the ticket ID is not provided
    header('Location: view_tickets.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS and other meta tags -->
    <!-- ... -->
    <title>Ticket Details</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Ticket Details</h2>

        <p><strong>ID:</strong> <?= $ticket['id'] ?></p>
        <p><strong>Name:</strong> <?= $ticket['name'] ?></p>
        <p><strong>Email:</strong> <?= $ticket['email'] ?></p>
        <!-- Add other ticket details as needed -->

        <a href="view_tickets.php" class="btn btn-secondary">Back to Tickets</a>
    </div>
</body>
</html>
