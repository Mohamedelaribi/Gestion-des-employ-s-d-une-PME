<?php  $connect= @include ('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                </tr>
            </thead>
            <tbody>
                <?php
                $selectData ="SELECT * FROM employee";
                $result = mysqli_query($connect,$selectData);
                if($result){
                    while($showData = mysqli_fetch_array($result)){
                        echo '<tr>
                        <td>'.$selectData['matricule'].'</td>
                        </tr>';
                    }
                }
                ?>


            </tbody>
        </table>
</body>
</html>