<?php  
    include("config.php");  

    $checkbox1 = $_POST['days'];  

    if (isset($_POST['submit'])) {  
        for ($i=0; $i<sizeof ($checkbox1);$i++) {  
        $query = mysqli_query($conn, "INSERT INTO players(chk_boxes) VALUES ('".$checkboxl[$i]."') WHERE username ='" . $_POST["userName"] . "'");
        }
        if($query == TRUE){
            echo "<script> location.assign('../html/Player_schedule_creator.html'); </script>";
        }
        else {
            echo "<script> location.assign('../html/Player_schedule_creator.html'); </script>";
        }
    } 
?> 