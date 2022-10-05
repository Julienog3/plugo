<?php
  $isEdited = $data['type'] === 'edit';
?>

<form method="post">
    <label for="title">
        Titre
        <input type="text" id="title" name="title" value="<?= ($isEdited) ? $data['meeting']->getTitle() : '' ?>" placeholder="Titre" required>
    </label>
    <label for="details">
        Détails
        <input type="text" id="details" name="details" value="<?= ($isEdited) ? $data['meeting']->getDetails() : '' ?>" placeholder="Détails" required />
    </label>
    <div class="grid">
        <label for="date">
            Date du RDV
            <input type="date" id="date" name="date" value="<?= ($isEdited) ? $data['meeting']->displayDate() : '' ?>" required>
        </label>
        <label for="important">
            <input type="checkbox" id="important" name="important" <?= ($isEdited) ? ($data['meeting']->getImportant() ? 'checked' : '') : '' ?> />
            Important ?
        </label>
    </div>
    <button type="submit">
        Ajouter
    </button>
</form>