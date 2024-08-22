<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новости"); ?><?$APPLICATION->IncludeComponent("demo:news.detail", "detail_news.list", Array(
	"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PANEL" => "N",	// Добавлять в админ. панель кнопки для данного компонента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"ELEMENT_ID" => $_REQUEST["ID"],	// ID новостиr
		"IBLOCK_ID" => "20",	// Код информационного блока
		"IBLOCK_TYPE" => "news",	// Тип информационного блока (используется только для проверки)
		"IBLOCK_URL" => "news.php?ID=#IBLOCK_ID#",	// URL страницы просмотра списка элементов (по умолчанию - из настроек инфоблока)
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
	),
	false
);?><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>