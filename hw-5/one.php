<?php
$array_url = [
  'https://phpunit.readthedocs.io/ru/latest/installation.html',
  'https://phpunit.readthedocs.io/ru/latest/writing-tests-for-phpunit.html',
  'https://phpunit.readthedocs.io/ru/latest/test-doubles.html',
  'https://phpunit.readthedocs.io/ru/latest/code-coverage-analysis.html',
  'https://phpunit.readthedocs.io/ru/latest/index.html',
  'https://designpatternsphp.readthedocs.io/ru/latest/README.html',
  'https://designpatternsphp.readthedocs.io/ru/latest/Behavioral/Strategy/README.html',
  'https://designpatternsphp.readthedocs.io/ru/latest/Behavioral/Observer/README.html',
  'https://designpatternsphp.readthedocs.io/ru/latest/Structural/Facade/README.html',
  'https://designpatternsphp.readthedocs.io/ru/latest/Creational/Singleton/README.html',
  'https://medium.com/webbdev/solid-4ffc018077da',
  'https://habr.com/ru/company/productivity_inside/blog/505430/',
];
foreach ($array_url as $url) {
  exec("start $url");
}
?>