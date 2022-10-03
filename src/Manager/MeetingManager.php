<?php

namespace App\Manager;

use App\Entity\Meeting;
use Plugo\Manager\AbstractManager;

class MeetingManager extends AbstractManager {

    public function find(int $id) {
        return $this->readOne(Meeting::class, $id);
    }

    public function findAll() {
        return $this->readMany(Meeting::class);
    }

    public function add(Meeting $meeting) {
        return $this->create(Meeting::class, [
            'title' => $meeting->getTitle(),
            'details' => $meeting->getDetails(),
            'date' => $meeting->getDate(),
            'important' => $meeting->getImportant()
        ]);
    }

    public function remove(Meeting $meeting) {
        return $this->delete(Meeting::class, $meeting->getId());
    }

}