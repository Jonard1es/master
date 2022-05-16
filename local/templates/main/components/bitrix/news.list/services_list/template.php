<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?php if (!empty($arResult['ITEMS'])): ?>

        <div class="container">
            <div>
                <h1 class="services-title">Основные направления</h1>
                <p class="services-desc">Всё что нужно для производства сайта любой сложности</p>
            </div>
            <div class="services-container">
                <ul class="services-list">
                    <?php foreach ($arResult['ITEMS'] as $arItem): ?>
                        <li class="services-list-item">
                            <?php if (!empty($arItem['PREVIEW_PICTURE'] ['SRC'])): ?>
                                <img src="<?= $arItem['PREVIEW_PICTURE'] ['SRC']?>">
                            <?php endif; ?>
                            <h2><?= isset($arItem['NAME'])? $arItem['NAME'] : ''?></h2>
                            <p><?= isset($arItem['PREVIEW_TEXT'])? $arItem['PREVIEW_TEXT'] : ''?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

<?php endif; ?>
