<!doctype html>

<?php
    require_once __DIR__."/Component/menu.php";
?>

<html>

    <head>
        <title>KARCHER</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./index.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>

        <?php
            menu();
        ?>
<!-- création formulaire pour déposer une  annonce-->

        
        <section class="section-annonce">
            <h1>Déposer une annonce</h1>
            <div class="container">
            <div class="row justify-content-center text-center">
                <form action="product.php" method="POST">
                <input type="text" name="image" placeholder="url de l'image" required />
                <input type="text" name="model" placeholder="model" required />
                <input type="text" name="brand" placeholder="brand" required />
                <textarea name="description"></textarea>
                <input type="text" name="year" placeholder="year" required />
                <input type="date" name="time_limit" placeholder="time_limit" required />
                <input type="text" name="price" placeholder="price" required />
                <button type="submit" >Déposer</button>
                </form>
            </div>
            </div>
        </section>


    </body>
</html>