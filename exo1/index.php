<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>PHP PARTIE II EXO I</title>
    <style media="screen">
    .div {
      background-color: blue;
      font-weight: 400;
      border: 3px solid black;
      margin: 20px;
      padding: 20px;
      text-align: center;
      border-radius: 200px;
      color: white;
      font-weight: bolder;
    }
    p {
      color: black;
    }
    </style>
  </head>
  <body>
    <div class="div">
      <p>Créer une variable age et l'initialiser avec une valeur.
        Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.</p>
        <?php
        $age = 20;
        if ($age < 18)
        {
          echo "Vous etes mineur<br>";
          echo $age . " ans";
        } else {
          echo "Vous êtes majeur <br>";
          echo $age . " ans";
        }

        ?>
    </div>

  </body>
</html>
