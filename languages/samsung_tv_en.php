<?php
$dictionary=array(
'SAMSUNG_TV_ENDPOINT'=>'API endpoint',
'SAMSUNG_TV_METHOD'=>'HTTP method',
'SAMSUNG_TV_TOKEN'=>'Access token',
'SAMSUNG_TV_REGION'=>'Region / route',
'SAMSUNG_TV_TRACKING'=>'Tracking number',
'SAMSUNG_TV_PAYLOAD'=>'POST payload template',
'SAMSUNG_TV_HINT'=>'Local-first module. No data leaves the system until api() is called.',
'SAMSUNG_TV_LAST'=>'Last result'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}