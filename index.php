<?php session_start(); ?>

<!doctype html>

<?php
    include __DIR__ . "/Component/menu/menu.php";
?>
<html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./style.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>

        <?php 
            menu();
        ?>

        <!-- création formulaire pour déposer une  annonce-->
        
        <div class="page">
            <div class="container">
            <div class="left">
                <div class="title"> <br> <br> Votre annonce</div>
                <div class="textunder">Bienvenue chez Karcher !<br> La paletforme N°1 des enchères de voitures.</div>
            </div>
            <div class="right">
                <div class="form">
                    <div class="formLine1"> 
                        <div>
                            <label for="image">Image</label>
                            <input type="text" name="image" placeholder="url de l'image" required>
                        </div>
                        <div> 
                            <label for="model">Model</label>
                            <input type="text" name="model" placeholder="model" required>
                        </div>
                        <div> 
                            <label for="model">Brand</label>
                            <input type="text" name="brand" placeholder="brand" required>
                        </div>
                    </div>
                    <div class="formLine2"> 
                        <div> <label for="description">Description</label></div>
                        <div> <textarea name="description"></textarea></div>
                    </div>
                    <div class="formLine3"> 
                        <div> 
                        <label for="year">Year</label>
                        <input type="text" name="year" placeholder="year" required />
                        </div>
                        <div> 
                        <label for="time_limit">Time limit</label>
                        <input type="date" name="time_limit" class="time_limit" required />
                        </div>
                        <div> 
                        <label for="price">Price</label>
                        <input type="text" name="price" placeholder="price" required />
                        </div> 
                    </div>
                    <div class="boutonSubmit"><button type="submit" id="submit">Déposer</button></div>
                
                </div>
            </div>
            </div>
        </div>
    </body>
</html>