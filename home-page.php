<?php
/* Template Name: Home Page */
$facebook_link = myprefix_get_theme_option( 'input_facebook_link' );
$twitter_link = myprefix_get_theme_option( 'input_twitter_link' );
$instagram_link = myprefix_get_theme_option( 'input_instagram_link' );
$linkedin_link = myprefix_get_theme_option( 'input_linkedin_link' );
get_header(); ?>
<main>
<!-- Top Trending -->
    <section class="py-2 border-bottom trending">
        <div class="container">
            <div class="row">
                <div class="col-2 order-first text-end">
                    <div class="col d-inline-block top-trending-css">
                        Top Trending :
                    </div>
                </div>
                <?php $daily_news=get_field('top_news_content');?>
                <div class="col-8 text-center">
                    <div class="col-12 d-inline-block">
                        <marquee  direction="left" scrollamount="08" onmouseover="this.stop();" onmouseout="this.start();"  class="col-md-12">
                            <p class="mb-0"><?php echo $daily_news;?></p>
                        </marquee>
                    </div>
                </div>
                <!-- <div class="col-2 order-last text-start top-social-icons ">
                    <div class="col d-inline-block">
                        <a href="<?php echo $facebook_link;?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/ic_fb.png" alt="facebook"></a>
                        <a href="<?php echo $twitter_link;?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/ic_twitter.png" alt="twitter"></a>
                        <a href="<?php echo $instagram_link;?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/ic_instagram.png" alt="instagram"></a>
                        <a href="<?php echo $linkedin_link;?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/ic_linkedin.png" alt="linkedin"></a>
                    </div>
                </div> -->
            </div>
        </div>        
    </section>

    <!--=========================================== CATEGORY START=========================================================-->
    <section class="py-lg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-10 my-3 d-flex fw-bold mx-auto year-month-width">
                    <div class="col-md-4 border archive-search d-inline-block themed-grid-col">
                        <div class="col-md-12 d-inline-block year-month">
                            <div class="col-md-12 d-inline-block themed-grid-col">
                                <div class="col-md-3 d-inline-block themed-grid-col">
                                    Category
                                </div>
                                <div class="col-md-7 d-inline-block ms-2 themed-grid-col">
                                    <select name="cat" onChange="window.document.location.href=this.options[this.selectedIndex].value;"> 
                                        <option value=""><?php echo esc_attr_e( 'Select Categories', 'textdomain' ); ?></option> 
                                            <?php 
                                            $args = array
                                            (
                                                'orderby' => 'ID',
                                                'order'=> 'DESC',
                                                'hide_empty' => 0,
                                            );
                                            $categories = get_categories($args); 
                                            foreach ( $categories as $category ) 
                                            {
                                                $term_link = get_category_link($category->term_id );
                                                $term_link = esc_url( $term_link ); 
                                                echo '<option value="'.$term_link.'">'.$category->cat_name.' ('.$category->category_count.')</option>';
                                            }
                                            ?>
                                    </select>
                                </div>
                            </div>
                            <!-- <form action="/Open_source/category-search-page/" method="post"> -->                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!--=========================================== CATEGORY END===========================================================-->
    <!-- Center Content -->
    <!--=========================================== MAGAZINE SLIDER START==================================================-->
    <!-- <section class="py-1">
        <div class="container">
            <div class="row">
                <div class="col-md-10 d-inline-block mx-auto magazine-w">
                    <div class="col-md-7 d-inline-block">
                        <div class="col-lg-12 col-md-12">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <?php if( have_rows('magazine_slider_images') ): ?>
                                    <?php $i = 0; ?>
                                    <?php while( have_rows('magazine_slider_images') ): the_row(); 
                                    $magazine_image = get_sub_field('magazine_image');
                                    $magazine_link = get_sub_field('magazine_link');
                                    ?>
                                        <div class="carousel-item <?php if($i === 0) { ?> active <?php } ?>">
                                            <a href="<?php echo $magazine_link;?>"><img src="<?php echo $magazine_image; ?>" class="d-block w-100" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - <?php echo date('Y');?>" alt=""></a>
                                        </div>
                                    <?php ++$i; ?>
                                    <?php endwhile; ?>                                
                                    <?php endif; ?>  
                                </div>  

                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 d-inline-block float-end">
                    <?php 
                    global $post;
                    $latest_blog = new WP_Query(array('posts_per_page' =>2,'paged' => get_query_var('paged') ? get_query_var('paged') : 1 ));
                    $i=1;
                    while ($latest_blog->have_posts()) : $latest_blog->the_post();
                    $latest_blog_img= wp_get_attachment_url( get_post_thumbnail_id($post->ID) );  
                    ?>

                        <div class="col-md-12 banner-right-panel">
                            <div class="col-md-12">
                                <div class="new-post position-absolute px-3 py-1">New</div>
                                <div class="col-lg-12 col-md-12">
                                    <a href="<?php echo get_permalink(); ?>">
                                        <img src="<?php echo $latest_blog_img;?>" class="img-fluid interview-img" data-toggle="tooltip" data-placement="top" title="<?php the_title();?>" alt="<?php the_title();?>"></a>
                                </div>
                                <div class="col-md-11 mx-auto py-3">
                                    <p class="h5 post-para">
                                        <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                                    </p>
                                    <p class="h5 interview text-muted"><?php $expert=get_the_excerpt();  echo $expert;?></p>

                                    <a type="button" class="btn btn-labeled btn-default" href="<?php echo get_permalink(); ?>"> 
                                        <span class="btn-label">Read More<i class="fa fa-newspaper-o"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php  $i++; endwhile;  wp_reset_query();?>

                    </div> 
                </div>
            </div>
        </div>
    </section> -->
    <!--=========================================== MAGAZINE SLIDER END====================================================-->
    
    <!--=========================================== MAGAZINE SLIDER START==================================================-->
    <section class="py-1">
        <div class="container">
            <div class="row">
                <div class="col-md-10 d-inline-block mx-auto magazine-w">
                    <div class="col-md-7 d-inline-block">
                        <div class="col-lg-12 col-md-12">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <?php 
                                    global $post;
                                    $i = 0; 
                                    $magazine_post = new WP_Query(array('post_type'=>'magazine','order'=>'DESC','posts_per_page' =>3,'paged' => get_query_var('paged') ? get_query_var('paged') : 1 ));                                   
                                    if( $magazine_post->have_posts() ) :
                                    while ($magazine_post->have_posts()) : $magazine_post->the_post();
                                    $magazine_post_img= wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
                                    ?> 
                                        <div class="carousel-item <?php if($i === 0) { ?> active <?php } ?>">
                                            <a href="<?php echo get_permalink(); ?>">
                                                <img src="<?php echo $magazine_post_img;?>" class="d-block w-100" data-toggle="tooltip" data-placement="top" title="<?php the_title();?>" alt="<?php the_title();?>"> 
                                            </a>                                       
                                        </div>
                                        <?php ++$i; ?>
                                    <?php endwhile;
                                    else:
                                    ?>                    
                                    <p class="mesage-service">Sorry, no magazine found here...</p>
                                    <?php endif;?>
                                </div>  

                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 d-inline-block float-end">
                    <?php 
                    global $post;                   
                    $latest_blog = new WP_Query(array('posts_per_page' =>2,'paged' => get_query_var('paged') ? get_query_var('paged') : 1 ));
                    $i=1;
                    while ($latest_blog->have_posts()) : $latest_blog->the_post();
                    $latest_blog_img= wp_get_attachment_url( get_post_thumbnail_id($post->ID) );  
                    ?>

                        <div class="col-md-12 banner-right-panel">
                            <div class="col-md-12">
                                <div class="new-post position-absolute px-3 py-1"> New </div>
                                <div class="col-lg-12 col-md-12">
                                    <a href="<?php echo get_permalink(); ?>">
                                        <img src="<?php echo $latest_blog_img;?>" class="img-fluid interview-img" data-toggle="tooltip" data-placement="top" title="<?php the_title();?>" alt="<?php the_title();?>"></a>
                                </div>
                                <div class="col-md-11 mx-auto py-3">
                                    <p class="h5 post-para">
                                        <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?>&nbsp;<?php the_title(); ?></a>
                                    </p>
                                    <p class="h5 interview text-muted"><?php $expert=get_the_excerpt();  echo $expert;?></p>

                                    <a type="button" class="btn btn-labeled btn-default" href="<?php echo get_permalink(); ?>"> 
                                        <span class="btn-label">Read More<i class="fa fa-newspaper-o"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php  $i++; endwhile;  wp_reset_query();?>

                    </div> 
                </div>
            </div>
        </div>
    </section>
    <!--=========================================== MAGAZINE SLIDER END====================================================-->  
    
    <!--=========================================== LEADER THOUGHT START===================================================-->
    <section class="p-3 my-3 bg-light">
        <div class="container">
            <div class="row">
                <h4 class="mt-3 mb-0 text-center text-uppercase lederthought"><?php if( get_field('leader_throught_heading') ): ?>
                    <?php the_field('leader_throught_heading'); ?>
                    <?php endif; ?></h4>
                <span class="text-center lederthought-sub"><?php if( get_field('leader_thought_content') ): ?>
                    <?php the_field('leader_thought_content'); ?>
                    <?php endif; ?></span>
            </div>

            <div class="row">
                <div class="your-class-leader">
                    <?php 
                    $authors = get_users('role=author&orderby=display_name&order=DESC');
                    foreach ($authors as $author)
                    {
                        if (count_user_posts($author->ID) > 0)
                        {  
                        
                        $get_author_gravatar = get_avatar_url($author->ID, array('size' => 450));
                    ?> 
                        <div class="col-md-2 leaders-colom text-center">
                            <div class="col-md-12 rounded-circle leaders-image">
                                <a href="<?php echo get_author_posts_url($author->ID); ?>"><img src="<?php echo $get_author_gravatar;?>" class="rounded-circle border p-2" data-toggle="tooltip" data-placement="top" title="<?php echo ucfirst($author->display_name);?>" alt="<?php echo ucfirst($author->display_name);?>"></a>
                            </div>
                            <p class="leaders-colom-name"><?php echo ucfirst($author->display_name);?></p>
                            <?php
                            global $wpdb;                                    
                            $result_bio = $wpdb->get_results("SELECT `meta_value` FROM `op_usermeta` WHERE `user_id`='".$author->ID."' AND `meta_key`='description'");                        
                            foreach ($result_bio as $biogrophy) {?>
                                <h6 class="leaders-colom-designation"><a href="javascript:void(0);"><?php echo $biogrophy->meta_value; ?>...</a></h6>
                            <?php } ?>

                            <p class="post-meta-css"><?php  echo the_time('F j,Y' )?></p>
                            <span><a href="javascript:void(0);"><i class="fa fa-newspaper-o"></i> <?php echo count_user_posts($author->ID);?></a></span>
                        </div>
                    <?php } } ?>  
                
                    <div class="col-md-2 leaders-colom text-center">
                        <div class="col-md-12 rounded-circle leaders-image">
                            <a href="javascript:void(0);"><img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/032-Mask.png" class="rounded-circle border p-2" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022" alt="Sreejani Bhattacharya"></a>
                        </div>
                        <p class="leaders-colom-name">Sreejani Bhattacharya</p>
                        <h6 class="leaders-colom-designation"><a href="javascript:void(0);">Aiding Big Data Cluster Computing...</a></h6>
                        <p class="post-meta-css">July 30, 2020</p>
                        <span><a href="javascript:void(0);"><i class="fa fa-newspaper-o"></i> 53</a></span>
                    </div>
                    <div class="col-md-2 leaders-colom text-center">
                        <div class="col-md-12 rounded-circle leaders-image">
                            <a href="javascript:void(0);"><img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/03-Mask-2.png" class="rounded-circle border p-2" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022" alt="Sreejani Bhattacharya"></a>
                        </div>
                        <p class="leaders-colom-name">Sreejani Bhattacharya</p>
                        <h6 class="leaders-colom-designation"><a href="javascript:void(0);">Aiding Big Data Cluster Computing...</a></h6>
                        <p class="post-meta-css">July 30, 2020</p>
                        <span><a href="javascript:void(0);"><i class="fa fa-newspaper-o"></i> 53</a></span>
                    </div>
                    <div class="col-md-2 leaders-colom text-center">
                        <div class="col-md-12 rounded-circle leaders-image">
                            <a href="javascript:void(0);"><img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/03-Mask-3.png" class="rounded-circle border p-2" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022" alt="Sreejani Bhattacharya"></a>
                        </div>
                        <p class="leaders-colom-name">Sreejani Bhattacharya</p>
                        <h6 class="leaders-colom-designation"><a href="javascript:void(0);">Aiding Big Data Cluster Computing...</a></h6>
                        <p class="post-meta-css">July 30, 2020</p>
                        <span><a href="javascript:void(0);"><i class="fa fa-newspaper-o"></i> 53</a></span>
                    </div>

                    <div class="col-md-2 leaders-colom text-center">
                        <div class="col-md-12 rounded-circle leaders-image">
                            <a href="javascript:void(0);"><img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/03-Mask-4.png" class="rounded-circle border p-2" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022" alt="Sreejani Bhattacharya"></a>
                        </div>
                        <p class="leaders-colom-name">Sreejani Bhattacharya</p>
                        <h6 class="leaders-colom-designation"><a href="javascript:void(0);">Aiding Big Data Cluster Computing...</a></h6>
                        <p class="post-meta-css">July 30, 2020</p>
                        <span><a href="javascript:void(0);"><i class="fa fa-newspaper-o"></i> 53</a></span>
                    </div>
                     <div class="col-md-2 leaders-colom text-center last-leaders">
                        <div class="col-md-12 rounded-circle leaders-image">
                            <a href="javascript:void(0);"><img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/03-Mask-5.png" class="rounded-circle border p-2" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022" alt="Sreejani Bhattacharya"></a>
                        </div>
                        <p class="leaders-colom-name">Sreejani Bhattacharya</p>
                        <h6 class="leaders-colom-designation"><a href="javascript:void(0);">Aiding Big Data Cluster Computing...</a></h6>
                        <p class="post-meta-css">July 30, 2020</p>
                        <span><a href="javascript:void(0);"><i class="fa fa-newspaper-o"></i> 53</a></span>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
    <!--=========================================== LEADER THOUGHT END=====================================================-->
    

    <!--=========================================== NEW TECHNOLOGY ANNOUNCEMENTS START=====================================-->
    <section class="mb-0">
        <div class="container">
            <div class="row">
                <h4 class="mt-3 mb-0 text-center text-uppercase lederthought">New Technology Announcements</h4>
                <span class="text-center lederthought-sub">“With the Internet and open source, the world is your playground”</span>
            </div>
            <div class="row py-5 g-2">
                <div class="col-md-10 d-inline-block mx-auto lederthought-w">
                    <div class="col-md-8 d-inline-block">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">

                        <?php
                        global $post;
                        $tech_announcement = new WP_Query(array('cat'=>7,'order'=>'DESC','posts_per_page' =>1,'paged' => get_query_var('paged') ? get_query_var('paged') : 1 ));
                        $i=1;
                        while ($tech_announcement->have_posts()) : $tech_announcement->the_post();
                        $tech_announcement_img= wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>


                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="col-md-10 card announce">
                                        <div class="new-post position-absolute px-3 py-1">New</div>
                                        <div class="col-lg-12 col-md-12">
                                            <a href="#">
                                                <img src="<?php echo $tech_announcement_img; ?>" data-toggle="tooltip" data-placement="top" title="<?php the_title();?>" class="img-fluid announce-img-css"></a>
                                        </div>
                                        <div class="card-img-overlay">
                                            <!-- <h5 class="card-title">Card title</h5> -->
                                            <p class="card-text techno-text-title"><a href="#"><?php the_title();?></a></p>
                                            <p class="card-text"><?php echo ucfirst(get_author_name()); ?>  -  <?php  echo the_time('F jS, Y' );?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-10 my-3 announce-text-content">
                                        <p><?php $expert=get_the_excerpt();  echo $expert;?></p>
                                        <a type="button" class="btn btn-labeled btn-default" href="<?php echo get_permalink(); ?>">
                                        <span class="btn-label d-inline-block mt-3" data-toggle="tooltip" data-placement="top" title="#">Read More<i class="fa fa-newspaper-o"></i></span></a>
                                    </div>
                                </div>                                
                            </div>

                        <?php  $i++; endwhile;  wp_reset_query();?>

                        </div>



                        <div class="col-md-10 my-3">

                            <?php
                            global $post;
                            $tech_announcement = new WP_Query(array('cat'=>7,'order'=>'DESC','posts_per_page' =>7,'offset' => 1,'paged' => get_query_var('paged') ? get_query_var('paged') : 1 ));
                            $i=1;
                            while ($tech_announcement->have_posts()) : $tech_announcement->the_post();
                            $tech_announcement_img= wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

                                <div class="card border-top custome-card pt-4">
                                    <div class="row g-0">
                                        <div class="col-md-2">
                                            <a href="<?php echo get_permalink(); ?>">
                                                <img src="<?php echo $tech_announcement_img; ?>" data-toggle="tooltip" data-placement="top" title="<?php the_title();?>" class="img-fluid announce-small-img-css" alt="Discover Cloud Data Warehouse with Snowflake">
                                            </a>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="card-body">
                                                <h6 class="card-title"><a href="<?php echo get_permalink(); ?>">
                                                    <?php the_title();?></a>
                                                </h5>
                                                <p class="card-text"><?php $expert=get_the_excerpt();  echo $expert;?></p>
                                                <p class="card-text"><small class="text-muted"><strong><?php echo ucfirst(get_author_name()); ?>  -</strong>  <?php  echo the_time('F jS, Y' );?></small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                 

                            <?php  $i++; endwhile;  wp_reset_query();?>

                        </div>
                    </div>
                    <div class="col-md-4 d-inline-block float-end">
                        <div class="col-md-12 mb-5">
                            <div class="col-lg-12 col-md-12 google-adds">
                                <a href="https://www.click2cloud.com/innovation-factory.php" target="_blank">
                                <img src="https://indiaopensource.com/OpenSource_deve/wp-content/uploads/2022/06/Click2Cloud-Technology-Services-India-Private-Limited-Innovation-Factory.png" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022" class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-md-12 pt-2 mt-5">
                            <h5 class="techno-css mb-4">Technology Update (Done)</h5>
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">

                                    <?php
                                    global $post;
                                    $tech_update = new WP_Query(array('cat'=>7,8,'order'=>'DESC','posts_per_page' =>3,'paged' => get_query_var('paged') ? get_query_var('paged') : 1 ));
                                    $i=1;
                                    while ($tech_update->have_posts()) : $tech_update->the_post();
                                    $tech_update_img= wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>


                                        <div class="card border-bottom custome-card right-techno-css py-3">
                                            <div class="row g-0">
                                                <div class="col-md-3">
                                                    <a href="<?php echo get_permalink(); ?>">
                                                        <img src="<?php echo $tech_update_img; ?>" data-toggle="tooltip" data-placement="top" title="<?php the_title();?>" alt="<?php the_title();?>" class="img-fluid" alt="..."></a>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <span><strong><a href="<?php echo get_permalink(); ?>"><?php $tect_title=the_title(); echo substr("$tect_title",3); ?></a></strong></span>
                                                        <p class="card-text"><?php $expert=get_the_excerpt();  echo $expert;?> ...</p>
                                                        <p class="card-text"><small class="text-muted"><strong><?php echo ucfirst(get_author_name()); ?> -</strong>  <?php echo the_time('F jS, Y' );?></small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php $i++; endwhile; wp_reset_query();?>

                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
    
    <!--=========================================== NEW TECHNOLOGY ANNOUNCEMENTS END=======================================-->
    <!--=========================================== NEW ADV================================================================-->    
    <section class="mb-3">
        <div class="container">
            <div class="row">
                <div class="row g-2">
                    <div class="col-md-10 d-inline-block mx-auto checkout-soft pt-5 pb-4" style="background: url(https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/Group-811.png) no-repeat center; background-size: cover;background-position: left;">
                        <div class="row mb-3 align-middle">
                            <div class="col-md-4 themed-grid-col">&nbsp;</div>
                            <div class="col-md-4 check-out-text themed-grid-col ps-5 pe-5 ms-5">Hi, Developers the most Usefull open source software for windows</div>
                            <div class="col-md-2 themed-grid-col ms-5 align-middle">
                                <a href="https://www.thefreemedia.in"><button type="button" class="btn btn-danger btn-lg float-end" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022">Check Out</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================================== ADV END================================================================-->
    <!--=========================================== Newletter START========================================================-->                      
    
    <section class="mb-3 bg-light newsletter-w">
        <div class="container">
            <div class="row py-5 g-2">
                <div class="col-md-10 d-inline-block mx-auto newsletter">
                    <div class="card text-center">
                        <div class="card-header">
                            <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                        </div>
                        <div class="card-body mx-auto col-md-10">
                        <?php if( get_field('newsletter_section_content') ):?>
                            <p class="card-text"><?php the_field('newsletter_section_content'); ?></p>
                        <?php endif; ?>
                            <div class="newsletter-signup-btn">
                                <a href="javascript:void(0);" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022">
                                <?php if( get_field('newsletter_section_button') ):?>
                                    <?php the_field('newsletter_section_button'); ?>
                                <?php endif; ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================================== Newletter START=========================================================-->
    <!--=========================================== POPULAR ANNOUNCEMENTS START=============================================-->   
    
    <section class="mb-0">
        <div class="container">
            <div class="row">
                <h4 class="mt-3 mb-0 text-center text-uppercase announcements">Popular Announcements</h4>
                <span class="text-center announcements-sub">“With the Internet and open source, the world is your playground”</span>
            </div>
            <div class="row py-5 g-2">
                <div class="col-md-10 d-inline-block mx-auto announcements-w">
                    <div class="col-md-8 d-inline-block">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php
                                global $post;
                                $ceo_thought = new WP_Query(array('cat'=>24,'order'=>'DESC','posts_per_page' =>1,'paged' => get_query_var('paged') ? get_query_var('paged') : 1 ));
                                $i=1;
                                while ($ceo_thought->have_posts()) : $ceo_thought->the_post();
                                $ceo_thought_img= wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

                                    <div class="carousel-item active">
                                        <div class="col-md-10 card announces">
                                            <div class="new-post position-absolute px-3 py-1">New</div>
                                            <div class="col-lg-12 col-md-8">
                                                <a href="<?php echo get_permalink(); ?>">
                                                    <img src="<?php echo $ceo_thought_img; ?>" data-toggle="tooltip" data-placement="top" title="<?php the_title();?>" alt="<?php the_title();?>" class="img-fluid announce-img-css">
                                                </a>
                                            </div>

                                            <div class="col-md-12 my-2">                                                
                                                <p class="card-text"><a href="https://indiaopensource.com/Open_source/i-dont-care-for-the-economy-elon-musk/"><?php the_title();?></a></p>


                                                <span><?php $expert=get_the_excerpt();  echo substr($expert,0,190);?> ...</span>
                                                <p class="card-text"><?php echo ucfirst(get_author_name()); ?>  -  <span><?php  echo the_time('F jS, Y' );?><span></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php $i++; endwhile; wp_reset_query();?>
                            </div>
                        </div>

                    
                        <div class="col-mid-10 mt-3">
                           <!--===============================New Beginners START================================================-->
                            <div class="col-md-5 d-inline-block">
                                <div class="py-2 h6 fw-bold"><?php echo get_cat_name(22);?></div>
                                <?php 
                                global $post;
                                $new_beginners = new WP_Query(array('cat'=>22,'order'=>'DESC','posts_per_page' =>1,'paged' => get_query_var('paged') ? get_query_var('paged') : 1 ));
                                $i=1;
                                while ($new_beginners->have_posts()) : $new_beginners->the_post();
                                $new_beginners_img= wp_get_attachment_url( get_post_thumbnail_id($post->ID) );  
                                ?> 

                                    <div class="col-md-10 card announce">
                                        <div class="col-lg-12 col-md-8">
                                            <a href="<?php echo get_permalink(); ?>"><img src="<?php echo $new_beginners_img; ?>" data-toggle="tooltip" data-placement="top" title="<?php the_title();?>" alt="<?php the_title();?>" class="img-fluid new-beginners-img"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-10 my-4">
                                        <span><strong><a href="#"><?php the_title();?></a></strong></span>
                                        <p><?php $expert=get_the_excerpt();  echo substr($expert,0,75);?>...</p>
                                        <a type="button" class="btn btn-labeled btn-default" href="<?php echo get_permalink(); ?>"> 
                                           <span class="btn-label">Read More <i class="fa fa-newspaper-o"></i></span>
                                        </a>
                                    </div>
                                <?php  $i++; endwhile;  wp_reset_query();?>
                            </div>

                            <!--===============================New Beginners START================================================-->
                            <!--===============================Experts Beginners START============================================-->
                            <div class="col-md-5 d-inline-block">
                                <div class="py-2 h6 fw-bold"><?php echo get_cat_name(23);?></div>
                                <?php 
                                global $post;
                                $new_beginners = new WP_Query(array('cat'=>23,'order'=>'DESC','posts_per_page' =>1,'paged' => get_query_var('paged') ? get_query_var('paged') : 1 ));
                                $i=1;
                                while ($new_beginners->have_posts()) : $new_beginners->the_post();
                                $new_beginners_img= wp_get_attachment_url( get_post_thumbnail_id($post->ID) );  
                                ?> 

                                    <div class="col-md-10 card announce">
                                        <div class="col-lg-12 col-md-8">
                                            <a href="<?php echo get_permalink(); ?>"><img src="<?php echo $new_beginners_img; ?>" data-toggle="tooltip" data-placement="top" title="<?php the_title();?>" alt="<?php the_title();?>" class="img-fluid new-beginners-img"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-10 my-4">
                                        <span><strong><a href="#"><?php the_title();?></a></strong></span>
                                        <p><?php $expert=get_the_excerpt();  echo substr($expert,0,75);?>...</p>

                                        <a type="button" class="btn btn-labeled btn-default" href="<?php echo get_permalink(); ?>"> 
                                           <span class="btn-label">Read More <i class="fa fa-newspaper-o"></i></span>
                                        </a>
                                        
                                    </div>
                                <?php  $i++; endwhile;  wp_reset_query();?>
                            </div>
                            <!--===============================Experts Beginners END================================================-->

                        </div>


                        <!-------------------------------------App Developer POST--------------------------------------------------->
                        <?php
                        global $post;
                        $app_deve = new WP_Query(array('cat'=>14,'order'=>'DESC','posts_per_page' =>2,'paged' => get_query_var('paged') ? get_query_var('paged') : 1 ));
                        $i=1;
                        while ($app_deve->have_posts()) : $app_deve->the_post();
                        $app_deve_img= wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

                            <div class="col-md-10">
                                <div class="card border-top custome-card pt-4">
                                    <div class="row g-0">
                                        <div class="col-md-2">
                                        <img src="<?php echo $app_deve_img; ?>" data-toggle="tooltip" data-placement="top" title="<?php the_title();?>" class="img-fluid" alt="...">
                                        </div>
                                        <div class="col-md-10">
                                            <div class="card-body">
                                                <a href="<?php echo get_permalink(); ?>"><h6 class="card-title"><?php the_title();?></h5></a>
                                                <p class="card-text"><?php $expert=get_the_excerpt();  echo $expert;?> ... </p>
                                                <p class="card-text"><small class="text-muted"><strong><?php echo ucfirst(get_author_name()); ?>  -</strong>  <?php  echo the_time('F jS, Y' );?></small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php $i++; endwhile; wp_reset_query();?>

                       <!-------------------------------------App Developer POST--------------------------------------------------->

                    </div>
                    <div class="col-md-4 d-inline-block float-end">
                        <div class="col-md-12 mb-5">
                            <div class="col-lg-12 col-md-8 google-adds">
                            <a href="https://www.click2cloud.com/innovation-factory.php" target="_blank">
                                <img src="https://indiaopensource.com/OpenSource_deve/wp-content/uploads/2022/06/Click2Cloud-Technology-Services-India-Private-Limited-Innovation-Factory.png" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022" class="img-fluid">
                                </a>
                            </div>
                        </div>


                        <div class="col-md-12 pt-2 mt-5">
                            <h5 class="techno-css mb-4">Developer Corner (Done)</h5>
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <?php
                                        global $post;
                                        $Developers = new WP_Query(array('cat'=>8,'order'=>'DESC','posts_per_page' =>4,'paged' => get_query_var('paged') ? get_query_var('paged') : 1 ));
                                        $i=1;
                                        while ($Developers->have_posts()) : $Developers->the_post();
                                        $Developers_img= wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

                                            <div class="card border-bottom custome-card right-techno-css py-3">
                                                <div class="row g-0">
                                                    <div class="col-md-3">
                                                        <a href="<?php echo get_permalink(); ?>"><img src="<?php echo $Developers_img; ?>" data-toggle="tooltip" data-placement="top" title="<?php the_title(); ?>" class="img-fluid" alt="<?php the_title(); ?>"></a>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <p class="card-text"><span class="text-muted"><strong><?php echo ucfirst(get_author_name()); ?>  -</strong>  <?php  echo the_time('F jS, Y' );?></span></p>
                                                            <p class="card-text"><?php the_title(); ?> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php $i++; endwhile; wp_reset_query();?>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
   <!--=========================================== POPULAR ANNOUNCEMENTS END================================================-->

    <!--=========================================== ADV START===============================================================-->
    <section class="mb-2">
        <div class="container">
            <div class="row">
                <div class="row g-2">
                    <div class="col-md-10 d-inline-block mx-auto checkout-soft pt-5 pb-4" style="background: url(https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/Group-811.png) no-repeat center; background-size: cover;background-position: left;">
                        <div class="row mb-3 align-middle">
                            <div class="col-md-4 themed-grid-col">&nbsp;</div>
                            <div class="col-md-4 check-out-text themed-grid-col ps-5 pe-5 ms-5">Hi, Developers the most Usefull open source software for windows</div>
                            <div class="col-md-2 themed-grid-col ms-5 align-middle">
                                <button type="button" class="btn btn-danger btn-lg float-end" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022">Check Out</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================================== ADV END=================================================================-->

    <!--=========================================== VIDEO START=============================================================-->
    <section class="mb-3 mt-5 pt-3 bg-light">
        <div class="container">
            <div class="row">
                <h4 class="mt-3 mb-0 text-center text-uppercase announcements">Popular Technology Video </h4>
            </div>
            <div class="row">
                <div class="your-class col-md-10 d-inline-block mx-auto checkout-soft pt-5 pb-4">
                <?php
                global $post;
                $OS_video = new WP_Query(array('cat'=>21,'order'=>'DESC','posts_per_page' =>9,'paged' => get_query_var('paged') ? get_query_var('paged') : 1 ));
                $i=1;
                while ($OS_video->have_posts()) : $OS_video->the_post();
                $OS_video_img= wp_get_attachment_url( get_post_thumbnail_id($post->ID) );  

                ?>
                    <div class="col-md-10 my-3 mx-auto popular-video">
                        <div class="col-md-9 d-inline-block videos-css">  

                            <a class="video-play-icon" href="<?php if( get_field('video_link') ): the_field('video_link'); endif; ?>" data-lity data-toggle="tooltip" data-placement="top" title="<?php the_title();?>"><i class="fa fa-play" aria-hidden="true"></i></a>
                            
                            <div class="col-md-11 card videos">
                                <div class="col-lg-12 col-md-8">
                                    <img src="<?php echo $OS_video_img;?>" class="img-fluid" data-toggle="tooltip" data-placement="top" title="<?php the_title();?>" alt="<?php the_title();?>">
                                </div>
                            </div>

                            <div class="col-md-11 my-2 mx-auto">
                                <p class="card-text"><?php the_title();?></p>
                                <p><?php $expert=get_the_excerpt();  echo substr($expert,0,80);?>..</p>
                                
                                <a type="button" class="btn btn-labeled btn-default" href="<?php echo get_permalink(); ?>"> 
                                    <span class="btn-label">Read More <i class="fa fa-newspaper-o"></i></span>
                                </a>
                            </div>

                        </div>
                    </div>
                <?php  $i++; endwhile; wp_reset_query();?>                                        
                </div>
            </div>
        </div>
    </section>
    <!--=========================================== VIDEO END================================================================--> 
    
</main>


<!-- <select name="cat" onChange="window.document.location.href=this.options[this.selectedIndex].value;"> 
    <option value=""><?php echo esc_attr_e( 'Select Categories', 'textdomain' ); ?></option> 
        <?php 
        $args = array
        (
            'orderby' => 'ID',
            'order'=> 'DESC',
            'hide_empty' => 0,
        );

        $categories = get_categories($args); 
        foreach ( $categories as $category ) {
            $term_link = get_category_link($category->term_id );
            $term_link = esc_url( $term_link );           
            echo '<option value="'.$term_link.'">'.$category->cat_name.'</option>';
        }
        ?>
</select> -->
<?php get_footer(); ?>