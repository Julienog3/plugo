<h1>Modifier un RDV</h1>

<form method="post">
    <label for="title">
        Titre
        <input type="text" id="title" name="title" value="<?= $data['meeting']->getTitle() ?>" placeholder="Titre" required>
    </label>
    <label for="details">
        Détails
        <input type="text" id="details" name="details" value="<?= $data['meeting']->getDetails() ?>" placeholder="Détails" required  />
    </label>
    <div class="grid">
        <label for="date">
            Date du RDV
            
            <input type="date" id="date" name="date" value="<?= date('Y-m-d', strtotime($data['meeting']->getDate())) ?>" required>
        </label>
        <label for="important">
            <input type="checkbox" id="important" name="important" <?= $data['meeting']->getImportant() ? 'checked' : '' ?>/>
            Important ?
        </label>
    </div>
    <button type="submit">
        Modifier
    </button>
</form>