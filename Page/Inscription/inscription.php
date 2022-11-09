<!DOCTYPE html>

<?php
require __DIR__ . "/../../Component/menu2.php";

?>

<html>

<head>

    <title>KARCHER</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./inscription.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>

<body>

    <?php menu2(); ?>

    <section>
        <form action="../Inscription/verif-inscription" method="post">
            <input type="text" name="nom" placeholder="nom" required />
            <input type="text" name="prenom" placeholder="prenom" required />
            <input type="email" name="email" placeholder="email" required />
            <input type="password" name="password" placeholder="mot de passe" required />
            <button type="submit" >Valider</button>
        </form>
    </section>

</body>

</html>