# Тестирование

<details>
<summary>Задание №1: знакомство с документацией.</summary>

## Задание 1. Знакомство с документацией

Документация и работа с PHPUnit:

- [установка PHPUnit](https://phpunit.readthedocs.io/ru/latest/installation.html),
- [документация по использованию](https://phpunit.readthedocs.io/ru/latest/writing-tests-for-phpunit.html),
- [mock-объекты и stub-объекты](https://phpunit.readthedocs.io/ru/latest/test-doubles.html),
- [анализ покрытия кода тестами](https://phpunit.readthedocs.io/ru/latest/code-coverage-analysis.html).

По некоторым вопросам также можно использовать [сайт с основной документацией](https://phpunit.readthedocs.io/ru/latest/index.html).

Паттерны проектирования:

- [Каталог наиболее популярных паттернов] (https://designpatternsphp.readthedocs.io/ru/latest/README.html).

Для начала изучения советуем следующие паттерны:

- [Стратегия (Strategy)] (https://designpatternsphp.readthedocs.io/ru/latest/Behavioral/Strategy/README.html),
- [Наблюдатель (Observer)] (https://designpatternsphp.readthedocs.io/ru/latest/Behavioral/Observer/README.html),
- [Фасад (Facade)] (https://designpatternsphp.readthedocs.io/ru/latest/Structural/Facade/README.html),
- [Одиночка (Singleton)] (https://designpatternsphp.readthedocs.io/ru/latest/Creational/Singleton/README.html).

Про SOLID:

- [принципы SOLID](https://medium.com/webbdev/solid-4ffc018077da).
- [принципы SOLID в картинках - легче понять и запомнить] (https://habr.com/ru/company/productivity_inside/blog/505430/).

В задании не надо ничего отправлять на проверку, но ознакомление с этой документацией поможет в дальнейшей работе с php.

</details>

---

<details>

<summary>Задание №2: работа с TDD.</summary>

## Задание 2. Работа с TDD

### Техническое задание

В рамках этого задания необходимо настроить у себя работу с PHPUnit, а также изучить на практике, что же такое TDD. Можно
почитать [пример](https://habr.com/ru/post/130086/).

У нас есть некая обёртка над базой данных — искусственная таблица, которая всё хранит во внутренних свойствах.
Выглядит примерно так:

```php
class UserTableWrapper
{
    private array $rows;

    /**
     * @param array|[column => row_value] $values
     */
    public function insert(array $values): void
    {
        $this->rows[] = $values;
    }
}
```

Также у нас есть интерфейс работы с таблицей:

```php
interface TableWrapperInterface
{
    public function insert(array $values): void;
    public function update(int $id, array $values): array;
    public function delete(int $id): void;

    public function get(): array;
}
```

Необходимо:

1. подготовить тесты для каждого метода интерфейса с использованием дата-провайдеров,
2. написать реализацию для таблицы Users (как пример) и проверить её тестами,
3. выполнить проверку покрытия кода тестами,
4. при необходимости дополнить тесты.

</details>

---

<details>
<summary>Задание №3: применение паттернов проектирования.</summary>

## Задание 3. Применение паттернов проектирования

### Техническое задание

### Паттерн «Стратегия»

Документация и пример работы с паттерном — в задании №1.

#### Задача

У нас есть несколько уток:

- обычная утка (MallardDuck),
- красноголовая утка (RedheadDuck),
- резиновая уточка (RubberDuck),
- деревянная утка (DecoyDuck).

Но есть небольшая проблема:

- обычная утка и красноголовая утка летают, крякают и отображаются (методы fly(), quack() и display());
- резиновая уточка отображается и крякает (quack() и display());
- деревянная утка просто существует (display()).

И все уточки умеют плавать (swim()).

Вам необходимо реализовать базовый класс утки Duck, а также четыре унаследовавшихся от неё уточки.
Подсказка: с помощью «Стратегии» вы сможете выделить отдельные поведения и работать с ними.

</details>

---

Задание желательно выполнить до следующего вебинара. Любые вопросы по решению задач задавайте в чате учебной группы. Присылать на проверку можно каждую задачу по отдельности или все задачи вместе. Во время проверки по частям ваша домашняя работа будет обозначаться статусом «На доработке».
