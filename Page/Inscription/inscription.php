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
        <form action="../../index.php" method="POST">
            <input type="text" name="lastname" placeholder="nom" required />
            <input type="text" name="firstname" placeholder="prenom" required />
            <input type="email" name="email" placeholder="email" required />
            <input type="password" name="password" placeholder="mot de passe" required />
            <input type="password" name="confirm" placeholder="confirmer votre mot de passe" required />
            <button>Valider</button>
        </form>
    </section>

</body>

</html>