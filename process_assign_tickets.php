<?php
require 'dbcon.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ticket_id = $_POST['ticket_id'];
    $engineer_id = $_POST['engineer'];
    $due_date = $_POST['due_date'];

    // Perform the database update to assign the task
    $update_query = "UPDATE tickets SET assigned_engineer = $engineer_id, due_date = '$due_date' WHERE id = $ticket_id";
    $update_query_run = mysqli_query($con, $update_query);

    if ($update_query_run) {
        // Redirect to view_tickets.php with a success message
        header('Location: view_tickets.php?success=1');
        exit();
    } else {
        // Redirect to assign_task.php with an error message
        header('Location: assign_task.php?id=' . $ticket_id . '&error=1');
        exit();
    }
} else {
    // Redirect to assign_task.php with an error message
    header('Location: assign_task.php?id=' . $ticket_id . '&error=1');
    exit();
}
