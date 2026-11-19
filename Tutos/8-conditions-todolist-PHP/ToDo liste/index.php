<?php

$taches = [
    [
        'id' => 1,
        'titre' => 'Apprendre PHP',
        'description' => 'Comprendre les tableaux en PHP',
        'date_limite' => '2026-11-20',
        'priorite' => 'Haute',
        'terminee' => false
    ],
    [
        'id' => 2,
        'titre' => 'Créer une page HTML',
        'description' => 'Créer une page avec HTML et CSS',
        'date_limite' => '2026-11-22',
        'priorite' => 'Moyenne',
        'terminee' => true
    ],
    [
        'id' => 3,
        'titre' => 'Reviser git',
        'description' => 'pratiquer les commandes Git',
        'date_limite' => '2026-11-25',
        'priorite' => 'Basse',
        'terminee' => false
    ],
    [
        'id' => 4,
        'titre' => 'Apprendre JavaScript',
        'description' => 'Pratiquer les conditions',
        'date_limite' => '2026-11-26',
        'priorite' => 'Haute',
        'terminee' => true
    ],
    [
        'id' => 5,
        'titre' => 'Creer un formulaire',
        'description' => 'Ajouter les champs du formulaire',
        'date_limite' => '2026-11-27',
        'priorite' => 'Moyenne',
        'terminee' => true
    ],
    [
        'id' => 6,
        'titre' => 'Apprendre PHP',
        'description' => 'utiliser la boucle foreach',
        'date_limite' => '2026-11-28',
        'priorite' => 'Haute',
        'terminee' => false
    ],
    [
        'id' => 7,
        'titre' => 'Organiser les fichiers',
        'description' => 'Classer les fichiers du projet',
        'date_limite' => '2026-11-29',
        'priorite' => 'Basse',
        'terminee' => false
    ],
    [
        'id' => 8,
        'titre' => 'Terminer le projet',
        'description' => 'Verifier et finaliser le projet PHP',
        'date_limite' => '2026-11-30',
        'priorite' => 'Haute',
        'terminee' => false
    ]
];

$total = count($taches);
$terminees = 0;
$restantes = 0;

foreach ($taches as $tache) {
    if ($tache['terminee']) {
        $terminees++;
    } else {
        $restantes++;
    }
}

foreach ($taches as $tache) {

    // Format de la date
    $date = date("d/m/Y", strtotime($tache['date_limite']));

  
    // Description limitée à 80 caractères
    $description = substr($tache['description'], 0, 80);





    if ($tache['terminee']) {
        $terminees++;
    } else {
        $restantes++;
    }

}
require "exericice3-todo.php"; 
?>