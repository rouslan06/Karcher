<!doctype html>

<?php
    require __DIR__."/../../Component/menu2.php";
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
                $id = htmlspecialchars($_GET["id"]);

                $dbh = new PDO("mysql:dbname=karcher;host=127.0.0.1;port=8889", "root", "root");

                $dbh->beginTransaction();

                $auteur = $dbh->query("
                    SELECT *
                    FROM product 
                    WHERE id=$id
                ");

                if ($_SERVER["REQUEST_METHOD"] == "POST") { 

                    $newPrice = $_POST["price"];
            
                    $dbh = new PDO("mysql:dbname=karcher;host=127.0.0.1;port=8889", "root", "root");
            
                    $query = $dbh->prepare("SELECT price FROM `product` WHERE  price = :price");
                    $query->execute([$newPrice]);
                }

                $result = $auteur->fetchAll(PDO::FETCH_ASSOC);

                foreach ($result as $key => $voiture) {

                    echo "<section id='laura2'>";
                    echo "<div id='affichage2'>";

                    echo "<img src=" . $voiture['image'] . "> <br> <br>";
                    echo "Marque : " . $voiture['brand'] . "<br> <br>";
                    echo "Modèle : " . $voiture['model'] . "<br> <br>";
                    echo "Années : " . $voiture['year'] . "<br> <br>";

                    echo "<div id='bloc'>";

                    echo "<div id='enchere'>";
                    echo "ENCHERE ACTUEL";
                    echo "<p id='prix'>" . $voiture['price'] . " €" . "</p>";
                    echo "</div>";

                    echo "<div id='encherir'>";
                    echo "ENCHERIR";
                    /*******************************************************/

                    echo "<form action='' method='post'>";
                    echo "<input name='price' type='number' id='prix2' placeholder='Votre prix'>" . "</input>";
                    echo "<input type='submit' value='VALIDER'/>";
                    echo "</form>";

                    /*******************************************************/
                    echo "</div>";

                    echo "</div>";

                    echo "DESCRIPTION" . '<br> <br>' . $voiture['description'] . "<br> <br> <br>";
    
                    echo "<a id='lien' href='http://localhost:8888/karcher/Page/affichageListe/affichageListe.php'>RETOUR</a>";

                    echo "</div>";
                    echo "</section";

                }
            ?>
        </section>
    </body>
</html>