<?php

namespace Exceptions;

class BoolException extends \Exception {
    private $value;

    public function __construct($value) {
        $this->value = $value;
    }
    public function errorMessage() {
        return "Переданное значение (" . var_export($this->value, true) . ") является булевым значением";
    }
}
?>