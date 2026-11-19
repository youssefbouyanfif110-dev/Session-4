<?php

$montant = 1200;

if ($montant < 500) {
    $tauxRemise = 0;
} elseif ($montant < 1000) {
    $tauxRemise = 5;
} elseif ($montant < 2000) {
    $tauxRemise = 10;
} else {
    $tauxRemise = 15;
}

$remise = $montant * $tauxRemise / 100;

$montantFinal = $montant - $remise;

echo "Montant final : " . $montantFinal . " DH";
