<!doctype html>

<?php
    require __DIR__."/../../Component/menu2.php";
    //require __DIR__."/../affichageListe/affichageListe.php";
?>

<html>

    <head>
        <title>KARCHER</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./affichageDetails.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>

        <?php
            menu2();
        ?>

        <p id="center">AFFICHAGE DETAILS</p>

        <section id="formulaire">
            <?php
                $id = htmlspecialchars($_POST["id"]);

                $dbh = new PDO("mysql:dbname=karcher;host=127.0.0.1;port=8889", "root", "root");

                $dbh->beginTransaction();

                $auteur = $dbh->query("
                    SELECT *
                    FROM product 
                    WHERE id=$id
                ");

                $result = $auteur->fetchAll(PDO::FETCH_ASSOC);

                foreach ($result as $key => $voiture) {

                    echo "<section id='laura2'>";
                    echo "<div id='affichage2'>";

                    echo "<p name='id' value='" . $key . " '> ";
                    echo "<img src=" . $voiture['image'] . "> <br> <br>";
                    echo "Modèle : " . $voiture['model'] . "<br> <br>";
                    echo "Marque : " . $voiture['brand'] . "<br> <br>";
                    echo "Années : " . $voiture['year'] . "<br> <br>";
                    echo "Prix : " . $voiture['price'] . "<br> <br>";
                    echo "Description : " . '<br> <br>' . $voiture['description'] . "<br> <br>";
    
                    echo "</div>";
                    echo "</section";

                }
            ?>
        </section>
    </body>
</html>