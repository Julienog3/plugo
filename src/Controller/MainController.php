<?php 

namespace App\Controller;

use Plugo\Controller\AbstractController;
use App\Manager\MeetingManager;

class MainController extends AbstractController {

    public function home() {

        $meetingManager = new MeetingManager();

        return $this->renderView('main/home.php', [
            'title' => 'Accueil',
            'meetings' => $meetingManager->findAll()
        ]);
    }

    public function legalNotice() {
        return $this->renderView('main/legal_notice.php', [
            'title' => 'Mentions légales'
        ]);
    }
}