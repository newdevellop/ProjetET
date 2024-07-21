<?php

$dsn = 'localhost'
$username = 'root'
$password = 'root'


try{
    $pdo = new PDO($dsn, $username, $password);
    $pdo ->setAttribute(PDO::ATTR_MODE, PDO::ERRMODE_EXCEPTION);

    $email = $_POST["email"];
    $password = $_POST["password"];
    
}

catch(PDOException $e){
    echo "Impossible de traiter les données"
}

$insertquery = INSERT INTO () array_values();

$hashpassword = password_hash($passwordform, PASSWORD_DEFAULT)

$query = SELECT*FROM users WHERE email=:
$stmt = $pdo-> prepare($query)
$stmt -> bindparam(':email', $emailForm)
$stmt -> execute()

if($stmt -> rowcount() > 0){
    die "L'adresse est deja utilisé"
}

else { "utilisateur correct"
}