
<?php include('designPage/header.php');?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
        <form class="form-inline">
        <div class="form-group">
            <label for="Name">Nom:</label>
            <input type="text" class="form-control" id="Name" name="name" placeholder="Nom d'employe">
        </div>

        <div class="form-group">
            <label for="Last_Name">Prenom:</label>
            <input type="text" class="form-control" id="Last_Name" name="prenome" placeholder="Prenom d'employe">
        </div>

        <div class="form-group">
            <label for="Date">Date De Naissance:</label>
            <input type="date" class="form-control" id="Date" name="date">
        </div>

        <div class="form-group">
            <label for="Last_Name">Département:</label>
            <input type="text" class="form-control" id="Département" name="departement" placeholder="Département">
        </div>
        <div class="form-group">
            <label for="salaire">Salaire:</label>
            <input type="number" class="form-control" id="salaire" name="salaire">
        </div>

        <div class="form-group">
            <label for="fonction">Fonction:</label>
            <input type="text" class="form-control" id="fonction" placeholder="fonction">
        </div>
        
        <button type="submit" name="éditer" class="btn btn-primary">ÉDITER</button>
        </form>
    
</body>
</html>
<?php

    include ('connect.php');
     
    // $selectFromBd = "UPDATE eemploye SET matricule = 'getMatricule'";

    if(isset($_POST['éditer'])){
        $Name = $_POST['name'];
        $Prenom = $_POST['prenome'];
        $Date = $_POST['date'];
        $Departement = $_POST['departement'];
        $Salaire = $_POST['salaire'];
        $Fonction = $_POST['fonction'];
        $getMatricule = $_POST['éditer'];

        // $Data = $Name,$Prenom,$Date,$Departement,$Salaire,$Fonction;

        $editerData = $connect->prepare("UPDATE eemploye SET matricule =:matricule");

        $editerData->bindParam("matricule",$getMatricule);
        if($editerData->execute()){
            header("location:index.php");
        }

    }

?>