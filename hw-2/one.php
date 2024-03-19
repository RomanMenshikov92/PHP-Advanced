<?php
$array_url = [
  'https://www.php.net/manual/ru/language.oop5.inheritance.php',
  'https://www.php.net/manual/ru/language.oop5.visibility.php',
  'https://www.php.net/manual/ru/language.oop5.abstract.php',
  'https://www.php.net/manual/ru/language.oop5.interfaces.php',
];
foreach ($array_url as $url) {
  exec("start $url");
}
?>