<?php include('designPage/header.php');?>
<?php  

    $connect= include ('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">

    <title>liste De L'employe</title>
</head>
<body>
    <table class="table table-dark table-hover">
                <thead>
                <tr>
                <th scope="col">matricule</th>
                <th scope="col">nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Date De Naissance</th>
                <th scope="col">Département</th>
                <th scope="col">salaires</th>
                <th scope="col">fonction</th>
                <th scope="col">photo</th>
                <th scope="col">éditer/supprimer</th>
                </tr>
            </thead>
            <tbody>
<?php
                
                include('connect.php');
                $selectData = $connect->prepare("SELECT * FROM eemploye");
                $selectData->execute();
                foreach($selectData as $result){
                        echo '<tr>
                        <td>'.$result['matricule'].'</td>
                        <td>'.$result['nom'].'</td>
                        <td>'.$result['prenom'].'</td>
                        <td>'.$result['dateNaissance'].'</td>
                        <td>'.$result['departement'].'</td>
                        <td>'.$result['salaire'].'</td>
                        <td>'.$result['fonction'].'</td>
                        <td>'.$result['photo'].'</td>
                        <td>
                            <a href="éditer.php?matricule='.$result['matricule'].'" class="btn btn-warning ">Editer</a>
                            <form action="suppremer.php" method="POST">
                            <button class="btn btn-warning" type="submit" name="susppemerData" value="'.$result['matricule'].'">suppremer</button>
                            </form>
                        </td>
                        </tr>';
                }


                ?>


            </tbody>
        </table>
</body>
</html>