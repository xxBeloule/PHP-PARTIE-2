<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Partie 2 exercice 6</title>
    <style media="screen">
    .div {
      background-color: grey;
      font-weight: 400;
      border: 3px solid black;
      margin: 20px;
      padding: 20px;
      text-align: center;
      border-radius: 200px;
      font-weight: bolder;
    }
    .b {
      color: white;
    }
    </style>
  </head>
  <body>
    <div class="div">
      <h1>Traduire ce code avec des if et des else :</h1>
      <p>echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';</p>
      <p class="b">
        <?php
        $age = 18;
        if ($age >=18)
        {
          echo 'Tu es majeur';
        } else {
          echo 'Tu n\'es pas majeur';
        }
         ?>
      </p>
    </div>
  </body>
</html>
