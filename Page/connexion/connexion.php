<!doctype html>

<?php
    include __DIR__ . "/../../Component/menu/menu.php";
?>

</html>

<head>
    <title>Connectez-vous !</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="connexion.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

  <?php
    menu();
  ?>

  <div class="container">
    <div class="left">
      <div class="login">Connexion</div>
      <div class="eula">En vous connectant, vous acceptez les termes ridiculement longs que vous n'avez même pas pris la peine de lire.</div>
    </div>
    <div class="right">
      <div class="form">
      <form action="sessions.php" method="POST">
        <label for="email">E-mail</label>
        <input type="email" id="email" class="input-login" name="email" placeholder="Exemple@gmail.com" required />
        <label for="password">Mot de passe</label>
        <input type="password" id="password" class="input-login" name="password" placeholder="********" required />
        <button name="sub" type="submit" id="btn-submit" value="Submit" >Valider</button>
        </form>
      </div>
    </div>
  </div>
<!--  -->
</html>

