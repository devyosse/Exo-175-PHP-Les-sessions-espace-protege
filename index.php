<?php

if (isset($_GET['e']) == 0){
    ?><p>Erreur mot de passe !!!</p><?php
}?>

    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
    <h1>Entre ton identifiant</h1>

    <form action="./php/secu.php" method="post">

        <label for="pass-id">Mot de passe:</label>
        <input type="password" name="pass" id="pass-id" required>

        <input type="submit" value="send" name="submit">

    </form>

    </body>
    </html>

