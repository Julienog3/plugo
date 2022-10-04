<hgroup>
    <h1><?= $data['meeting']->getTitle() ?></h1>
    <?php if($data['meeting']->getImportant()): ?>
        <h2>Rendez-vous important</h2>
    <?php else: ?>
        <h2>Rendez-vous</h2>
    <?php endif; ?>
</hgroup>

<p><?= $data['meeting']->getDetails() ?></p>
        
<div class="grid">
    <a href="?page=meeting_modify&id=<?= $data['meeting']->getId() ?>" role="button">
        Modifier le RDV
    </a>
    <a href="?page=meeting_remove&id=<?= $data['meeting']->getId() ?>" role="button" class="secondary">
        Supprimer le RDV
    </a>
</div>

    


