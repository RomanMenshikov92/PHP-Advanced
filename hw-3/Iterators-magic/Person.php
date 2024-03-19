<?php
declare(strict_types = 1);

class Person {
    private string $name;
    private int $age;

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function __get(string $property): mixed {
      if (property_exists($this, $property)) {
          return $this->$property;
      }
      return null;
  }

    public function __set(string $property, mixed $value): void {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }

    public function __sleep(): array {
        return ['name', 'age'];
    }

    public function __wakeup(): void {
        echo "Объект был несериализован" . PHP_EOL;
    }

    public function __toString(): string {
        return "Name: {$this->name}, Age: {$this->age}" . PHP_EOL;
    }
}
