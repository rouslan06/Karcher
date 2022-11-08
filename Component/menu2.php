<!doctype html>

<html>

    <head>
        <title>KARCHER</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="Component/menu.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>

        <?php
            function menu2() {
        ?>

        <div id='menu'>
            <form id='depot' action='../../index.php' method='post'>
                <input class='boutonMenu' type='submit' value='Dépôt' />
            </form>

            <form id='affichageListe' action='../affichageListe/affichageListe.php' method='post'>
                <input class='boutonMenu' type='submit' value='Affichage liste' />
            </form>
    
            <form id='AffichageDetails' action='../affichageDetails/affichageDetails.php' method='post'>
                <input class='boutonMenu' type='submit' value='Affichage détails' />
            </form>

            <form id='Inscription' action='../inscription/inscription.php' method='post'>
                <input class='boutonMenu' type='submit' value='Inscription' />
            </form>

            <form id='Connexion' action='../connexion/connexion.php' method='post'>
                <input class='boutonMenu' type='submit' value='Connexion' />
            </form>
        </div>

        <h2 id='titrePrincipale2' style='text-align:center;'>
            KARCHER
        </h2>

        <?php
            }
        ?>
        
    </body>
</html>