<?php
include('connect.php');
    if(isset($_POST['susppemerData'])){
        $removeData = $connect->prepare("DELETE FROM eemploye WHERE matricule = :matricule");
        $getMatricule=$_POST['susppemerData'];
        $removeData->bindParam("matricule",$getMatricule);
        if($removeData->execute()){
            header("location:index.php");
        }
    }
?>