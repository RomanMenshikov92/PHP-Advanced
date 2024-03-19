<?php
require_once 'traits/User.php';

$user = new User();
// Пользователь приложения успешно авторизован!
$user->authenticateUser('app_user', 'app_password');
// Пользователь мобильного приложения успешно авторизован!
$user->authenticateUser('mobile_user', 'mobile_password');
// Данные пользователя не совпадают ни с приложением, ни с мобильным приложением.
$user->authenticateUser('invalid_user', 'invalid_password');

?>