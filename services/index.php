<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Услуги");
?>
    <section class="about-us">
    <div class="container">
        <div class="about-us-container">
            <div class="about-us-text">
                <h1 class="about-us-title">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "page",
                            "AREA_FILE_SUFFIX" => "about_title"
                        )
                    ); ?> </h1>
                <div>
                    <h1 class="about-us-title">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "page",
                                "AREA_FILE_SUFFIX" => "about_text"
                            )
                        ); ?> </h1>
                </div>
            </div>
            <div>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "page",
                        "AREA_FILE_SUFFIX" => "about_img"
                    )
                ); ?>
            </div>
            <div>
                <h1 class="title-skills">Skills</h1>
                <div>
                    <div>
                        Web-Design
                    </div>
                    <div class="progress-bar">
                    </div>
                </div>
                <div>
                    <div>
                        PHP (Bitrix/Laravel)
                    </div>
                    <div class="progress-bar">
                    </div>
                </div>
                <div>
                    <div>
                        Node.js
                    </div>
                    <div class="progress-bar">
                    </div>
                </div>
                <div>
                    <div>
                        JavaScript (React / Angular)
                    </div>
                    <div class="progress-bar">
                    </div>
                </div>
                <div>
                    <div>
                        CSS
                    </div>
                    <div class="progress-bar">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <section class="services">
<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "detail_services_list",
    array(
        "51" => tru,
        "52" => fals,
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "N",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "N",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "N",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "N",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(0 => "NAME", 1 => "PREVIEW_TEXT", 2 => "PREVIEW_PICTURE", 3 => "",),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "2",
        "IBLOCK_TYPE" => "services",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "N",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "10",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => "",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(0 => "", 1 => "",),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "",
        "STRICT_SECTION_CHECK" => "N"
    )
); ?>

    </section><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>