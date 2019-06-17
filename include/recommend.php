
<?
$propertyCode = "NOVINKA";
$yesCodValue = "0";
$property_enums = CIBlockPropertyEnum::GetList(Array("ID"=>"ASC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>16, "CODE"=>$propertyCode));
while ($enum_fields = $property_enums->GetNext()) {
    if($enum_fields["VALUE"] == "Да") {
        $yesCodValue = $enum_fields["ID"];
    }
}

global $arNewPrFilter;
$arNewPrFilter = array(
    "XML_ID" => array(

    '1dd6d7c0-b08e-11e8-8102-00155d862e1f',
    'baa4d4d7-aa36-11e6-80eb-00155dfef489',
    'efa456f8-5170-11e1-ab53-001cc494be80',
    'e3309c9e-5e67-11e8-8156-00155d3703b3',
    'b54c1c85-6b15-11df-8f04-000e0c431b58',
    '847e76f9-1a4e-11e5-8103-00155d3a0124',
    '3cb52990-205b-11e3-b4a3-005056be1f7b',
    'ac34bc82-780f-11de-9531-000e0c431b58',
    '9ff99ec0-cffc-11e8-8103-00155d862e1f',
    '492c42ee-d9ca-11de-860d-000e0c431b58',
    '3766efb4-5290-11de-8f53-000e0c431b58',
    'ff28a17c-04a2-11e9-8103-00155d862e1f',
    'c8ef7bb2-3a0a-11de-80fd-000e0c431b58',
    'fea1773e-b965-11e7-80fa-00155d370324',
    'b9aaa6bb-9769-11e8-8102-00155d862e1f',
    '663da2ed-24da-11e9-8104-00155d862e1f',
    '3cb52990-205b-11e3-b4a3-005056be1f7b',
    '74f94bbf-99c7-11e8-8102-00155d862e1f',
    )
);

$sortField = array(
    "RAND",
    "SORT",
    "NAME",
    "PRICE",
    "ID",
);
$sortOrder = array(
    "ASC",
    "DESC",
);



?>
<?$APPLICATION->IncludeComponent("bitrix:catalog.section", "filtered",
    array(
        "IBLOCK_TYPE" => "catalog",
        "IBLOCK_ID" => "16",
        "ELEMENT_SORT_FIELD" => $sortField[rand(0,4)],
        "ELEMENT_SORT_ORDER" => $sortOrder[rand(0,1)],
        "ELEMENT_SORT_FIELD2" => "",
        "ELEMENT_SORT_ORDER2" => "",
        "PROPERTY_CODE" => array(
            0 => "NOVINKA",
            1 => "KHITPRODAZH",
            2 => "AKTSIYA",
            3 => "",
        ),
        "SET_META_KEYWORDS" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "SHOW_ALL_WO_SECTION" => "Y",
        "BASKET_URL" => "/personal/cart/",
        "ACTION_VARIABLE" => "action",
        "PRODUCT_ID_VARIABLE" => "id",
        "SECTION_ID_VARIABLE" => "SECTION_ID",
        "PRODUCT_QUANTITY_VARIABLE" => "quantity",
        "PRODUCT_PROPS_VARIABLE" => "prop",
        "FILTER_NAME" => "arNewPrFilter",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000",
        "CACHE_FILTER" => "Y",
        "CACHE_GROUPS" => "Y",
        "SET_TITLE" => "N",
        "MESSAGE_404" => "",
        "SET_STATUS_404" => "N",
        "SHOW_404" => "N",
        "FILE_404" => "",
        "DISPLAY_COMPARE" => "Y",
        "PAGE_ELEMENT_COUNT" => "8",
        "LINE_ELEMENT_COUNT" => "",
        "PRICE_CODE" => array(
            0 => "Розничная цена",
            1 => "М. оптовая",
            2 => "Ср. оптовая",
            3 => "Оптовая",
            4 => "Кр. оптовая",
            5 => "ИМ",
        ),
        "USE_PRICE_COUNT" => "N",
        "SHOW_PRICE_COUNT" => "1",
        "PRICE_VAT_INCLUDE" => "Y",
        "USE_PRODUCT_QUANTITY" => "Y",
        "ADD_PROPERTIES_TO_BASKET" => "",
        "PARTIAL_PRODUCT_PROPERTIES" => "",
        "PRODUCT_PROPERTIES" => "",
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
            0 => "COLOR",
            1 => "PROP2",
            2 => "PROP3"
        ),
        "OFFERS_FIELD_CODE" => array(),
        "OFFERS_PROPERTY_CODE" => array(
            0 => "COLOR",
            1 => "PROP2",
            2 => "PROP3"
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
        "HIDE_NOT_AVAILABLE_OFFERS" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "COMPARE_PATH" => "",
        "BACKGROUND_IMAGE" => "",
        "DISABLE_INIT_JS_IN_COMPONENT" => "",
        "DISPLAY_IMG_WIDTH"	 =>	"178",
        "DISPLAY_IMG_HEIGHT" =>	"178",
        "PROPERTY_CODE_MOD" => array(
            0 => "GUARANTEE"
        )
    ),
    false
);?>


<?
/*
$APPLICATION->IncludeComponent("bitrix:catalog.bigdata.products", "",
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"RCM_TYPE" => "any",
		"ID" => "",
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "16",
		"SHOW_FROM_SECTION" => "N",
		"SECTION_ID" => "",
		"SECTION_CODE" => "",
		"SECTION_ELEMENT_ID" => "",
		"SECTION_ELEMENT_CODE" => "",
		"DEPTH" => "",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"PRODUCT_SUBSCRIPTION" => "N",
		"SHOW_NAME" => "N",
		"SHOW_IMAGE" => "N",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"PAGE_ELEMENT_COUNT" => "8",
		"DETAIL_URL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"DISPLAY_IMG_WIDTH" => "178",
		"DISPLAY_IMG_HEIGHT" => "178",
		"SHARPEN" => "30",
		"DISPLAY_COMPARE" => "Y",
		"SHOW_POPUP" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"SHOW_OLD_PRICE" => "N",
        "PRICE_CODE" => array(
            0 => "Розничная цена",
            1 => "М. оптовая",
            2 => "Ср. оптовая",
            3 => "Оптовая",
            4 => "Кр. оптовая",
			5 => "ИМ",
        ),
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"CONVERT_CURRENCY" => "N",
		"BASKET_URL" => "/personal/cart/",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_QUANTITY_VARIABLE" => "",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"SHOW_PRODUCTS_16" => "Y",
		"PROPERTY_CODE_16" => array(),
		"PROPERTY_CODE_MOD" => array(
			0 => "GUARANTEE"
		),
		"CART_PROPERTIES_16" => array(),
		"ADDITIONAL_PICT_PROP_16" => "",
		"LABEL_PROP_16" => "",
		"PROPERTY_CODE_17" => array(
			0 => "COLOR",
			1 => "PROP2",
			2 => "PROP3"
		),
		"CART_PROPERTIES_17" => array(
			0 => "COLOR",
			1 => "PROP2",
			2 => "PROP3"
		),
		"ADDITIONAL_PICT_PROP_17" => "",
		"OFFER_TREE_PROPS_17" => array(
			0 => "COLOR",
			1 => "PROP2",
			2 => "PROP3"
		)
	),
	false
);
*/
?>