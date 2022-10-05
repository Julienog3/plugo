<?php

namespace Plugo\Services;

class Alert {

  private ?string $type;
  private ?array $messages = [];

  public function getType(): string {
    return $this->type;
  }

  public function setType(string $type): void {
    $this->type = $type;
  }

  public function addMessage(string $message) {
    array_push($this->messages, $message);
  }

  public function getMessages(): array {
    return $this->messages;
  }

  public function setAlert(string $type, array $messages): void {
    $_SESSION['alert'] = [
      'type' => $type,
      'messages' => $messages
    ];
  }

  public function getAlert() {
    return $_SESSION['alert'];
  }

  public function flush(): void {
    if(isset($_SESSION['alert'])) {
      unset($_SESSION['alert']);
    }
  }
}
