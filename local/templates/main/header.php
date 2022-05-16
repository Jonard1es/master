<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
    use Bitrix\Main\Page\Asset;
?>

<!DOCTYPE html>
<html>
<head>

    <?php

    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/style.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/about.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/services.css');

    ?>
    <title><?$APPLICATION->ShowTitle();?></title>

    <?$APPLICATION->ShowHead();?>
</head>
<body>

<div id="panel">
    <?$APPLICATION->ShowPanel();?>
</div>

<header class="header">
    <div class="container">
        <nav class="nav">
            <img src="<?= SITE_TEMPLATE_PATH?>/assets/img/logo.svg" alt="realproger logo" class="nav-logo">
            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "top_menu",
                array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(
                    ),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "N",
                    "ROOT_MENU_TYPE" => "top",
                    "USE_EXT" => "N",
                    "COMPONENT_TEMPLATE" => "top_menu"
                ),
                false
            );?>
        </nav>
    </div>
</header>

<div class="bread-crumbs">
    <div class="container">
        <div class="bread-crumbs-container">
            <div class="bread-crumbs-current-position">
                <h1><?= $APPLICATION->ShowTitle(false); ?></h1>
            </div>
            <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "top_navigate", Array(
                "PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
                "SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
                "START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
            ),
                false
            );?>
        </div>
    </div>
</div>