<?php

namespace Object\Human;

// класс - Студент
class Student {
  public $name;
  public $age;

  // конструктор класса
  public function __construct($name, $age) {
      $this->name = $name;
      $this->age = $age;
  }

  // Получить информацию о студенте
  public function getInfo() {
      return "Студент {$this->name}, возраст {$this->age} лет.";
  }

  // Метод для увеличения возраста студента
  public function increaseAge() {
      $this->age++;
  }

  // Статический метод для создания абстрактного студента
  public static function createAbstractStudent() {
      return new self('Abstract Student', 20);
  }
}