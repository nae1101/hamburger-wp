<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>最終課題hamburgerサイト</title>
    <?php wp_head(); ?>
</head>

<body id="body" <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <main class="l-body">
        <div class=" l-body__overlay"></div>

    <div class="l-container">

    <header class="l-header">
        <button class="p-nav__title c-font__Robot c-fontweight__bold u-color__gray js-sidebar-menu">Menu</button>

        <h1 class="p-header-text__title c-font__Robot c-fontweight__bold u-color__gray"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="u-color__gray"><?php bloginfo( 'name' ); ?></a></h1>

        <?php get_search_form(); ?>

    
    </header>