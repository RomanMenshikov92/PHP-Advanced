<?php

use Objects\Classes\Shop_DB;
use Objects\Classes\Product_DB;
use Objects\Classes\Order_DB;
use Objects\Classes\Client_DB;

// Подключение к базе данных SQLite
try {
    $db = new PDO('sqlite:/path/to/your/database.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    die();
}

$db = new PDO('sqlite:/path/to/your/database.db');

$shopDatabase = new Shop_DB($db);
$productDatabase = new Product_DB($db);
$orderDatabase = new Order_DB($db);
$clientDatabase = new Client_DB($db);

// Пример использования методов
$newShop = $shopDatabase->insert(['name', 'address'], ['Магазин 6', 'Адрес 6']);
$updatedProduct = $productDatabase->update(1, ['name' => 'Новое название']);
$foundOrder = $orderDatabase->find(2);
$deletedClient = $clientDatabase->delete(3);
// Фильтрация данных
$results = $clientDatabase->get(['name' => 'Иванов Иван']);

?>