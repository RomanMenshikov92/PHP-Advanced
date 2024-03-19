<?php

namespace Exceptions;

class ArrayException extends \Exception {
    private $value;

    public function __construct($value) {
        $this->value = $value;
    }
    public function errorMessage() {
        return "Переданное значение " . json_encode($this->value) . " является массивом";
    }
}
?>