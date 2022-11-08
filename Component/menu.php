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
            function menu() {
        ?>

        <div id='menu'>
            <form id='depot' method='post'>
                <input class='boutonMenu' type='submit' value='Depôt' />
            </form>

            <form id='affichageList' action='./Page/affichageListe/affichageListe.php' method='post'>
                <input class='boutonMenu' type='submit' value='Affichage liste' />
            </form>
    
            <form id='affichageDetails' action='./Page/affichageDetails/affichageDetails.php' method='post'>
                <input class='boutonMenu' type='submit' value='Affichage détails' />
            </form>

            <form id='inscription' action='./Page/inscription/inscription.php' method='post'>
                <input class='boutonMenu' type='submit' value='Inscription' />
            </form>

            <form id='connexion' action='./Page/connexion/connexion.php' method='post'>
                <input class='boutonMenu' type='submit' value='Connexion' />
            </form>
        </div>

        <h2 id='titrePrincipale' style='text-align:center;' >
            KARCHER
        </h2>

        <?php
            }
        ?>
        
    </body>
</html>
