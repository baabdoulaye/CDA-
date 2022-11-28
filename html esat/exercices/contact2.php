<?php

require_once("./contact_2.php");


$nom = ($_POST["Nom"]);
$prenom = ($_POST["Prénom"]);
$ville = ($_POST["Ville"]);
$message = ($_POST["Message"]);
$genre = ($_POST["genre"]);

echo $nom . "<br>";
echo $prenom . "<br>";
echo $ville . "<br>";
echo $message . "<br>";
echo $genre . "<br>";

print_r($_POST);
