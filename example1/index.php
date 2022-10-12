<?
// так выглядят обычно все стандартные страницы
// подключение хэдэра
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

/* переопределение -свойств страницы-, которые в ствою очередь наследуются от -раздела- */
$APPLICATION->SetPageProperty("description", "это example1 из -свойств раздела- исправлен в -свойствах страницы-");

/* обращение к методу основного класс, для устанвки тайтла */
$APPLICATION->SetTitle("Title");
?>

<!-- какой-то контент -->
hello world! страница в разделе example111

<? /* подключение футера */require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>