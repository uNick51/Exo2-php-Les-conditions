<!DOCTYPE HTML>
<html>
<head>
<title>Exemple</title>
</head>
<body>

  <?php

  // -----------Exercice1------------
  $age = 38;
  if ($age >= 18) {
      echo "Vous êtes majeur.";
  }
  else {
      echo "Vous êtes mineur.";
  }

  // // -----------Exercice2------------
  $age = 17;
  $genre = "homme";

  $age = ($age >= 18) ? majeur : mineur;
  $genre = ($genre == "homme") ? "un homme" : "une femme";
  echo "Vous êtes ".$genre." et vous êtes ".$age;

  // // -----------Exercice3------------
  $maVariable = "homme";
  if ($maVariable=="homme") {
    echo "C\'est un développeur !!!";
  }else {
    echo "C\'est une développeuse !!!";
  }

  // // -----------Exercice4------------
  $monAge = 8;
  if ($monAge>=18) {
    echo "Tu es majeur";
  }else {
    echo "Tu n'es pas majeur";
  }

  // // -----------Exercice5------------
  $maVariable = false;
  if ($maVariable== false) {
    echo "c'est ok !!";
  }else {
    echo "c'est pas bon !!!";
  }

  // // -----------Exercice6------------
  $maVariable = "";
  if ($maVariable== "") {
    echo "c'est ok !!";
  }else {
    echo "c'est pas bon !!!";
  }
  ?>

</body>
</html>
