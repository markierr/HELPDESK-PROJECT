<?php
require 'dbcon.php'

// Function to close a ticket
function closeTicket($conn, $id number);
{
    $closedAt = date('Y-m-d H:i:s');
    $query = "UPDATE tickets SET status = 'Closed', closed_at = '$closedAt' WHERE id = '$ticketId'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        return true; // Ticket closed successfully
    } else {
        return false; // Error closing ticket
    }
}

// Check if the form is submitted to close a ticket
if (isset($_POST['close_ticket'])) {
    $ticketId = $_POST['ticket_id'];

    // Call the closeTicket function
    $ticketClosed = closeTicket($conn, $ticketId);

    if ($ticketClosed) {
        echo '<script>alert("Ticket closed successfully!");</script>';
    } else {
        echo '<script>alert("Error closing ticket.");</script>';
    }
}

// Rest of your existing code for viewing and managing tickets...
?>

<!-- Your HTML code for displaying tickets and closing them -->
!doctype html>
<html lang="eng">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css"
          integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv"
          crossorigin="anonymous">

    <title>Ticket details</title>
</head>
<body>

<div class="">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> <!-- Corrected tag name to card-header -->
                    <h4>
                        view tickets
                        <a href="create ticket.php" class="btn btn-primary float-end">Create new ticket</a> <!-- Corrected syntax -->
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead> <!-- Added closing tag for the thead element -->
                            <tr>
                                <th>id number</th>
                                <th>name</th>
                                <th>phone</th>
                                <th>email</th>
                                <th>ticketsubject</th>
                                <th>ticketpriority</th>
                                <th>issue</th>
                                <th>date created</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        $query = "SELECT * FROM tickets";
                        $query_run = mysqli_query($con, $query);

                        if (mysqli_num_rows($query_run) > 0) { // Corrected syntax
                            foreach ($query_run as $tickets) {
                                ?>
                                <tr>
                                    <td><?= $tickets['id number']; ?></td>
                                    <td><?= $tickets['name']; ?></td>
                                    <td><?= $tickets['phone']; ?></td>
                                    <td><?= $tickets['email']; ?></td>
                                    <td><?= $tickets['ticketsubject']; ?></td>
                                    <td><?= $tickets['ticketpriority']; ?></td>
                                    <td><?= $tickets['issue']; ?></td>
                                    <td><?= $tickets['date created']; ?></td>
                                        

                                    <!-- You are missing the date created and action columns in this table row -->
                                </tr>
                            <?php
                            }
                        } else {
                            echo "<h5>no record found</h5>";
                        }
                        ?>
                        <tr>
                            <td>

                            </td>
                        </tr>

                        </tbody>
                    </table> <!-- Moved the closing div tag to the end of the table -->
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
