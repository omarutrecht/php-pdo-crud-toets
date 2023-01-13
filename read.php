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
               ,naam
               ,vermogen
               ,leeftijd
               ,bedrijf
         FROM richestpeople ORDER BY vermogen DESC";

$statement =  $pdo->prepare($sql);

$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_OBJ);

//var_dump($result);

$row = "";
foreach ($result as $info) {
    $row .= "<tr>
            <td>$info->Id</td>
            <td>$info->naam</td>
            <td>$info->vermogen</td>
            <td>$info->leeftijd</td>
            <td>$info->bedrijf</td>

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

    <h3>persoongegevens</h3>

    <a href="index.php">
        <input type="button" value="Nieuw record">
    </a>

    <table border="1">
        <thead>
            <th>id</th>
            <th>naam</th>
            <th>vermogen</th>
            <th>leeftijd</th>
            <th>bedrijf</th>
            <th>delete  </th>
        </thead>
        <tbody>
            <?= $row ?>
        </tbody>
    </table>

</body>

</html>