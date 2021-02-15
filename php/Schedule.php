<?php  
    include("config.php");  
    
    $Days = isset($_POST ['Days']) ? $_POST ['Days'] : array ();
    $concatenate = implode(",", $Days);

    if (isset($_POST['submit'])) {  
        echo '<script>alert("something")</script>'; 
        for ($i=0; $i<sizeof ($Days);$i++) {  
        $query = mysqli_query($concatenate, "INSERT INTO players (chk_boxes) VALUES ('".$Days[$i]."') WHERE username ='" . $_POST["userName"] . "'");
        }
        if($query == TRUE){
            echo "<script> location.assign('../html/Player_schedule_creator.html'); </script>";
        }
        else {
            echo "<script> location.assign('../html/Player_schedule_creator.html'); </script>";
        }
    } 
?> 