<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="wrapper">

    <header class="header">
        <div class="header__content">
            <div class="logo">
                <a href="" class="logo__text"><?php bloginfo('name'); ?></a>
                <div class="logo__baseline"><?php bloginfo('description'); ?></div>
            </div>

            <nav class="main-nav">
                <?php
                wp_nav_menu([
                    'theme_location' => 'main',
                    'container'      => null,
                ])
                ?>
            </nav>
        </div>

        <div class="header__tools">
            <div class="search">
                <form action="" class="search__form">
                    <label for="search" class="search__form__label">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </label>
                    <input type="text" name="search" id="search" class="search__form__input" placeholder="Rechercher">
                </form>
            </div>
            <a href="" class="action-button">
                S'abonner
            </a>
        </div>
    </header>

    <main class="main">
