<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ganja on Bootstrap</title>
    <!-- Google fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Source+Sans+Pro:300,400,600,700,900&display=swap"
        rel="stylesheet">
    <!-- Bootstrap Setup -->
    <!-- My Style setup -->
    <!-- font awesome -->
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <nav class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="nav-logo">
                            <a href="<?php echo home_url("home");?>"><?php the_field('logo-1', 'option'); ?><span><?php the_field('logo-2', 'option'); ?></span></a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div id="topNavMenu" class="nav-topmenu">
                            <?php
                            wp_nav_menu( [
                                'theme_location'  => '',
                                'menu'            => '', 
                                'container'       => 'ul', 
                                'container_class' => 'nav-topmenu', 
                                'container_id'    => '',
                                'menu_class'      => '', 
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth'           => 0,
                                'walker'          => '',
                            ] );
                                ?>
                        </div>
                    </div>
                    <div class="col-lg-1 nopadding">
                        <div class="nav-shopbag">
                            <a id="myBtn" onclick="searchForm()" class="search-btn">
                                <i class="fas fa-search"></i>
                            </a>
                            <a class="shop-btn" href="#">
                                <i class="fas fa-shopping-bag"></i>
                            </a>
                            <p class="shop-count">69</p>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div id="myModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>Search something, my bro)</h3>
                        <span class="close">&times;</span>
                    </div>
                    <div class="modal-body">
                        <h3>Caută ceva: </h3>
                        <div id="idSearch" class="search-box">
                           <?php get_search_form(); ?>
                        </div>
                    </div>
                </div>
            </div>