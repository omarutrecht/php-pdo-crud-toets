<?php

require('config.php');

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, 'root', $dbPass);
    if ($pdo) {
     //   echo "er is iets verbinding met de sql server";
    } else {
        echo "error";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

$sql = "INSERT INTO php-pdo-crud-toets (id
                            ,merk
                            ,model
                            ,topsnelheid) 
        VALUES               (NULL
                            ,:prijs";

$statement = $pdo->prepare($sql);

$statement->bindValue(':merk', $_POST['firstname'], PDO::PARAM_STR);
$statement->bindValue(':model', $_POST['infix'], PDO::PARAM_STR);
$statement->bindValue(':achternaam', $_POST['lastname'], PDO::PARAM_STR);

$result = $statement->execute();

if ($result) {
    echo "er is een nieuwe record gemaakt in de database";
    header('Refresh:0.5; url=read.php');
}else {
    echo "er is een geen nieuwe record gemaakt";
    header('Refresh:0.5; url=read.php');
}