<?php

namespace Object\Employees;

abstract class AbstractEmployee {
    protected $firstName;
    protected $lastName;
    protected $position;
    protected $salary;

    private static $totalEmployees = 0;
    private static $totalSalary = 0;

    public function __construct(string $firstName, string $lastName, string $position, int $salary) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->position = $position;
        $this->salary = $salary;

        self::$totalEmployees++;
        self::$totalSalary += $salary;
    }

    abstract public function work():mixed;

    public function getFirstName():string {
        return "$this->firstName ";
    }

    public function getLastName():string {
        return "$this->lastName, ";
    }

    public function getPosition():string {
        return "позиция: $this->position, ";
    }

    public function getSalary():mixed {
        return "зарплата: $this->salary попугаев";
    }

    public static function getTotalEmployees(): mixed {
        return "Общее количество сотрудников: " . self::$totalEmployees;
    }

    public static function getTotalSalary(): mixed {
        return "Общая сумма зарплат: " . self::$totalSalary;
    }
}

?>
