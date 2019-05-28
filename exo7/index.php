<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Partie 2 exercice 7</title>
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
    <p>echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';</p>
    <p class="b">
      <?php
        $isok = true;
      if ($isok == false)
      {
        echo "C'est pas bon !!!";
      } else {
        echo "C'est ok !!!";
      }
      ?>
    </p>
  </div>
</body>
</html>
