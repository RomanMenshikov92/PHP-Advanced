<?php

namespace Exceptions;

class NullException extends \Exception {
    private $value;

    public function __construct($value) {
        $this->value = $value;
    }
    public function errorMessage() {
        return "Переданное значение (" . gettype($this->value) . ") является null-объектом";
    }
}
?>