<?php 

namespace App\Controller;

use Plugo\Controller\AbstractController;
use App\Manager\OfferManager;

class OfferController extends AbstractController {

    public function test() {
        
        $offerManager = new OfferManager();
        return $this->renderView('offer/index.php', [
            'offers' => $offerManager->findAll()
        ]);

    }

}