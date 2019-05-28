<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>PHP partie II exo III</title>
  <style media="screen">
  .div {
    background-color: blue;
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
    <p>Créer deux variables age et gender. La variable gender peut prendre comme valeur :<br>

      Homme<br>
      Femme<br>

      <p> En fonction de l'âge et du genre afficher la phrase correspondante :</p>

      Vous êtes un homme et vous êtes majeur<br>
      Vous êtes un homme et vous êtes mineur<br>
      Vous êtes une femme et vous êtes majeur<br>
      Vous êtes une femme et vous êtes mineur<br>

      Gérer tous les cas.</p>
      <p class="b">
      <?php
      $gender = "homme";
      $age = 20;

      if ($gender == "femme")
      {
        echo "Vous êtes une femme ";
        if ($age > 18) {
          echo "majeur";
        }
        else {
          echo "mineur";
        }
      }
      else
      {
        echo "Vous êtes un homme ";
        if ($age > 18)
        {
          echo "majeur";
        } else
         {
           echo "mineur";
         }
      }
      ?>
    </p>
    </div>

  </body>
  </html>
