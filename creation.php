<!DOCTYPE html>
<html>
    <head>
        <title>Inscription</title>
    </head>

    <body>
        <?php

        if(isset $_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
        }

        if(($email =! 0) && ($password =! 0){
            echo "Inscription réussie"
        }
        else {
            echo "Veuillez completer"
        }
        ?>
        <p>Dans ce formulaire, veuillez completer avec les informations ci-dessous</p>

        <form method="POST" action="">
            <label for="name">Votre nom : </label>
            <input type="text">
            <label for="name">Votre prenom : </label>
            <input type="text">
            <label for="email">Votre adresse e-mail : </label>
            <input>
            <label for>Votre mot de passe : </label>
            <input type="text">
            <input type="submit">

        </form>
    </body>
</html>

<?php

