<?php
    include("config.php");

    if(count($_POST)>0) {
        $result = mysqli_query($conn,"select * from players where username ='" . $_POST["userName"] . "' and password = '". $_POST["password"]."'");
	    $count  = mysqli_num_rows($result);
	    if($count==0) {
            echo '<script>alert("Invalid Username or Password!")</script>';
            echo "<script> location.assign('../html/Login.html'); </script>"; 
        } else if($count != 0 && $_POST['userName']!='Coach_1') {
            echo '<script>alert("Successful Login!")</script>'; 
            echo "<script> location.assign('../html/Player_menu.html'); </script>";
            session_start();
            $_SESSION['logged']=true;
            $_SESSION['username']= $_POST["userName"];
        }
        else {
            echo '<script>alert("Successful Login!")</script>'; 
            echo "<script> location.assign('../html/Coach_menu.html'); </script>";
            session_start();
            $_SESSION['logged']=true;
            $_SESSION['username']= $_POST["userName"];
        }
    }
?>
