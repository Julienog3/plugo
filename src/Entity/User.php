<?php 

namespace App\Entity;

class User {
    private ?int $id;
    private ?string $email;
    private ?string $password;
    private ?string $created_at;
    private ?string $updated_at;

    public function getId() {
        return $this->id;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function getPassword(): string {
        return $this->password;
    }

    public function setPassword(string $password): void {
        $this->password = $password;
    }

    public function getCreatedAt(): date {
        return $this->created_at;
    }

    public function getUpdatedAt(): ?string {
        return $this->update_at;
    }

    public function setUpdatedAt(?string $update_at): void {
        $this->update_at = $update_at;
    }

    public function displayDate() {
        $tmp = new \Datetime($this->date);
        return $tmp->format('Y-m-d');
      }
    
    public function displayTime() {
        $tmp = new \Datetime($this->date);
        return $tmp->format('h:i') . ' h';
    }
}
