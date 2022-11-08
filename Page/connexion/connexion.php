<!doctype html>

</html>

<?php
    require __DIR__."/../../Component/menu2.php";
?>

<head>
    <title>KARCHER</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./connexion.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <?php menu2(); ?>
    <section>
        <h2>Connexion</h2>
            <form action="verification-connexion" method="POST">
                <input type="email" name="email" placeholder="email" required />
                <input type="password" name="password" placeholder="mot de passe" required />
                <button>Valider</button>
            </form>
    </section>
</body>

</html>

