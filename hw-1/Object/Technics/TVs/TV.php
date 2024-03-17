<?php

namespace Object\Technics\Tvs;

// класс - телевизор
class TV {
  public $brand;
  public $size;
  
  // конструктор класса
  public function __construct($brand, $size) {
      $this->brand = $brand;
      $this->size = $size;
  }

  // Получить информацию о телевизоре
  public function getTVInfo() {
      return "Телевизор {$this->brand}, размер {$this->size} дюймов.";
  }

  // Метод для изменения громкости
  public function changeVolume($newVolume) {
      // Логика изменения громкости
      return "Громкость изменена на $newVolume.";
  }

  // Статический метод для создания экземпляра телевизора Samsung 50"
  public static function createSamsungTV() {
      return new self('Samsung', 50);
  }
}

