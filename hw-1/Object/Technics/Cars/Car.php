<?php

namespace Object\Technics\Cars;

// класс - Машина
class Car {
  public $brand;
  public $model;
  
  // конструктор класса
  public function __construct($brand, $model) {
      $this->brand = $brand;
      $this->model = $model;
  }

  // Получить информацию о машине
  public function getCarInfo() {
      return "Машина {$this->brand} {$this->model}.";
  }

  // Метод для запуска двигателя
  public function startEngine() {
      // Логика запуска двигателя
      return "Двигатель запущен.";
  }

  // Статический метод для создания экземпляра машины по умолчанию
  public static function createDefaultCar() {
      return new self('Toyota', 'Camry');
  }
}