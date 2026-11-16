<article>
    <h2><?= htmlspecialchars($article['titre']) ?></h2>

    <p>
        <p><?= htmlspecialchars(mb_substr($article['contenu'], 0, 80)) ?></p>
    </p>

    <p>
        <?= date('d/m/Y', strtotime($article['date_creation'])) ?>
    </p>
</article>