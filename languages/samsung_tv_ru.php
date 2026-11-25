<?php
$dictionary=array(
'SAMSUNG_TV_ENDPOINT'=>'Адрес API',
'SAMSUNG_TV_METHOD'=>'HTTP-метод',
'SAMSUNG_TV_TOKEN'=>'Токен доступа',
'SAMSUNG_TV_REGION'=>'Регион / маршрут',
'SAMSUNG_TV_TRACKING'=>'Номер отправления',
'SAMSUNG_TV_PAYLOAD'=>'Шаблон POST-запроса',
'SAMSUNG_TV_HINT'=>'Локальный модуль. Данные не отправляются, пока сценарий не вызовет api().',
'SAMSUNG_TV_LAST'=>'Последний результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}