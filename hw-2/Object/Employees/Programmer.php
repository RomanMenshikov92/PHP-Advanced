<?php

namespace Object\Employees;

use Object\Interfaces\ApplicationCreatorInterface;

class Programmer extends AbstractEmployee implements ApplicationCreatorInterface {
    public function work():mixed {
        return "Обязанность: Разрабатывает приложения и пишет код.";
    }

    public function createApplication():string {
        return "Создает приложения с высококачественным кодом.";
    }
}

?>
