<?php
$php_roulette_php = rand(0, 36);
$nombre_impair = $php_roulette_php % 2;
echo $php_roulette_php . " " . ($nombre_impair ? "impair" : "pair");
print_r($argv);
if ($php_roulette_php === intval($argv[1])) {
    echo "Gagné !";
} else {
    echo "Perdu !";
}
$montant_gagné = $argv[2] * 35;
if (intval($argv[1])) === true {
    echo $montant_gagné;
}
?>