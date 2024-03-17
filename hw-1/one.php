<?php
$array_url = [
  'https://en.wikipedia.org/wiki/PHP_Standard_Recommendation',
  'https://svyatoslav.biz/misc/psr_translation/#_PSR-1',
  'https://svyatoslav.biz/misc/psr_translation/#_PSR-2',
  'https://redwerk.jobs/blog/psr-12-%D0%BF%D0%B5%D1%80%D0%B5%D0%B2%D0%BE%D0%B4-%D1%80%D0%B0%D1%81%D1%88%D0%B8%D1%80%D0%B5%D0%BD%D0%BD%D0%BE%D0%B3%D0%BE-%D1%81%D1%82%D0%B0%D0%BD%D0%B4%D0%B0%D1%80%D1%82%D0%B0-%D0%BE%D1%84%D0%BE/',
  'https://svyatoslav.biz/misc/psr_translation/#_PSR-0',
  'https://svyatoslav.biz/misc/psr_translation/#_PSR-4',
];
foreach ($array_url as $url) {
  exec("start $url");
}
?>