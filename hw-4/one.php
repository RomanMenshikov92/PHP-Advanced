<?php
$array_url = [
  'https://habr.com/ru/companies/ruvds/articles/324936/',
  'https://htmlacademy.ru/blog/php/sql',
  'https://zametkinapolyah.ru/zametki-o-mysql/chast-11-7-indeksy-v-bazax-dannyx-sqlite-indeksaciya-tablic-v-sqlite3-algoritm-b-dereva-v-bazax-dannyx.html',
];
foreach ($array_url as $url) {
  exec("start $url");
}
?>