<?php

$dsn = "localhost";
$username = "root";
$password = "root";


try{
    $pdo = new PDO($dsn, $username, $password);
    $pdo ->setAttribute(PDO::ATTR_MODE, PDO::ERRMODE_EXCEPTION);

    $nameForm = $_POST['name'];
    $surnameForm = $_POST['surname'];
    $pseudoForm = $_POST['pseudo'];
    $emailForm = $_POST["email"];
    $passwordForm = $_POST["password"];

    $query = "SELECT * FROM users WHERE email =: email";
    $stmt = $pdo-> prepare($query);
    $stmt-> bindParam(':email', $email);
    $stmt-> execute();

    if($stmt->rowCount() > 0){
        die("Cette adresse mail est deja utilisé");
    }

    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

    $Insertquery = "INSERT INTO users (pseudo, name, surname, email, password) from (:pseudo, :name, :surname, :email, :password)";
    $stmt = $pdo-> prepare($query);
    $stmt-> bindParam(':pseudo', $pseudoForm);
    $stmt-> bindParam(':name', $nameForm);
    $stmt-> bindParam(':surname', $surnameForm);
    $stmt-> bindParam(':email', $emailForm);
    $stmt-> bindParam(':password', $passwordForm);
    $stmt-> execute();

    echo "Inscription réussie ! ";
}

catch(PDOException $e){
    echo "Erreur lors de l'inscription" . $e->getMessage();
}

?>