<?php

spl_autoload_register(function($class) {
    $classFilePath = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    
    if (file_exists($classFilePath)) {
         require_once $classFilePath;
    }
});

?>