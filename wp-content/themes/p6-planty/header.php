<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">
    <header id="header" role="banner">
        <div id="branding">
            <?php echo custom_header_logo(); ?>
        </div>

        <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'menu-container' ) ); ?>
        </nav>
    </header>
    <div id="container">
        <main id="content" role="main">
            <!-- O conteúdo da página vai aqui -->
        </main>
    </div>
    </div>
    <?php wp_footer(); ?>
</body>
</html>