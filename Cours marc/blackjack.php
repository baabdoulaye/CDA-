<?php

//je commence d'abord par attribuer la valeur 10 aux 4 cartes spéciales

$Roi = 10;
$Dame = 10;
$Valet = 10;
$As = 10;

//ensuite je définis un tableau dans lequel je répertorie toutes les cartes

$Cartes = ['2', '3', '4', '5', '6', '7', '8', '9', '10', $Roi, $Dame, $Valet, $As];

//l'utilisateur pioche 2 cartes au hasard

$première_carte_tirée_par_lutilisateur = rand(intval($Cartes));
$deuxième_carte_tirée_par_lutilisateur = rand(intval($Cartes));

//la banque pioche 2 cartes au hasard

$première_carte_tirée_par_la_banque = rand(intval($Cartes));
$deuxième_carte_tirée_par_la_banque = rand(intval($Cartes));

// je définis la variable qui s'occupera d'additionner les 2 cartes de la banque

$somme_cartes_banque = $première_carte_tirée_par_la_banque + $deuxième_carte_tirée_par_la_banque;

// je définis la variable qui s'occupera d'additionner les 2 cartes de l'utilisateur 

$somme_cartes_utilisateur = $première_carte_tirée_par_lutilisateur + $deuxième_carte_tirée_par_lutilisateur;

// ensuite on echo le vainqueur

if ($somme_cartes_banque > $somme_cartes_utilisateur) {

    echo "La banque a gagné";
} else {
    echo "L'utilisateur a gagné";
}




// CONSIGNE : 2 cartes au piff pour la banque et 2 au piff pour le mec entr 1 et 13

// SI LA SOMME DES 2 CARTES DE LA BAnque est plus grand que celles de lutilisateur
// donc la banque a gagné 
