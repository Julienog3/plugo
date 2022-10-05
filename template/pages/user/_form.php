<?php 
  
?>

<?php 
  if (isset($data['alert'])): 
?>
  <?php foreach($data['alert']->getMessages() as $message): ?>
    <blockquote>
      <?= $message ?> 
    </blockquote>
  <?php endforeach; ?>
<?php endif; ?>

<form method="post">
  <label for="email">
    Email
    <input type="email" name="email" />
  </label>
  <label for="password">
    Mot de passe
    <input type="password" name="password"/>
  </label>
  <?php if ($data['type'] === 'register'): ?>
    <label for="confirm_password">
      Confirmation du mot de passe
      <input type="password" name="confirm_password"/>
    </label>
  <?php endif; ?>
  <button type="submit">S'inscrire</button>
</form>