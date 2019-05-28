<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title></title>
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
    <p>echo ($isOk) ? 'c'est ok !!' : 'c'est pas bon !!!';</p>
    <p class="b">
      <?php
      $isOk = false;
      if ($isOk) {
        echo "C'est ok !!";
      } else {
        echo "C'est pas bon !!";
      }
      ?>
    </p>
  </div>
</body>
</html>
