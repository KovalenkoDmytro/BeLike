<?php
global $redux_demo
?>
<div class="header_mobile">
    <div class="logo">
        <?php if (isset($redux_demo['main-logo']['url'])) { ?>
            <a href="<?= get_home_url()?>">
                <img class="logo_img" src="<?= $redux_demo['main-logo']['url'] ?>" alt="<?= $redux_demo['logo-placeholder'] ?>">
            </a>
        <?php } ?>
    </div>
    <div class="burgerMenu" id="burgerMenu">
        <svg xmlns="http://www.w3.org/2000/svg" width="45px" height="45px" viewBox="0 0 24 24">
            <path fill="none" stroke="#dbf92f" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6.001h18m-18 6h18m-18 6h18" />
        </svg>
    </div>

    <div class="navigation__mobile">
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
        <a href="/#prices_section" class="btn _lime"><?= __('Get in touch')?></a>
    </div>
</div>
