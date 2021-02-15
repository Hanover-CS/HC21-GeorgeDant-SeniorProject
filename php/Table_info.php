<?php

    // Making a connection to the database 
    $conn = mysqli_connect('localhost', 'root', '', 'thepracticeplan');

    // Checking if connection was successful and if not, end the page
    if (! $conn) {
        die('Error Connecting to Database');
    }

    // Querying the database, interns table to retrieve all the records
    $result = mysqli_query($conn, "select * from players");

    // Checking if the records were found 
    if ($result) {
        // Looping through the records to show them on the page.
        // For easy way to view, we will use a html table here
        echo '<table><tr><th>S/N</th><th>username</th><th>password</th><th>Chks</th></tr>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr><td>' . $row['id'] . '</td>'; 
            echo '<td>' . $row['userName'] . '</td>'; 
            echo '<td>' . $row['password'] . '</td><';
            echo '<td>' . $row['chk_boxes'] . '</td></tr>'; 
        }
        echo '</table>';
    }
?>