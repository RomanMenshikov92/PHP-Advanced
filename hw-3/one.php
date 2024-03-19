<?php
$array_url = [
  'https://www.php.net/manual/ru/language.oop5.traits.php',
  'https://www.php.net/manual/ru/language.oop5.magic.php',
  'https://www.php.net/manual/ru/language.oop5.overloading.php',
  'https://www.php.net/manual/ru/language.oop5.late-static-bindings.php',
  'https://www.php.net/manual/ru/language.oop5.serialization.php',
  'https://www.php.net/manual/ru/language.oop5.variance.php',
  'https://www.php.net/manual/ru/spl.interfaces.php',
];
foreach ($array_url as $url) {
  exec("start $url");
}
?>