

<!DOCTYPE html>

<?php
    include __DIR__ . "../../../Component/menu/menu.php";
?>


<html>

<head>

    <title>KARCHER</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="inscription.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

    <?php
        menu();
    ?>

    <div class="container">
        <div class="left">
            <div class="login">Connexion</div>
            <div class="eula">En vous connectant, vous acceptez les termes ridiculement longs que vous n'avez même pas pris la peine de lire.</div>
        </div>
        <div class="right">
            <div class="form">
                <form action="../Inscription/verif-inscription.php" method="post">
                    <?php
                    if (@$_GET['Empty'] == true) { ?>
                        <div class="succes"><?php echo $_GET['Empty'] ?></div>
                    <?php
                    } ?>
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" class="input-login" name="nom" placeholder="Boissy" required />
                    <label for="prenom">Prenom</label>
                    <input type="text" id="prenom" class="input-login" name="prenom" placeholder="Anthony" required />
                    <label for="email">E-mail</label>
                    <input type="email" id="email" class="input-login" name="email" placeholder="Exemple@gmail.com" required />
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" class="input-login" name="password" placeholder="********" required />
                    <button name="sub" type="submit" id="btn-submit" value="Submit">Valider</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>