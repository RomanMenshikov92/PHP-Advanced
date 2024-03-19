<?php

namespace Exceptions;

class StringException extends \Exception {
    private $value;

    public function __construct($value) {
        $this->value = $value;
    }
    public function errorMessage() {
        return "Переданное значение ($this->value) является строкой";
    }
}
?>