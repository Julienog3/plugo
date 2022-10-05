<?php 

namespace App\Controller;
 
use Plugo\Controller\AbstractController;
use Plugo\Services\Alert;
use App\Manager\UserManager;
use App\Entity\User;

 
class UserController extends AbstractController {

  public function register() {

    $userManager = new UserManager();

    $alert = new Alert();
    $alert->setType('warning');

    $isValid = true;

    if(!empty($_POST)) {

      if ($_POST['password'] !== $_POST['confirm_password']) {
        $isValid = false;
        $alert->addMessage('Les deux mots de passe sont différents');
      } 

      if (!empty($userManager->findOneBy(['email' => $_POST['email']]))) {
        $isValid = false;
        $alert->addMessage('Un utilisateur existe déjà à cet email');
      } 
      
      if ($isValid) {
        $user = new User();
        $user->setEmail($_POST['email']);
        $user->setPassword(password_hash($_POST['password'], PASSWORD_DEFAULT));
  
        $userManager->add($user);
  
        // return $this->redirectToRoute('home');
      }
    }
    
    return $this->renderView('user/register.php', [
      'type' => 'register',
      'alert' => $alert
    ]);
  }

}