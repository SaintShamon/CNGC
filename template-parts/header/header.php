<?php
?>
<header>
    <div class="header_desctop">
        <div class="top_header_block">
            <div class="container">
                <?php 
                    $logo = get_field('header_logo', 'options');
                    $first_button = get_field('header_first_button', 'options');
                    $second_button = get_field('header_second_button', 'options');
                ?>
                <div class="inner_block">
                    <?php if($logo): ?>
                    <div class="header_logo">
                        <a href="<?php echo get_home_url(  ); ?>">
                            <img src="<?php echo $logo; ?>" alt="">
                        </a>
                    </div>
                    <?php endif; ?>
                    <div class="right_top_block">
                        <div class="search">
                            <button class="btn-search">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17 17L12.0962 12.0962M12.0962 12.0962C13.2725 10.9199 14 9.29492 14 7.5C14 3.91015 11.0899 1 7.5 1C3.91015 1 1 3.91015 1 7.5C1 11.0898 3.91015 14 7.5 14C9.29493 14 10.9199 13.2725 12.0962 12.0962Z"
                                        stroke="#0A2238" stroke-width="1.8" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                            <?php echo do_shortcode('[ivory-search id="1226" title="Default Search Form"]'); ?>
                        </div>
                        <?php if($first_button || $second_button): ?>
                        <div class="btn_block">
                            <?php if($first_button): ?>
                            <a href="<?php echo $first_button['url']; ?>"
                                class="button button--secondary"><?php echo $first_button['title']; ?></a>
                            <?php endif; ?>
                            <?php if($second_button): ?>
                            <a href="<?php echo $second_button['url']; ?>"
                                class="button"><?php echo $second_button['title']; ?></a>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_header_block">
            <div class="container">
                <div class="inner_block">
                    <nav class="header__nav">
                        <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
                    </nav>
                    <div class="header_logo">
                        <a href="#">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/logo_white.svg" alt="">
                        </a>
                    </div>
                    <button id="toggle"><span></span></button>
                </div>
            </div>
        </div>
        <div id="side-panel" class="side-panel custom-scrollbar">
            <div class="side-inner">
                <div class="white_bg">
                    <div class="side-header">
                        <div class="search">
                            <button class="btn-search">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17 17L12.0962 12.0962M12.0962 12.0962C13.2725 10.9199 14 9.29492 14 7.5C14 3.91015 11.0899 1 7.5 1C3.91015 1 1 3.91015 1 7.5C1 11.0898 3.91015 14 7.5 14C9.29493 14 10.9199 13.2725 12.0962 12.0962Z"
                                        stroke="#0A2238" stroke-width="1.8" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                            <?php echo do_shortcode('[ivory-search id="1226" title="Default Search Form"]'); ?>
                        </div>
                        <div class="btn_block">
                            <a href="#" class="button button--secondary">DONATE NOW</a>
                            <a href="#" class="button">get involved</a>
                        </div>
                    </div>
                    <div class="side_container">
                        <div class="separator">
                            <div class="line"></div>
                        </div>
                        <div class="location_menu_block">
                            <nav class="header__nav">
                                <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>