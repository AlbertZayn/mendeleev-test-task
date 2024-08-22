<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if ($APPLICATION->GetCurPage(false) === "/") {
    $arResult['ITEMS'] = array_slice($arResult['ITEMS'], 0, 6);
}