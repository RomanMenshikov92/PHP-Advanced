<?php
require_once 'autoloader.php';

use Exceptions\IntException;
use Exceptions\FloatException;
use Exceptions\StringException;
use Exceptions\BoolException;
use Exceptions\ArrayException;
use Exceptions\NullException;

function calculate($input) {
    if (is_int($input)) {
        throw new IntException($input);
    } elseif (is_float($input)) {
        throw new FloatException($input);
    } elseif (is_string($input)) {
        throw new StringException($input);
    } elseif (is_bool($input)) {
        throw new BoolException($input);
    } elseif (is_array($input)) {
        throw new ArrayException($input);
    } elseif (is_null($input)) {
        throw new NullException($input);
    }
}

try {
    calculate(10);
} catch (IntException $e) {
    echo "Ошибка: " . $e->errorMessage() . PHP_EOL;
}

try {
    calculate(3.14);
} catch (FloatException $e) {
    echo "Ошибка: " . $e->errorMessage() . PHP_EOL;
}

try {
    calculate('Привет');
} catch (StringException $e) {
    echo "Ошибка: " . $e->errorMessage() . PHP_EOL;
}

try {
    calculate(false);
} catch (BoolException $e) {
    echo "Ошибка: " . $e->errorMessage() . PHP_EOL;
}

try {
    calculate([10,'eee',30,true,'How are you?', null, 2.5]);
} catch (ArrayException $e) {
    echo "Ошибка: " . $e->errorMessage() . PHP_EOL;
}

try {
    calculate(null);
} catch (NullException $e) {
    echo "Ошибка: " . $e->errorMessage() . PHP_EOL;
}

?>
