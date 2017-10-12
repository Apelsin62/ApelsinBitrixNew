<?global $arDiscPrFilter;
$arDiscPrFilter = array(
    "!PROPERTY_DISCOUNT" => false,
	"PROPERTY_THIS_COLLECTION" => false
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"slider_left", 
	array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "16",
		"ELEMENT_SORT_FIELD" => "RAND",
		"ELEMENT_SORT_ORDER" => "ASC",
		"ELEMENT_SORT_FIELD2" => "",
		"ELEMENT_SORT_ORDER2" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "NEWPRODUCT",
			2 => "SALELEADER",
			3 => "DISCOUNT",
			4 => "",
		),
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_SUBSECTIONS" => "A",
		"SHOW_ALL_WO_SECTION" => "Y",
		"BASKET_URL" => "/personal/cart/",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"FILTER_NAME" => "arDiscPrFilter",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"SET_TITLE" => "N",
		"MESSAGE_404" => "",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"FILE_404" => "",
		"DISPLAY_COMPARE" => "N",
		"PAGE_ELEMENT_COUNT" => "6",
		"LINE_ELEMENT_COUNT" => "",
		"PRICE_CODE" => array(
			0 => "Розничная цена",
			1 => "М. оптовая",
			2 => "Ср. оптовая",
			3 => "Оптовая",
			4 => "Кр. оптовая",
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "N",
		"USE_PRODUCT_QUANTITY" => "Y",
		"ADD_PROPERTIES_TO_BASKET" => "N",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRODUCT_PROPERTIES" => array(
		),
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_BASE_LINK" => "",
		"PAGER_PARAMS_NAME" => "",
		"OFFERS_CART_PROPERTIES" => array(
			0 => "COLOR,PROP2,PROP3",
		),
		"OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_PROPERTY_CODE" => array(
			0 => "COLOR",
			1 => "PROP2",
			2 => "PROP3",
			3 => "",
		),
		"OFFERS_SORT_FIELD" => "SORT",
		"OFFERS_SORT_ORDER" => "ASC",
		"OFFERS_SORT_FIELD2" => "ID",
		"OFFERS_SORT_ORDER2" => "ASC",
		"OFFERS_LIMIT" => "",
		"SECTION_ID" => "",
		"SECTION_CODE" => "",
		"SECTION_URL" => "",
		"DETAIL_URL" => "",
		"USE_MAIN_ELEMENT_SECTION" => "Y",
		"CONVERT_CURRENCY" => "N",
		"CURRENCY_ID" => "",
		"HIDE_NOT_AVAILABLE" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"COMPARE_PATH" => "",
		"BACKGROUND_IMAGE" => "",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_IMG_WIDTH" => "178",
		"DISPLAY_IMG_HEIGHT" => "178",
		"COMPONENT_TEMPLATE" => "slider_left",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"OR\",\"True\":\"True\"},\"CHILDREN\":[{\"CLASS_ID\":\"CondIBProp:16:3174\",\"DATA\":{\"logic\":\"Equal\",\"value\":40553}},{\"CLASS_ID\":\"CondIBProp:16:3172\",\"DATA\":{\"logic\":\"Equal\",\"value\":40549}},{\"CLASS_ID\":\"CondIBProp:16:3173\",\"DATA\":{\"logic\":\"Equal\",\"value\":40551}}]}",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"SEF_MODE" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"BROWSER_TITLE" => "-",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"COMPATIBLE_MODE" => "Y"
	),
	false
);?>