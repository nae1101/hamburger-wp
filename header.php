<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./scss/foundation/_reset.scss">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1+Code:wght@700&family=M+PLUS+1:wght@400;700&family=Noto+Sans+JP:wght@500&family=Roboto:wght@700&display=swap" rel="stylesheet"> -->

    <title>最終課題hamburgerサイト</title>
    <?php wp_head(); ?>
</head>

<body id="body" <?php body_class(); ?>>
    <main class="l-body">
        <div class=" l-body__overlay"></div>

    <div class="l-container">

    <header class="l-header">
        <button class="p-nav__title c-font__Robot c-fontweight__bold u-color__gray js-sidebar-menu">Menu</button>

        <h1 class="p-header-text__title c-font__Robot c-fontweight__bold u-color__gray"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="u-color__gray"><?php bloginfo( 'name' ); ?></a></h1>

        <!-- <form method="post" class="p-search">
            <div class="p-search__box">
            <input type="search" name="search" class="p-search__input c-input--search c-font__Mplus1 c-fontweight__bold">
            </div>
            <button type="submit" class="p-search__button c-button--search c-font__Mplus1 c-fontweight__bold u-color__gray">検索</button>
        </form> -->

        <?php get_search_form(); ?>

    
    </header>