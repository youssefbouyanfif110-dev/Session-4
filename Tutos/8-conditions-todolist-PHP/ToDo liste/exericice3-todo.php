<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Ma Todo List</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Ma Todo List</h1>
    <div class="stats">
        <p>Total : <?= $total ?></p>
        <p>Terminées : <?= $terminees ?></p>
        <p>Restantes : <?= $restantes ?></p>
    </div>
    <?php foreach ($taches as $tache): ?>

        <div class="task <?= $tache['terminee'] ? 'completed' : '' ?>">
            <h2><?= $tache['titre'] ?></h2>
            <?php $description = substr($tache['description'], 0, 80); ?>
            <p><?= $description ?></p>
            <?php
            $date = date("d/m/Y", strtotime($tache['date_limite']));
            ?>

            <p>Date : <?= $date ?></p>
            <p>
                Priorité :
                <span class="priority <?= strtolower($tache['priorite']) ?>">
                    <?= $tache['priorite'] ?>
                </span>
            </p>

            <p>
                Statut :
                <?= $tache['terminee'] ? 'Terminée' : 'À faire' ?>
            </p>
        </div>

    <?php endforeach; ?>
</body>

</html>