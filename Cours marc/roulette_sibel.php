<?php

function roulette(int $nGagnant, string $pariNb): bool
{
    $nombre = $nGagnant;
    $nbAleatoire = rand(0, 36);


    if (!empty($pariUtilisateur)) {

        $res = roulette($nbAleatoire, $pariUtilisateur);
        return "\nUtilisateur a gagné son pari nombre ? " . ($res ? "VOUS AVEZ GAGNE" : " PERDU");
        return "Tirage au sort: " . $nbAleatoire;

        $isOdd = $nombre % 2;
        $nGagnant = intval($pariNb) === $nombre;



        return $nGagnant;
    }
}
return "\nNuméro gagnant est: " . ($isOdd ? "Impair" : "Pair");

$ppInt = $pariPair === 'pair' ? 0 : 1;



roulette($nbAleatoire, $pariUtilisateur);
$pariUtilisateur = $argv[1];



// function roulette(int $nombreGagnant, string $nombrePari) 
// {
//     $nombre_gagnant =  ;
//     $nombre = $nombre_gagnant;
//     $isOdd = $nombre % 2;
//     $pariNombre = intval($argv[1]);
//     echo "\n le nombre tiré au sort est  "
//         . $nombre;
//     echo "\n est-ce qu'il est pair ? " . ($isOdd ? "Non" : "Oui");
//     echo "\n le pari utilisateur est "  . $pariNombre .  " ";



//     if ($pariNombre !== $nombre) {
//         echo "\n l'utilisateur a perdu son pari";
//     } else {
//         echo "\n l'utilisateur a gagné son pari";
//     };
// }