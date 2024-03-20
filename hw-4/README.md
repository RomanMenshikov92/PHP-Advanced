# Базы данных, SQLite

<details>
<summary>Задание №1: знакомство с документацией.</summary>

# Задание 1. Знакомство с документацией

Дополнительные ссылки для ознакомлением с информацией о базах данных:

- [SQL против NoSQL](https://habr.com/ru/company/ruvds/blog/324936/),
- [язык запросов SQL](https://htmlacademy.ru/tutorial/php/sql),
- [об индексах в базах данных SQLite](https://zametkinapolyah.ru/zametki-o-mysql/chast-11-7-indeksy-v-bazax-dannyx-sqlite-indeksaciya-tablic-v-sqlite3-algoritm-b-dereva-v-bazax-dannyx.html).

Для работы с SQLite рекомендуем скачать [расширение](https://marketplace.visualstudio.com/items?itemName=alexcvzz.vscode-sqlite).

В задании не надо ничего отправлять на проверку, но ознакомление с этой документацией поможет в дальнейшей работе с PHP.

</details>

---

<details>

<summary>Задание №2: работа с базой данных.</summary>

## Задание 2. Работа с базой данных

### Техническое задание

Благодаря инструкции по настройке SQLite мы можем потренироваться создавать таблицы и выполнять различные действия
с ними.

В качестве результата необходимо прислать подготовленные SQL-запросы.

В этом задании вам надо подготовить SQL-запросы, которые смогут создать несколько таблиц:

- таблицу магазина shop,
- таблицу продуктов product,
- таблицу заказа order,
- таблицу соответствий продуктов и заказов order_product,
- таблицу покупателя client.

Не забудьте про следующие важные свойства:

- название (name), адрес (address) для магазина;
- название (name), цена (price) и количество штук (count) для продуктов;
- дата и время создания заказа (created_at), кто кому продал заказ;
- какие продукты вошли в какой заказ и с какой ценой — соответствие заказов и продуктов;
- номер телефона (phone) и имя (name) для клиентов.

Необходимо заполнить SQL-запросами таблицы данных, как минимум по пять строк в каждой таблице.
Замечание: не для каждого магазина могут существовать продукты и заказы, но каждый продукт и заказ привязаны к магазину. Используйте FOREIGN KEYS для установления связей между таблицами.

### Дополнительное задание со звёздочкой

Помимо базовых запросов, вам необходимо изучить и такое понятие, как [агрегатные функции](https://codetown.ru/sql/agregatnye-funkcii/).

### Задание:

Подготовьте SQL-запросы для следующих задач:

1. Вывести для каждого клиента сумму его покупок, сделанных в период +- 3 дня от его дня рождения.
2. Вывести заказы, в которых цена продукта отличается от нынешней в таблице, а также вывести разницу в сумме.
3. Найти самый прибыльный магазин и магазин, в котором произвели больше всего покупок.

Внимание: При сдаче задания через http://repl.it/ выбирайте, пожалуйста, шаблон SQLite.

</details>

---

<details>
<summary>Задание №3: PHP и SQLite.</summary>

## Задание 3. PHP и SQLite

### Техническое задание

В этом задании будут использоваться таблицы из предыдущей задачи: магазины, заказы и клиенты.

Реализуйте для каждой таблицы свой класс с имплементацией следующего интерфейса:

```php
interface DatabaseWrapper
{
    // вставляет новую запись в таблицу, возвращает полученный объект как массив
    public function insert(array $tableColumns, array $values): array;
    // редактирует строку под конкретным id, возвращает результат после изменения
    public function update(int $id, array $values): array;
    // поиск по id
    public function find(int $id): array;
    // удаление по id
    public function delete(int $id): bool;
}
```

_Замечание: возможно, они будут очень похожи, и можно будет ввести базовый класс, в котором будет лежать вся логика._

Добавьте работу с полученными классами — добавление или изменение каких либо строк и вывод результата в консоль.

### Задание со звёздочкой

Добавьте в интерфейс метод для получения фильтрованного списка, то есть

```php
public function get(array $filters): array;
```

Где `$filters` будет ассоциативным массивом, в котором:

- ключ — название поля для фильтрации;
- значение — значение, которое будут фильтровать.

Пока что считаем, что все параметры, которые могут быть, — это только сравнения на равенство.

Внимание! Для выполнения задания Вам, возможно, потребуется включить драйвер pdo_sqlite в настройках PHP. При сдаче задания через http://repl.it/ выберите шаблон PHP (PDO SQLite).

</details>

---

Задание желательно выполнить до следующего вебинара. Любые вопросы по решению задач задавайте в чате учебной группы. Присылать на проверку можно каждую задачу по отдельности или все задачи вместе. Во время проверки по частям ваша домашняя работа будет обозначаться статусом «На доработке».