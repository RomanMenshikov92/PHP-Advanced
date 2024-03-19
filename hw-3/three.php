<?php
require_once 'Iterators-magic/Person.php';
require_once 'Iterators-magic/PeopleList.php';

// Создаем объект класса Person
$person = new Person('Роман', 32);

// Сериализуем объект
$serializedPerson = serialize($person);
echo "Сериализованная персона: $serializedPerson" . PHP_EOL;

// Меняем значение логина в строке сериализованного объекта
$modifiedSerializedPerson = str_replace('Роман', 'Раиса', $serializedPerson);
echo "Измененная сериализованная персона: $modifiedSerializedPerson" . PHP_EOL;

// Десериализуем объект и выведем его свойства
$unserializedPerson = unserialize($modifiedSerializedPerson);
echo "Несериализованная персона: $unserializedPerson";

// Создаем список людей и добавляем объекты Person
$peopleList = new PeopleList();
$peopleList->addPerson(new Person('Роман', 32));
$peopleList->addPerson(new Person('Раиса', 29));

// Выводим объекты Person через foreach
foreach ($peopleList as $person) {
    echo $person;
}
