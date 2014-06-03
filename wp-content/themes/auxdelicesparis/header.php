<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
		<meta charset="UTF-8" />
		<title>Aux délices de Paris</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 

        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Fullscreen Slit Slider with CSS3 and jQuery" />
        <meta name="keywords" content="slit slider, plugin, css3, transitions, jquery, fullscreen, autoplay" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico">
        <!--Bootstrap-->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.2/css/font-awesome.min.css" rel="stylesheet">
        <!-- Less-->
        <link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_url'); ?>/css/style.less" media="all" />
        <script type='text/javascript' src="<?php bloginfo('template_url'); ?>/js/less-1.1.3.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/style.css" />
       
    </head>

    <body <?php body_class(); ?>>
        <header>
            <div class="container">
                <div class="navbar">
                    <div class="navbar-inner">

                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location'    => 'main_menu',
                                'menu_class'        => 'nav',
                                'container'         => false,
                            )
                        );
                        ?>

                    </div>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-6 welcome">
                    <?php the_field('mot_header') ?>
                </div>
                <div class="col-md-3"></div>
            </div>

        </header>