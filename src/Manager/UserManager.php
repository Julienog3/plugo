<?php

namespace App\Manager;
 
use Plugo\Manager\AbstractManager;
use App\Entity\User;
 
class UserManager extends AbstractManager {

  public function find(int $id) {
    return $this->readOne(User::class, $id);
  }

  public function findOneBy(array $filters = []) {
      return $this->readOne(User::class, null, $filters);
  }

  public function findAll(array $orders = []) {
      return $this->readMany(User::class, $orders);
  }

  public function findBy(array $filters = [], array $orders = [], ?int $limit) {
      return $this->readMany(User::class, $filters, $orders, $limit);
  }

  public function add(User $user) {
      $date = new \DateTime();

      return $this->create(User::class, [
          'email' => $user->getEmail(),
          'password' => $user->getPassword(),
          'created_at' => date_format($date, 'Y-m-d H:i:s'),
          'updated_at' => date_format($date, 'Y-m-d H:i:s')
      ]);
  }

  public function modify(int $id, User $user) {
    $date = new \DateTime();
    $date->format('Y-m-d H:i:s');

    return $this->update(User::class, [
        'email' => $user->getEmail(),
        'password' => $user->getPassword(),
        'updated_at' => $date
    ], $id);
  }

  public function remove(User $user) {
      return $this->delete(User::class, $user->getId());
  }
}