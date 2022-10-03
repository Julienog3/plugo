<h1>Accueil</h1>

<?php foreach($data['meetings'] as $meeting): ?>


<article>
    <h2><?= $meeting->getTitle() ?></h2>
    <p><?= $meeting->getDetails() ?></p>
    <a href="?page=meeting&id=<?= $meeting->getId() ?>">Voir le RDV</a>
</article>

<?php endforeach; ?>