<?php

    include ('connect.php');
    $getMatricule = $_GET['matricule'];
    $selectFromBd = "SELECT * FROM eemploye where matricule = '$getMatricule' ";
    $rest = mysqli_query ($connect, $selectFromBd);
        

?>