<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Localization\Loc;?>

<?$APPLICATION->IncludeComponent("bitrix:sale.personal.profile.detail", "",
	array(
		"PATH_TO_LIST" => $arResult["PATH_TO_PROFILE"],
		"PATH_TO_DETAIL" => $arResult["PATH_TO_PROFILE_DETAIL"],
		"SET_TITLE" => $arParams["SET_TITLE"],
		"USE_AJAX_LOCATIONS" => $arParams["USE_AJAX_LOCATIONS_PROFILE"],
		"COMPATIBLE_LOCATION_MODE" => $arParams["COMPATIBLE_LOCATION_MODE_PROFILE"],		
		"ID" => $arResult["VARIABLES"]["ID"]
	),
	false
);?>

<?//TITLE//
$APPLICATION->SetTitle(Loc::getMessage("SPS_CHAIN_PROFILE_DETAIL", array("#ID#" => $arResult["VARIABLES"]["ID"])));

//BREADCRUMBS//
$APPLICATION->AddChainItem(Loc::getMessage("SPS_CHAIN_PROFILE"), $arResult["PATH_TO_PROFILE"]);
$APPLICATION->AddChainItem(Loc::getMessage("SPS_CHAIN_PROFILE_DETAIL", array("#ID#" => $arResult["VARIABLES"]["ID"])));?>