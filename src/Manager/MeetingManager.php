<?php

namespace App\Manager;

use App\Entity\Meeting;
use Plugo\Manager\AbstractManager;

class MeetingManager extends AbstractManager {

    public function find(int $id) {
        return $this->readOne(Meeting::class, $id);
    }

    public function findOneBy(array $filters = []) {
        return $this->readOne(Meeting::class, null, $filters);
    }

    public function findAll(array $orders = []) {
        return $this->readMany(Meeting::class, $orders);
    }


    public function findBy(array $filters = [], array $orders = [], int $limit) {
        return $this->readMany(Meeting::class, $filters, $orders, $limit);
    }

    public function add(Meeting $meeting) {
        return $this->create(Meeting::class, [
            'title' => $meeting->getTitle(),
            'details' => $meeting->getDetails(),
            'date' => $meeting->getDate(),
            'important' => $meeting->getImportant()
        ]);
    }

    public function modify(int $id, Meeting $meeting) {
        return $this->update(Meeting::class, [
            'title' => $meeting->getTitle(),
            'details' => $meeting->getDetails(),
            'date' => $meeting->getDate(),
            'important' => $meeting->getImportant()
        ], $id);
    }

    public function remove(Meeting $meeting) {
        return $this->delete(Meeting::class, $meeting->getId());
    }

}