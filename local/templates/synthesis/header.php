<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><? $APPLICATION->ShowTitle(); ?></title>

    <!-- ------ SWIPERJS ------ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- ------ BOOTSTRAP ------ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <? $APPLICATION->ShowHead(); ?>
</head>
<body>

<div id="panel">
    <? $APPLICATION->ShowPanel(); ?>
</div>
<!-- ------ HEADER ------------------------------------ -->
<header class="header container__synthesis">
    <div class="header__upper">
        <div class="menu">
            <a class="menu__item font-synthesis" href="<?= SITE_DIR ?>news">Новости</a>
            <a class="menu__item font-synthesis" href="">Доставка и оплата</a>
            <a class="menu__item font-synthesis" href="">Контакты</a>
            <a class="menu__item font-synthesis" href="">Бренды</a>
        </div>
        <div class="contacts font-synthesis">+7 800 350-90-72</div>
        <div class="userbar">
            <img src="<?=SITE_TEMPLATE_PATH?>/assets/header/user-icon.svg" alt="">
            <img src="<?=SITE_TEMPLATE_PATH?>/assets/header/compare-icon.svg" alt="">
            <img src="<?=SITE_TEMPLATE_PATH?>/assets/header/basket-icon.svg" alt="">
        </div>
    </div>
    <div class="header__nether">
        <a class="catalog_wrapper silver-button">
            <button class="catalog-button" type="button" data-bs-toggle="collapse"
                    data-bs-target=".collapseble-catalog" aria-expanded="false"
                    aria-controls="catalog-categories catalog-subcategories">
                <img class="catalog-loupe" src="<?=SITE_TEMPLATE_PATH?>/assets/header/catalog-loupe.svg" alt="">
                <img class="catalog-cross" src="<?=SITE_TEMPLATE_PATH?>/assets/header/catalog-cross.svg" alt="">
                <span class="font-synthesis">Каталог</span>
            </button>
        </a>
        <div class="burger-menu">
            <span class="burger-lines"></span>
        </div>
        <a class="header-logo" href="/">
            <img src="<?=SITE_TEMPLATE_PATH?>/assets/header/logo.svg" alt="">
        </a>
        <div class="header__search">
            <img class="header-loupe" src="<?=SITE_TEMPLATE_PATH?>/assets/header/loupe.svg" alt="">
            <input class="input-search font-synthesis" type="search" placeholder="Введите значение">
        </div>
    </div>
    <!-- ------ CATALOG ------------------------------------------ -->
    <section class="catalog container__synthesis">
        <div class="row collapseble-catalog-wrapper">
            <div class="col categories__wrapper">
                <div class="collapse collapseble-catalog" id="catalog-categories">
                    <div class="catalog__menu font-synthesis active">
                        Лампы
                    </div>
                    <div class="catalog__menu font-synthesis">
                        Выключатели
                    </div>
                    <div class="catalog__menu font-synthesis">
                        Розетки
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="collapse collapseble-catalog" id="catalog-subcategories">
                    <div class="subcategories font-synthesis">
                        <div class="subcategories__item">
                            <div>
                                <span class="product-title font-synthesis">Лампы</span>
                                <a href="#" class="silver-button quantity-btn font-synthesis">3676 позиций</a>
                            </div>
                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/main-page/category-card-img1.svg" alt="">
                        </div>
                        <div class="subcategories__item">
                            <div>
                                <span class="product-title font-synthesis">Светильники</span>
                                <a href="#" class="silver-button quantity-btn font-synthesis">3676 позиций</a>
                            </div>
                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/main-page/category-card-img2.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>

	