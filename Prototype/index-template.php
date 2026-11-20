
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Mon Portfolio</h1>
        <nav>
            <a href="#accueil">Accueil</a>
            <a href="#projets">Mes projets</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <main>

        <section id="accueil" class="hero">
            <h2>Bienvenue sur mon portfolio</h2>
            <p>Je suis développeur web. Découvrez mes projets.</p>
            <a href="#projets" class="btn">Voir mes projets</a>
        </section>

        <section id="projets" class="projects">
            <h2>Mes projets</h2>

            <div class="projects-container">

                <?php foreach ($projects as $project): ?>

                    <article class="project-card">

                        <img
                            src="<?= htmlspecialchars($project['image']) ?>"
                            alt="<?= htmlspecialchars($project['title']) ?>"
                        >

                        <div class="project-info">

                            <h3><?= htmlspecialchars($project['title']) ?></h3>

                            <p><?= htmlspecialchars($project['description']) ?></p>

                            <p>
                                <strong>Catégorie :</strong>
                                <?= htmlspecialchars($project['category']) ?>
                            </p>

                            <p>
                                <strong>Technologies :</strong>
                                <?= htmlspecialchars(implode(', ', $project['technologies'])) ?>
                            </p>

                            <?php if ($project['status'] === 'Terminé'): ?>
                                <span class="status finished">Terminé</span>
                            <?php else: ?>
                                <span class="status progress">En cours</span>
                            <?php endif; ?>

                        </div>
                    </article>

                <?php endforeach; ?>

            </div>
        </section>

        <section id="contact" class="contact">
            <h2>Contact</h2>
            <p>Merci de visiter mon portfolio.</p>
        </section>

    </main>

    <footer>
        <p>© 2026 - Mon Portfolio</p>
    </footer>

</body>
</html>
