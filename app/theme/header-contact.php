<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dk
 */

global $redux_demo
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php if (isset($redux_demo['favicon']['url'])) { ?>
        <link rel="icon" href="<?= $redux_demo['favicon']['url'] ?>">
    <?php } ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page">
    <header id="header__contact" class="header __contact content_wrapper">
        <div class="logo">
            <?php if (isset($redux_demo['secondary-logo']['url'])) { ?>
                <a href="<?= get_home_url()?>">
                    <img class="logo_img" src="<?= $redux_demo['secondary-logo']['url'] ?>" alt="<?= $redux_demo['logo-placeholder'] ?>">
                </a>
            <?php } ?>
        </div>

        <nav id="navigation">
            <?php
            wp_nav_menu(
                array(
                    'container_class' => 'navigation',
                    'theme_location' => 'header',
                    'menu_id' => 'navigation',
                )
            );
            ?>
        </nav>
        <a href="/#prices_section" class="btn _violet"><?= __('Get in touch')?></a>
    </header>
	<?php get_template_part( 'template-parts/header_mobile', 'header_mobile',['main'=> true] ) ?>
