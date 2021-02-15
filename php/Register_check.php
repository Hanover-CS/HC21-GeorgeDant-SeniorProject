<?php
    include("config.php");

    // REGISTER USER
    if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($conn, $_POST['userName']);
    $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
    }

    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM players WHERE username='$username' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    

    if ($user['userName'] === $username) {
        echo '<script>alert("User already exists.")</script>';
        echo "<script> location.assign('../html/Register.html'); </script>";
    }
    else {
        // Finally, register user
        $query = "INSERT INTO `players` (`id`, `userName`, `password`, `chk_boxes`) VALUES (NULL, $username, $password_1, '')";
        mysqli_query($conn, $query);
        $_SESSION['userName'] = $username;
        $_SESSION['success'] = "You are now registered";
        header('location: ../html/Login.html');
    }
?>