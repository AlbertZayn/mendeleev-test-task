<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Синтез"); ?>
<!-- ------ WORKAREA ------------------------------------------ -->
<section class="workarea">
    <!-- ------ BANNERS ------------------------------------------ -->
    <section class="banner container__synthesis">
        <div class="swiper">
            <div class="banner__buttons">
                <button class="mailing-list__button banner__button-prev" type="submit"><img
                            src="/local/templates/synthesis/assets/footer/button-right-arrow.svg" alt=""></button>
                <button class="mailing-list__button banner__button-next" type="submit"><img
                            src="/local/templates/synthesis/assets/footer/button-right-arrow.svg" alt=""></button>
            </div>
            <div class="banners-pagination swiper-pagination">
            </div>
            <div class="swiper-wrapper">
                <div class="banner__card swiper-slide">
                    <div class="banner__item">
                        <div class="maxconnect-text">
                            <div class="maxconnect-text__item font-synthesis">
                                MAX­CONNECT
                            </div>
                            <div class="maxconnect-text__item font-synthesis">
                                плюс один новая категория<br>
                                - прокалывающие<br>
                                ответвители
                            </div>
                        </div>
                        <img src="/local/templates/synthesis/assets/main-page/maxconnect-banner.png"
                             class="maxconnect-banner" alt="">
                        <button class="details font-synthesis">Подробнее</button>
                    </div>
                </div>
                <div class="banner__card swiper-slide">
                    <div class="banner__item">
                        <div class="maxconnect-text">
                            <div class="maxconnect-text__item font-synthesis">
                                плюс 7000 позиций
                            </div>
                            <div class="maxconnect-text__item font-synthesis">
                                ламп в нашем каталоге<br>
                                <br>
                                <br>
                            </div>
                        </div>
                        <img src="/local/templates/synthesis/assets/main-page/lamps-banner.png"
                             class="maxconnect-banner" alt="">
                        <button class="details font-synthesis">Подробнее</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ------ PRODUCT CATEGORIES ------------------------------------------ -->

    <? $APPLICATION->IncludeComponent(
        "bitrix:catalog.section.list",
        "products_categories",
        array(
            "ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
            "ADD_SECTIONS_CHAIN" => "Y",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "COUNT_ELEMENTS" => "Y",
            "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
            "FILTER_NAME" => "sectionsFilter",
            "HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
            "IBLOCK_ID" => "16",
            "IBLOCK_TYPE" => "lamps",
            "SECTION_CODE" => "",
            "SECTION_FIELDS" => array("", ""),
            "SECTION_ID" => $_REQUEST["SECTION_ID"],
            "SECTION_URL" => "",
            "SECTION_USER_FIELDS" => array("", ""),
            "SHOW_PARENT_NAME" => "Y",
            "TOP_DEPTH" => "2",
            "VIEW_MODE" => "LINE",
            "SECTIONS_COUNT" => "6"
        )
    ); ?>
    <div class="products-wrap container__synthesis">
        <div class="container__synthesis categories-wrap">
            <a href="<?= SITE_DIR ?>lamps/" class="categories-btn font-synthesis silver-button">Все
                категории</a>
        </div>
    </div>

    <!-- ------ BRANDS ------------------------------------------ -->
    <section class="news-list brands container__synthesis">
        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "brands_news.list",
            array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "Y",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "COMPONENT_TEMPLATE" => ".default",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array(0 => "", 1 => "",),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "17",
                "IBLOCK_TYPE" => "brands",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "20",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array(0 => "", 1 => "",),
                "SET_BROWSER_TITLE" => "Y",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "Y",
                "SET_META_KEYWORDS" => "Y",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "Y",
                "SHOW_404" => "N",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N"
            )
        ); ?>
        <a class="transparent-button font-synthesis brands-pagination" href="<?= SITE_DIR ?>brands">Все
            бренды</a>
    </section>
    <!-- ------ CONSULT SECTION ------------------------------------------ -->
    <section class="container__synthesis consult-wrapper">
        <div class="consult">
            <img src="/local/templates/synthesis/assets/main-page/consult-dude.png" alt="">
            <? $APPLICATION->IncludeComponent("bitrix:form.result.new", "consult", array(
                "CACHE_TIME" => "3600",    // Время кеширования (сек.)
                "CACHE_TYPE" => "A",    // Тип кеширования
                "CHAIN_ITEM_LINK" => "",    // Ссылка на дополнительном пункте в навигационной цепочке
                "CHAIN_ITEM_TEXT" => "",    // Название дополнительного пункта в навигационной цепочке
                "EDIT_URL" => "",    // Страница редактирования результата
                "IGNORE_CUSTOM_TEMPLATE" => "N",    // Игнорировать свой шаблон
                "LIST_URL" => "",    // Страница со списком результатов
                "SEF_MODE" => "N",    // Включить поддержку ЧПУ
                "SUCCESS_URL" => "",    // Страница с сообщением об успешной отправке
                "USE_EXTENDED_ERRORS" => "Y",    // Использовать расширенный вывод сообщений об ошибках
                "VARIABLE_ALIASES" => array(
                    "RESULT_ID" => "RESULT_ID",
                    "WEB_FORM_ID" => "WEB_FORM_ID",
                ),
                "WEB_FORM_ID" => "3",    // ID веб-формы
                "AJAX_MODE" => "Y",
                "AJAX_OPTION_SHADOW" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N",
            ),
                false
            ); ?>
        </div>
    </section>
    <!-- ------ ARTICLES SECTION ------------------------------------------ -->
    <div class="news-list articles-wrapper container__synthesis">
        <section class="articles">
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "articles_news.list",
                array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "COMPONENT_TEMPLATE" => ".default",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array(0 => "", 1 => "",),
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "19",
                    "IBLOCK_TYPE" => "articles",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "4",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Новости",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array(0 => "", 1 => "",),
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "Y",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "ASC",
                    "STRICT_SECTION_CHECK" => "N"
                )
            ); ?>
        </section>
        <div class="container__synthesis articles-wrap">
            <a class="articles-btn container__synthesis font-synthesis silver-button" href="<?= SITE_DIR ?>articles">Все статьи</a>
        </div>
    </div>
    <section class="container__synthesis">

    </section>
 </section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>