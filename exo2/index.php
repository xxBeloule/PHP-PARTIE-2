<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title></title>
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
    <p>Créer une variable isEasy de type booléan et l'initialiser avec une valeur.
      Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.
      Bonus : L'écrire de deux manières différentes.</p>
      <?php
      $isEasy = true;

      if ($isEasy = true)
      {
        echo "C'est facile !!";
      }
      else
      {
        echo "C'est difficile";
      }
      ?>
    </div>

  </body>
  </html>
