<?php session_start()?>

<!doctype html>

<?php
    require __DIR__."/../../Component/menu/menu.php";
?>

<html>

    <head>
        <title>KARCHER</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./affichageDetails.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>

        <?ph-=
            menu();
        ?>

        <section id="formulaire">
            <?php
                $id = htmlspecialchars($_GET["id"]);

                $dbh = new PDO("mysql:dbname=karcher;host=127.0.0.1", "root", "");

                $dbh->beginTransaction();

                $auteur = $dbh->query("
                    SELECT *
                    FROM product 
                    WHERE id=$id
                ");
            
                $result = $auteur->fetchAll(PDO::FETCH_ASSOC);

                foreach ($result as $voiture) {

                    echo "<section id='laura2'>";
                    echo "<div id='affichage2'>";

                    echo "<img src=" . $voiture['image'] . "> <br> <br>";
                    echo "Marque : " . $voiture['brand'] . "<br> <br>";
                    echo "Modèle : " . $voiture['model'] . "<br> <br>";
                    echo "Années : " . $voiture['year'] . "<br> <br>";

                    echo "<div id='bloc'>";
                    /*******************************************************/
                    echo "<div id='enchere'>";
                    echo "ENCHERE ACTUEL";
                    echo "<p id='derniereOffre'>" . $voiture['price'] . " €" . "</p>";
                    echo "</div>";
                    /*******************************************************/

                    /*******************************************************/ 
                    echo "<div id='encherir'>";
                    echo "ENCHERIR";
                    // condition : egal ou sup+1 car doit etre forcément supérieur au montant de l'enchère
                    $bla = $voiture['price'];
                    $valeurSup = $bla + 1;

                    echo "<form action='http://localhost/karcher/Page/affichageDetails/nouveauPrix.php?id=$id' method='post'>";
                    echo "<input name='Input' min=$valeurSup type='number' id='inputPrix' placeholder='Votre prix'>" . "</input>";
                    echo "<input id='btnEnvoyer' type='submit' value='VALIDER'/>";
                    echo "</form>";
                    /*******************************************************/
                    echo "</div>";

                    echo "</div>";

                    echo "DESCRIPTION" . '<br> <br>' . $voiture['description'] . "<br> <br> <br>";
    
                    echo "<a id='lien' href='http://localhost/karcher/Page/affichageListe/affichageListe.php'>RETOUR</a>";

                    echo "</div>";
                    echo "</section";

                }
            ?>
        </section>
    </body>
</html>