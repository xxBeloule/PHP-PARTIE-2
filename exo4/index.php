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
    <p> L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.
      Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.</p>
      <p class="b">
        <?php
        $magnitude = 3;
        switch ($magnitude) {
          case '1':
          echo "Micro-séisme impossible à ressentir.";
          break;
          case '2':
          echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
          break;
          case '3':
          echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
          break;
          case '4':
          echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
          break;
          case '5':
          echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
          break;
          case '6':
          echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
          break;
          case '7':
          echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
          break;
          case '8':
          echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
          break;
          case '9':
          echo "Séisme capable de tout détruire sur une très vaste zone.";
          break;
        }
        ?> </p>
      </div>

    </body>
    </html>
