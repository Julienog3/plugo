<h1>Accueil</h1>

<?php foreach($data['meetings'] as $meeting): ?>


<article>
    <hgroup>
        <h2><?= $meeting->getTitle() ?></h2>
        <?php if($meeting->getImportant()): ?>
            <h3>Important</h3>
        <?php else: ?>
            <h3>Non important</h3>
        <?php endif; ?>
    </hgroup>
    
    <p><?= $meeting->getDetails() ?></p>
    <a href="?page=meeting&id=<?= $meeting->getId() ?>">Voir le RDV</a>
</article>

<?php endforeach; ?>