<?php


/**
 * Objectif: Calculer la somme de tous les nombres jusqu'à un nombre donné.
 * Entrée: 5
 * Sortie attendue: 15 (1+2+3+4+5)
 */

/**
 * entree = 5
 * boucle 5 fois en partant 0
 * nb1 = 0
 * sortie = 15
 */

$entree = 5;
$nb1 = 0;

for ($i=1; $i <= $entree; $i++) { 
    $nb1 = $nb1 + $i;
    
}
echo $nb1;


$nombre = 5;
$somme = 0;
for ($i = 1; $i <= $nombre; $i++) {
    $somme = $somme + $i;
}
echo $somme;