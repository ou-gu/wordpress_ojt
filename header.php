<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <!-- Box icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <!-- Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <title>American Village</title>
</head>

<body>
    <!-- Header -->
    <header id="home" class="header">
        <!-- Navigation -->
        <nav class="nav">
            <div class="navigation container">

                <div class="hidden-menu">
                    <div class="top-nav">
                        <div class="logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
                        </div>
                        <div class="close">
                            <i class="bx bx-x"></i>
                        </div>
                    </div>

                    
                    <?php
                        wp_nav_menu( array( 
                            'theme_location' => 'main-menu',
                        ) ); 
                    ?>

                </div>
                <div class="hamburger">
                    <i class="bx bx-menu"></i>
                </div>

            </div>
        </nav>
    </header>
