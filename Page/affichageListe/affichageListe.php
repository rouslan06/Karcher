<?php session_start(); ?>

<!doctype html>

<?php
    require __DIR__."/../../Component/menu/menu.php";
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
            menu();
        ?>

        <section id="details">

            <?php
                $dbh = new PDO("mysql:dbname=karcher;host=127.0.0.1;port=8889", "root", "root");
                
                $dbh->beginTransaction();

                $auteur = $dbh->query("
                    SELECT *
                    FROM product
                ");

                $result = $auteur->fetchAll(PDO::FETCH_ASSOC);

                foreach ($result as $cle => $voiture) {

                    echo "<section id='bloc'>";
                    echo "<div id='affichage'>";

                    $key = $cle + 1;

                    echo "<div class='left'>";
                    echo "<p>Image non contractuelle</p>";
                    echo "<img src=" . $voiture['image'] . "> <br> <br>";
                    echo "</div>";

                    echo "<div class='right'>";
                    echo "Marque : " . $voiture['brand'] . "<br> <br>";
                    echo "Dernière offre en date : " . $voiture['price'] . " €" . "<br> <br> <br> <br>";
                    echo "<a id='lien' href='http://localhost:8888/karcher/Page/affichageDetails/affichageDetails.php?id=$key'>VOIR PLUS</a> <br> <br> <br> <br>";
                    echo "L'enchère prendra fin le : " . $voiture['time_limit'];
                    echo "</div>";

                    echo "</div>";
                    echo "</section";

                }

            ?>
        </section>
    </body>
</html>