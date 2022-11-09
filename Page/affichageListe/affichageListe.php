<!doctype html>

<?php
    require __DIR__."/../../Component/menu2.php";
    require __DIR__."/../../classes/Car.class.php";
?>

<html>

    <head>
        <title>KARCHER</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./affichageListe.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>

        <?php
            menu2();
        ?>

        <p id="center">AFFICHAGE LISTE</p>

        <section id="details">

            <?php
                $dbh = new PDO("mysql:dbname=karcher;host=127.0.0.1;port=8889", "root", "root");
                
                $dbh->beginTransaction();

                $auteur = $dbh->query("
                    SELECT *
                    FROM product
                ");

                $result = $auteur->fetchAll(PDO::FETCH_ASSOC);

                foreach ($result as $key => $voiture) {

                    echo "<section id='laura'>";
                    echo "<div id='affichage'>";

                    echo "<img src=" . $voiture['image'] . "> <br> <br>";
                    echo "Marque : " . $voiture['brand'] . "<br> <br>";
                    echo "Prix : " . $voiture['price'] . "<br> <br> <br>";
          
                    echo "<a id='lien' href='http://localhost:8888/karcher/Page/affichageDetails/affichageDetails.php?id=$key'>VOIR PLUS</a>";

                    echo "</div>";
                    echo "</section";

                }
            ?>

        </section>
        
        <?php
            //détails : image, modèle, marque, prix base, année, description, valeur enchère actuelle
        ?>
    </body>
</html>