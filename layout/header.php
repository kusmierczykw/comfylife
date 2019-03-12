<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 01.02.19
 * Time: 11:58
 */
?>
<!Doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="<?php echo get_template_directory_uri(); ?>/node_modules/owl.carousel/dist/assets/owl.carousel.min.css"
          type="text/css" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/node_modules/owl.carousel/dist/assets/owl.theme.green.min.css"
          type="text/css" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/node_modules/animate.css/animate.min.css" type="text/css"
          rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/node_modules/photoswipe/dist/photoswipe.css" type="text/css"
          rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/node_modules/photoswipe/dist/default-skin/default-skin.css"
          type="text/css" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css?v=<?php echo current_time('timestamp', 0); ?>"
          type="text/css" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/css/media-queries.css?v=<?php echo current_time('timestamp', 0); ?>"
          type="text/css" rel="stylesheet"/>

    <script src="<?php echo get_template_directory_uri(); ?>/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/node_modules/photoswipe/dist/photoswipe.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/node_modules/photoswipe/dist/photoswipe-ui-default.min.js"></script>
    <?php wp_head(); ?>
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="<?php echo get_page_uri(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Comfy Life Logo"/>
        </a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'depth' => 2,
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'navbarSupportedContent',
            'menu_class' => 'navbar-nav ml-auto',
            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
            'walker' => new WP_Bootstrap_Navwalker(),
        ));
        ?>

        <div class="navbar-social-media d-none d-lg-block">
            <a href="" target="_blank">
                <i class="fab fa-facebook"></i>
            </a>

            <a href="" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    </div>
</nav>