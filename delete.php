<?php



require('config.php');

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try{
    $pdo =new PDO($dsn,$dbUser,$dbPass);
    if ($pdo) {
        echo "verbinding is gelukt";
    } else {
        echo "Interne server-error";
    }
}catch(PDOException $e) {
    $e->getMessage();
}

$sql = "DELETE FROM Persoon
        WHERE id= :id ";

$statement = $pdo->prepare($sql);

$statement->bindValue('id',$_GET['id'], PDO::PARAM_INT);


$result = $statement->execute();


if ($result){
    echo "het record is verwijderd";
    header ('Refresh:1; url=read.php');
} else {
    echo "het record is niet verwijderd";
    header('Refresh:1; url=read.php');
}









