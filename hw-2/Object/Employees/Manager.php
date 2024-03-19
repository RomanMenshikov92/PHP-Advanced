<?php

namespace Object\Employees;

use Object\Interfaces\LeadInterface;

class Manager extends AbstractEmployee implements LeadInterface {
    public function work():mixed {
        return "Обязанность: Управляет командой и проектами.";
    }

    public function lead():string {
        return "Успешно руководит командой.";
    }
}

?>
