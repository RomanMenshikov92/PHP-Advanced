<?php

namespace Objects\Classes;

use Objects\Interfaces\DatabaseWrapper;

class Product_DB implements DatabaseWrapper
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function insert(array $tableColumns, array $values): array
    {
        // Реализация вставки новой записи в таблицу магазинов
        return [];
    }

    public function update(int $id, array $values): array
    {
        // Реализация редактирования строки по id
        return [];
    }

    public function find(int $id): array
    {
         // Реализация поиска по id
        return [];
    }

    public function delete(int $id): bool
    {
        // Реализация удаления по id
        return true;
    }

    public function get(array $filters): array
    {
       // Реализация получения фильтрованного списка
        return [];
    }
}
?>