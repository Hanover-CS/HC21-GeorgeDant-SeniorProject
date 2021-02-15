<?php

    // Making a connection to the database 
    $conn = mysqli_connect('localhost', 'root', '', 'thepracticeplan');

    // Checking if connection was successful and if not, end the page
    if (! $conn) {
        die('Error Connecting to Database');
    }
?>