<?
// так выглядят обычно все стандартные страницы
// подключение хэдэра
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

/* обращение к методу основного класс, для установи тайтла */
$APPLICATION->SetTitle("Title222");
?>

<!-- какой-то контент -->
hello world! страница в разделе example 222


<? /* подключение футера */require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>