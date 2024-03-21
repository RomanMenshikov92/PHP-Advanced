<?php
declare(strict_types= 1);

namespace src\classes;

use src\interfaces\TableWrapperInterface;

class UserTableWrapper implements TableWrapperInterface
{
    private array $rows = [];

    /**
     * @param array|[column => row_value] $values
     */
    public function insert(array $values): void
    {
        $this->rows[] = $values;
    }

    public function update(int $id, array $values): array
    {
        foreach ($this->rows as $key => $row) {
            if ($row['id'] === $id) {
                $this->rows[$key] = array_merge($this->rows[$key], $values);
                return $this->rows[$key];
            }
        }
        return [];
    }

    public function delete(int $id): void
    {
        $this->rows = array_filter($this->rows, fn($row) => $row['id'] !== $id);
    }

    public function get(): array
    {
        return $this->rows;
    }
}

?>