  <?php include('designPage/header.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>gestion  de personne</title> 
</head>
<body>
    <div class="form">
        <form  method="post">
            <div class="mb-3">
                <label for="matricule" class="form-label">matricule:</label>
                <input type="text" class="form-control input" id="matricule" name="matricule" placeholder="matricule">
            
            </div>
            <div class="mb-3">
                <label for="nom" class="form-label">Nom de l'employe:</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="nom">
            </div>
            <div class="mb-3">
                <label class="form-label" for="prénom">Prénom de l'employe:</label>
                <input type="text" class="form-control" id="prénom" name="prénom" placeholder="prénom">
                
            </div>
            <div class="mb-3">
                <label for="date de naissance" class="form-label">Date De Naissance:</label>
                <input type="date" class="form-control" id="date de naissance" name="dateNaissance" placeholder="date de naissance">
            
            </div>
            <div class="mb-3">
                <label for="nom" class="form-label">Département:</label>
                <input type="text" class="form-control" id="département" name="département" placeholder="nodépartementm">
            </div>
            <div class="mb-3">
                <label class="form-label" for="salaire">Salaire:</label>
                <input type="number" class="form-control" id="salaire" name="salaire" placeholder="salaire">
            </div>
            <div class="mb-3">
                <label class="form-label" for="Function">Function:</label>
                <input type="text" class="form-control" id="Function" name="Function" placeholder="Function">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>



    
</body>
</html>
<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $matricule = $_POST["matricule"];
  $Name = $_POST["nom"];
  $Prenom = $_POST["prénom"];
  $dateNaissance = $_POST["dateNaissance"];
  $depar = $_POST["département"];
  $salaire = $_POST["salaire"];
  $Function = $_POST["Function"];
  $addData = $connect ->prepare (" INSERT INTO eemploye(matricule,nom,prenom,dateNaissance,departement,salaire,fonction) VALUES('$matricule','$Name','$Prenom','$dateNaissance','$depar','$salaire','$Function')");
  $addData->execute();  
  } 
  ?>   


    