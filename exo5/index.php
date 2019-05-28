<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Exercice 5 partie 2</title>
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
    <p>Traduire ce code avec des if et des else : </p>
    <p>
      echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
    </p>
    <p class="b">
  <?php
  $gender = "Homme";
    if ($gender != 'Homme') {
      echo 'C\'est une développeuse';
    }
    else {
      echo 'C\'est un développeur !!!';
    }
  ?>
    </p>
    </div>

    </body>
    </html>
