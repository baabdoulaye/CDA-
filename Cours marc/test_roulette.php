<?php
require_once("roulette.php");

/**
 * Je dois savoir si l'utilisateur a parié sur pair ou impair.
 */
function test_can_get_user_parity_bet_input(): bool
{
    // Exemple de données récupérées depuis
    // la ligne de commande.
    // ici ex: `php test_roulette.php 13 pair 100`
    $argvExample = [
        "test_roulette.php", // nom du script
        "13", // argument1 en ligne de commande
        "pair", // arguement2 en cli
        "100", // argument3 en ligne de commande
    ];
    $userInput = getUserParityBetInput($argvExample);

    return $userInput === 'pair';
}
