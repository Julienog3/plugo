<?php

namespace App\Entity;

class Offer {

    private ?int $id;
    private ?string $title;
    private ?string $description;
    private ?string $link;

    public function getId(): int {
        return $this->id;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function setTitle(string $title) {
        $this->title = $title;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function setDescription(string $description) {
        $this->description = $description;
    }

    public function getLink(): string {
        return $this->link;
    }

    public function setLink(string $link) {
        $this->link = $link;
    }
}