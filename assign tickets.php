<?php
require 'dbcon.php';

if (isset($_GET['id'])) {
    $ticket_id = $_GET['id'];

    // Fetch ticket details from the database based on $ticket_id
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

// Fetch a list of engineers from the database
$engineers_query = "SELECT * FROM engineers";
$engineers_query_run = mysqli_query($con, $engineers_query);
$engineers = mysqli_fetch_all($engineers_query_run, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS and other meta tags -->
    <!-- ... -->
    <title>Assign Task</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Assign Task for Ticket #<?= $ticket['id'] ?></h2>

        <!-- Display ticket details here -->
        <p><strong>Name:</strong> <?= $ticket['name'] ?></p>
        <p><strong>Email:</strong> <?= $ticket['email'] ?></p>
        <!-- Add other ticket details as needed -->

        <form action="process_assign_task.php" method="post">
            <label for="engineer">Select Engineer:</label>
            <select name="engineer" id="engineer" required>
                <?php
                foreach ($engineers as $engineer) {
                    echo "<option value='{$engineer['id']}'>{$engineer['name']}</option>";
                }
                ?>
            </select>
            <br>
            <label for="due_date">Due Date:</label>
            <input type="date" name="due_date" id="due_date" required>
            <br>

            <input type="hidden" name="ticket_id" value="<?= $ticket['id'] ?>">
            <button type="submit" class="btn btn-primary">Assign Task</button>
        </form>

        <a href="view_tickets.php" class="btn btn-secondary">Back to Tickets</a>
    </div>
</body>
</html>
