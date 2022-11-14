

<!doctype html>

<html>

    <head>
        <title>KARCHER</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./menu.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>

        <?php function menu() { ?>
    
        <div id='menu'>
            <form id='depot' method='post' action="../../../karcher/index.php">
                <input class='boutonMenu' type='submit' value='Depôt' />
            </form>

            <form id='affichageList' action='../../../karcher/Page/affichageListe/affichageListe.php ' method='post'>
                <input class='boutonMenu' type='submit' value='Affichage liste' />
            </form>

        <?php if (array_key_exists('id', $_SESSION)) { ?>

            <form id='deconnexion' action='../../../karcher/Page/deconnexion.php' method='post'>
                <input class='boutonMenu' type='submit' value='Deconnexion' />
            </form>

                <?php echo $_SESSION['lastname'] ?>

        <?php } else { ?>

            <form id='inscription' action='../../../karcher/Page/inscription/inscription.php' method='post'>
                <input class='boutonMenu' type='submit' value='Inscription' />
            </form>

            <form id='connexion' action='../../../karcher/Page/connexion/connexion.php' method='post'>
                <input class='boutonMenu' type='submit' value='Connexion' />
            </form>
        </div>

        <?php } ?>

        <?php } ?>
        
    </body>
</html>
