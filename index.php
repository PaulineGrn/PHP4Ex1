<?php
// Déclaration de la fonction chains avec un paramètre name
function chains($name)
{
  // return pour demander d'afficher le nom
  return $name;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>PHP4Ex1</title>
</head>
<body>
  <!-- La variable name appelle la fonction chains avec son paramètre Igor -->
  <p>Bonjour <?php $name= chains('Igor');
  // Affichage de la variable name
  echo $name;
  ?> et <?php
  // Même fonctionnement que la première ligne
  $name=chains('Grichka');
  echo $name;
  ?></p>
</body>
</html>
