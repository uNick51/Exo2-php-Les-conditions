<!DOCTYPE HTML>
<html>
<head>
<title>Exemple</title>
</head>
<body>

<?php

$age = 17;
$genre = "homme";

$age = ($age >= 18) ? majeur : mineur;
$genre = ($genre == "homme") ? "un homme" : "une femme";
echo "Vous êtes ".$genre." et vous êtes ".$age;
?>

</body>
</html>
