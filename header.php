<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 */
$facebook_link = myprefix_get_theme_option( 'input_facebook_link' );
    $twitter_link = myprefix_get_theme_option( 'input_twitter_link' );
    $instagram_link = myprefix_get_theme_option( 'input_instagram_link' );
    $linkedin_link = myprefix_get_theme_option( 'input_linkedin_link' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
    <?php wp_head(); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Click 2 Media">
    
    <link href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="<?php bloginfo('template_directory'); ?>/assets/lity-master/lity.min.css" rel="stylesheet">
    <script src="<?php bloginfo('template_directory'); ?>/assets/lity-master/lity.min.js"></script>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"/>
</head>
<body>
    <header>
        <section class="navbar shadow-sm">
            <div class="container-fluid py-2">
                <div class="row">
                    <div class="col order-first d-inline-block left-panel">
                        <a class="toggle-menu" href="#">
                            <i></i>
                            <i class="menu-line-short"></i>
                            <i></i>
                        </a>
                        <div class="menu-drawer">
                            <?php
                                wp_nav_menu( array('menu' => 'Category Menu','container'=> '','items_wrap'=>'<ul>%3$s</ul>'));
                            ?>
                            <hr>                          

                            <div class="col-2 order-last align-middle text-start top-social-icons-menu">
                                <a href="<?php echo $facebook_link;?>" target="_blank" class="d-inline-block"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="<?php echo $twitter_link;?>" target="_blank" class="d-inline-block"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="<?php echo $instagram_link;?>" target="_blank" class="d-inline-block"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="<?php echo $linkedin_link;?>" target="_blank" class="d-inline-block"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        
                        <div class="col-4 d-inline-block logo-company">
                            <a href="<?php echo get_home_url(); ?>"><?php the_custom_logo(); ?></a>
                            <h1 class="header-for-seo">Open Source India - <?php 
                                if (is_front_page()) {
                                    echo "Powered By Click2Media";
                                } else {
                                    echo get_the_title();
                                }
                             ?></h1>
                        </div>
                    </div>
                    <div class="col order-last align-middle text-end d-inline-block right-panel">
                        <div class="col-12 justify-content-end align-items-center">
                            <div class="col-8 d-inline-block justify-content-end">
                            <?php
                                wp_nav_menu( array('menu' => 'Main Menu','container'=> '','items_wrap'=>'<ul class="nav justify-content-end">%3$s</ul>'));                                
                            ?>
                            </div>
                                <!-- <div class="d-inline-block justify-content-end search-icon">
                                    <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" for="search-input" id="search-label" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
                                        <input id="search-input" type="search" class="search-input" placeholder="Search …" value="" name="s" title="Search for:" />
                                        <input type="submit" class="search-submit" value="Search" />
                                    </form>
                                </div> -->

                                <div class="d-inline-block justify-content-end search-icon">

                                    <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">

                                    <span>Search</span>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="ms-3" for="search-input" id="search-label" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>

                                        <input id="search-input" type="search" class="search-input" placeholder="Search …" value="" name="s" title="Search for:" />

                                        <input type="submit" class="search-submit" value="Search" />

                                    </form>

                               </div>
                               <div class="d-inline-block order-last text-start top-social-icons ">

                                <div class="col d-inline-block">

                                    <a href="<?php echo $facebook_link;?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/ic_fb.png" alt="facebook"></a>

                                    <a href="<?php echo $twitter_link;?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/ic_twitter.png" alt="twitter"></a>

                                    <a href="<?php echo $instagram_link;?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/ic_instagram.png" alt="instagram"></a>

                                    <a href="<?php echo $linkedin_link;?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/ic_linkedin.png" alt="linkedin"></a>

                                </div>

                            </div>

                                
                                
                            <!-- <div class="btn btn-sm signin-css">
                                <a href="javascript:void(0);">Sign in</a>
                            </div>
                            <div class="d-inline-block subscribe">
                                <a class="btn btn-sm btn-outline-secondary subscribe-btn" href="javascript:void(0);">Subscribe</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
