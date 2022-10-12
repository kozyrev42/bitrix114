<?php
/* страница для отладки */
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';
echo '111';
dd (\Bitrix\Main\Config\Configuration::getValue('connections'));

