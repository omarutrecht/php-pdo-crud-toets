<?php

require('config.php');

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    if ($pdo) {
        echo "de verbinding is gelukt";
    } else {
        echo "Intere server-error";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}


$sql = "SELECT Id
               ,Merk
               ,Model
               ,Topsnelheid
               ,Prijs
         FROM `auto` ORDER BY Prijs DESC";

$statement =  $pdo->prepare($sql);

$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_OBJ);

//var_dump($result);

$row = "";
foreach ($result as $info) {
    $row .= "<tr>
            <td>$info->Merk</td>
            <td>$info->Model</td>
            <td>$info->Topsnelheid</td>
            <td>$info->Prijs</td>

            <td>
                <a href= 'delete.php?id=$info->Id'>
                    <img src='img/b_drop.png' alt='kruis'>
                   </a>
                   </td>
                 ";
}









?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <h3>duuste autos</h3>

        <table border="1">
            <thead>
                
                <th>Merk</th>
                <th>Model</th>
                <th>Topsnelheid</th>
                <th>Prijs</th>
                <th>delete  </th>
            </thead>
            <tbody>
                <?= $row ?>
            </tbody>
        </table>

    </body>

    </html>