<?php 

namespace App\Entity;

class Meeting {
    private ?int $id;
    private ?string $title;
    private ?string $details;
    private ?string $date;
    private ?bool $important;

    public function getId() {
        return $this->id;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function setTitle(string $title) {
        $this->title = $title;
    }

    public function getDetails(): string {
        return $this->details;
    }

    public function setDetails(string $details) {
        $this->details = $details;
    }

    public function getDate(): string {
        return $this->date;
    }

    public function setDate(string $date) {
        $this->date = $date;
    }

    public function getImportant(): bool {
        return $this->important;
    }

    public function setImportant(bool $important) {
        $this->important = $important;
    }
}
