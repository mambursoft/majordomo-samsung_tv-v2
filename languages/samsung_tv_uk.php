<?php
$dictionary=array(
'SAMSUNG_TV_ENDPOINT'=>'Адреса API',
'SAMSUNG_TV_METHOD'=>'HTTP-метод',
'SAMSUNG_TV_TOKEN'=>'Токен доступу',
'SAMSUNG_TV_REGION'=>'Регіон / маршрут',
'SAMSUNG_TV_TRACKING'=>'Номер відправлення',
'SAMSUNG_TV_PAYLOAD'=>'Шаблон POST-запиту',
'SAMSUNG_TV_HINT'=>'Локальний модуль. Дані не надсилаються, доки сценарій не викличе api().',
'SAMSUNG_TV_LAST'=>'Останній результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}