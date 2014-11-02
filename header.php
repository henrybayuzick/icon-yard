<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Icon Yard</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Karla' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.min.css">

        <!--[if lt IE 9]>
            <script src="js/vendor/html5shiv.min.js"></script>
        <![endif]-->

    </head>
    <body>
    <?php error_reporting(-1);
ini_set('display_errors', 'On');?>
    <header role="banner" class="wrapper mt3 cf">
        <a class="float-left b0" href="<?php echo home_url(); ?>">Icon Yard</a>
        <nav class="float-right">
            <ul class="inline-list">
                <?php wp_nav_menu( array('container' => false, 'items_wrap' => '%3$s' )); ?>
                <li>
                    <a href="#" data-button="theme-toggle" class="theme-toggle">
                        <div data-element="night" class="night">
                            <svg width="15" height="15">
                                <image xlink:href="<?php echo get_template_directory_uri(); ?>/images/night.svg" src="<?php echo get_template_directory_uri(); ?>/images/night.png" width="15" height="15" />
                            </svg>
                        </div>
                        <div data-element="day" class="day">
                            <svg width="15" height="15">
                                <image xlink:href="<?php echo get_template_directory_uri(); ?>/images/day.svg" src="<?php echo get_template_directory_uri(); ?>/images/day.png" width="15" height="15" />
                            </svg>
                        </div>
                    </a>
                </li>
            </ul>
        </nav>
    </header>