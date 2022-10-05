<?php 

namespace App\Controller;

use Plugo\Controller\AbstractController;
use App\Manager\MeetingManager;
use App\Entity\Meeting;

class MeetingController extends AbstractController {

    public function show() {
        $id = $_GET['id'];

        $meetingManager = new MeetingManager();

        return $this->renderView('meeting/show.php', [
            'meeting' => $meetingManager->find($id)
        ]);
    }

    public function add() {
        $meetingManager = new MeetingManager();

        if (!empty($_POST)) {
            $meeting = new Meeting();
            $meeting->setTitle($_POST['title']);
            $meeting->setDetails($_POST['details']);
            $meeting->setDate($_POST['date']);

            $meeting->setImportant(isset($_POST['important']) ? 1 : 0);

            $meetingManager->add($meeting);

            return $this->redirectToRoute('home');
        }
        return $this->renderView('meeting/add.php', [
            'type' => 'add'
        ]);
    }

    public function modify() {
        $id = $_GET['id'];

        $meetingManager = new MeetingManager();

        $meeting = $meetingManager->find($id);

        if (!empty($_POST)) {
            $meeting->setTitle($_POST['title']);
            $meeting->setDetails($_POST['details']);
            $meeting->setDate($_POST['date']);

            $meeting->setImportant(isset($_POST['important']) ? 1 : 0);

            $meetingManager->modify($id, $meeting);

            return $this->redirectToRoute('home');
        }

        return $this->renderView('meeting/modify.php', [
            'type' => 'edit',
            'meeting' => $meetingManager->find($id)
        ]);
    }

    public function remove() {
        $id = $_GET['id'];
        
        $meetingManager = new MeetingManager();
        $meetingManager->remove($meetingManager->find($id));

        return $this->redirectToRoute('home');
    }

}