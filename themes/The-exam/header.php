<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title><?php bloginfo('name'); wp_title(); ?></title>


    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>"/>

    <?php wp_head(); ?>
</head>
<body>

<!----------------Header-------------------->
<header class="header-bg">
    <section class="header-wrapper">

        <!----------------logo-------------------->
        <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php bloginfo('template_url') ?>/images/logo.png" alt="logo" width="116" height="116"/>
            </a>
        </div>

        <!----------------Navigation-------------------->
        <nav class="header-nav">
            <?php    /**
                    * Displays a navigation menu
                    * @param array $args Arguments
                    */
                    $args = array(
                        'theme_location' => 'menu',
                        'container' => 'false',
                        'container_class' => '',
                        'menu_class' => 'header-nav-list',
                        'fallback_cb' => 'wp_page_menu',
                    );
                
                    wp_nav_menu( $args );?>
        </nav>
    </section>

    <!----------------Title-page-------------------->
    <section class="title-page">
        <div class="title-page-wrapper">
            <h2><?php bloginfo('wp_title();');?></h2>
        </div>
    </section>
</header>