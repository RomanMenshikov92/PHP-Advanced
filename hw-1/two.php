<?php
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

// Создание объекта студента
$student = new Student('Роман Меньшиков', 32);

// Вызов метода getInfo() для получения информации о студенте
echo $student->getInfo() . PHP_EOL;

// Увеличение возраста студента и проверка
$student->increaseAge();
echo "Новый возраст студента: {$student->age} лет" . PHP_EOL;

// Вызов статического метода для создания абстрактного студента
$abstractStudent = Student::createAbstractStudent();
echo $abstractStudent->getInfo() . PHP_EOL;

// Создание объекта машины
$car = new Car('Audi', 'A4');

// Получение информации о машине
echo $car->getCarInfo() . PHP_EOL;

// Запуск двигателя машины
echo $car->startEngine() . PHP_EOL;

// Создание машины по умолчанию и вывод информации
$defaultCar = Car::createDefaultCar();
echo $defaultCar->getCarInfo() . PHP_EOL;

// Создание объекта телевизора
$tv = new TV('LG', 55);

// Получение информации о телевизоре
echo $tv->getTVInfo() . PHP_EOL;

// Изменение громкости телевизора и вывод информации
echo $tv->changeVolume(20) . PHP_EOL;

// Создание телевизора Samsung 50" и вывод информации
$samsungTV = TV::createSamsungTV();
echo $samsungTV->getTVInfo() . PHP_EOL;

?>