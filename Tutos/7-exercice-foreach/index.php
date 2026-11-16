<?php
$articles = [
    [
        'titre' => 'premier article',
        'contenu' => 'voici le contenu de mon premier article.',
        'date_creation' => '2026-11-10',
    ],

    [ 
        'titre' =>'Deuxieme article',
        'contenu' => 'voici le contenue de mon deuxieme article.',
        'date_creation' => '2026-11-12',
    ]

    ];
   

     foreach ($articles as $article) {
       require 'index-template.php';
       
    }
    
    ?>





