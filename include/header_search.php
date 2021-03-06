<?$APPLICATION->IncludeComponent(
	"altop:search.title", 
	".default", 
	array(
		"SHOW_INPUT" => "Y",
		"INPUT_ID" => "title-search-input",
		"CONTAINER_ID" => "altop_search",
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "16",
		"PAGE" => "/catalog/",
		"NUM_CATEGORIES" => "1",
		"TOP_COUNT" => "7",
		"ORDER" => "rank",
		"USE_LANGUAGE_GUESS" => "Y",
		"CHECK_DATES" => "N",
		"PROPERTY_CODE_MOD" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER2" => "asc",
		"OFFERS_LIMIT" => "",
		"SHOW_PRICE" => "Y",
		"PRICE_CODE" => array(
			0 => "Розничная цена",
			1 => "М. оптовая",
			2 => "Ср. оптовая",
			3 => "Оптовая",
			4 => "Кр. оптовая",
			5 => "ИМ",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"SHOW_ADD_TO_CART" => "Y",
		"SHOW_ALL_RESULTS" => "Y",
		"CATEGORY_0_TITLE" => GetMessage("SEARCH_GOODS"),
		"CATEGORY_0" => array(
			0 => "iblock_catalog",
		),
		"CATEGORY_0_iblock_catalog" => array(
			0 => "16",
		),
		"CONVERT_CURRENCY" => "N",
		"CURRENCY_ID" => "",
		"OFFERS_CART_PROPERTIES" => array(
			0 => "ARTNUMBER",
		),
		"HIDE_NOT_AVAILABLE" => "Y",
		"HIDE_NOT_AVAILABLE_OFFERS" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"SEARCH_SECTION_ACTIVE" => "Y"
	),
	false
);?> 