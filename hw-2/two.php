<?php
require_once 'Autoloader.php';

use Object\Employees\Director;
use Object\Employees\Manager;
use Object\Employees\Programmer;
use Object\Employees\Tester;
use Object\Interfaces\LeadInterface;
use Object\Interfaces\WebinarSpeakerInterface;
use Object\Interfaces\ApplicationCreatorInterface;

$director = new Director('Иван', 'Иванов', 'Директор', 100000);
$manager = new Manager('Петр', 'Петров', 'Менеджер', 70000);
$programmer = new Programmer('Анна', 'Сидорова', 'Программист', 90000);
$tester = new Tester('Мария', 'Кузнецова', 'Тестировщик', 50000);

$employees = [$director, $manager, $programmer, $tester];

echo "-----------" . PHP_EOL;
foreach ($employees as $employee) {
  echo $employee->getFirstName() . $employee->getLastName() . $employee->getPosition() . $employee->getSalary() . PHP_EOL;
  echo $employee->work() . PHP_EOL;
  if ($employee instanceof LeadInterface) {
      echo "Умеет руководить: " . $employee->lead() . PHP_EOL;
  }

  if ($employee instanceof WebinarSpeakerInterface) {
      echo "Может проводить вебинары: " . $employee->conductWebinar() . PHP_EOL;
  }

  if ($employee instanceof ApplicationCreatorInterface) {
      echo "Может создавать приложения: " . $employee->createApplication() . PHP_EOL;
  }
    
  echo "-----------" . PHP_EOL;
    
}
echo $employee->getTotalEmployees() .  PHP_EOL;
echo $employee->getTotalSalary() .  PHP_EOL;
echo "-----------" . PHP_EOL;
?>