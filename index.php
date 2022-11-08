<!doctype html>

<?php
    require_once __DIR__."/Component/menu.php";

    require 'classes/Car.class.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") { 

    $product = new Car(
      $model = $_POST["model"],
      $brand = $_POST["brand"],
      $year = $_POST["year"],
      $price = $_POST["price"],
      $date = $_POST["date"],
      $image= $_POST["image"],
      $description = $_POST["description"],

    );

    var_dump($product);

    $dbh = new PDO("mysql:dbname=Karcher;host=127.0.0.1;port=8889", "root", "root");
 

}
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

<h1>Déposer une annonce</h1>
  <section class="section-products">
    <div class="container">
      <div class="row justify-content-center text-center">
        <form action="" method="POST">
          <input type="text" name="model" placeholder="model" required />
          <input type="text" name="brand" placeholder="brand" required />
          <input type="text" name="year" placeholder="year" required />
          <input type="text" name="price" placeholder="price" required />
          <input type="date" name="date" placeholder="date" required />
          <input type="text" name="image" placeholder="url de l'image" required />
          <textarea name="description"></textarea>
          <button type="submit">Déposer</button>
        </form>
      </div>
    </div>
  </section>



    </body>
</html>