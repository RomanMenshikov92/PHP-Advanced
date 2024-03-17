<?php
require_once 'Autoloader.php';

use Object\Technics\Cars\Car;
use Object\Technics\TVs\TV;
use Object\Human\Student;

// Создание объектов каждого класса
$car = new Car('Audi', 'A4');
$tv = new TV('LG', 55);
$student = new Student('Роман Меньшиков', 32);

// Вызов методов объектов
echo $car->getCarInfo() . PHP_EOL;
echo $car->startEngine() . PHP_EOL;

echo $tv->getTVInfo() . PHP_EOL;
echo $tv->changeVolume(20) . PHP_EOL;

echo $student->getInfo() . PHP_EOL;
$student->increaseAge();
echo "Новый возраст студента: {$student->age} лет" . PHP_EOL;

// Вызов статических методов
$defaultCar = Car::createDefaultCar();
echo $defaultCar->getCarInfo() . PHP_EOL;

$samsungTV = TV::createSamsungTV();
echo $samsungTV->getTVInfo() . PHP_EOL;

$abstractStudent = Student::createAbstractStudent();
echo $abstractStudent->getInfo() . PHP_EOL;
?>
