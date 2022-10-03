
<?php foreach($data['offers'] as $offer): ?>

    <article>
        <h1><?= $offer->getTitle() ?></h1>
        <p><?= $offer->getDescription() ?></p>
        <a href="<?= $offer->getLink() ?>">Voir l'offre</a>
    </article>

<?php endforeach; ?>

