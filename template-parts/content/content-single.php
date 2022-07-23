<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<main>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
        <section class="py-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 mx-auto magazine-w">
                        <div class="col-md-7 d-inline-block my-3">
                            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-12">                                
                                <h4 class="py-1"><strong><?php the_title(); ?></strong></h4>
                                
                                <a href="<?php echo get_the_author_link(); ?>">
                                    <div class="avatar d-inline-block"><?php echo get_avatar(get_the_author_meta('ID'), 32); ?></div>
                                </a>
                                <a href="<?php echo get_the_author_link(); ?>">
                                    <div class="author d-inline-block"> By <strong><?php the_author(); ?></strong></div>
                                </a>
                                <div class="date d-inline-block">&nbsp;&nbsp;<?php the_date(); ?></div>
                                <div class="post-views d-inline-block float-end"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;
                                <?php
                                setPostViews(get_the_ID());
                                echo getPostViews(get_the_ID());
                                ?>&nbsp;&nbsp;&nbsp;<i class="fa fa-comments" aria-hidden="true"></i>&nbsp;<?php echo get_comments_number($post->ID); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 d-inline-block mx-auto magazine-w">
                        <div class="col-md-7 d-inline-block">
                            <div class="col-lg-12 col-md-8">

                            <?php if (in_category( 'technology-video' )) : ?>
                                <iframe width="100%" height="400px" src="<?php  if( get_field('video_link') ):  the_field('video_link'); endif; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <?php  else : ?>
                                <?php the_post_thumbnail('full'); ?>
                            <?php endif; ?>
                            </div>
                            <div class="col-md-12">
                                <p class="my-4">
                                    <?php if (get_field('content_below_featured_image')) : ?>
                                <h2 class="featured-content"><?php the_field('content_below_featured_image'); ?></h2>
                            <?php endif; ?>
                            </p>
                            </div>
                        </div>
                        <div class="col-md-4 d-inline-block float-end">
                            <div class="col-md-12">
                                <div class="col-lg-12 col-md-8">
                                    <img src="https://indiaopensource.com/OpenSource_deve/wp-content/uploads/2022/06/Click2Cloud-Technology-Services-India-Private-Limited-Innovation-Factory.png" class="img-fluid" style="height: 400px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-0">
            <div class="container">
                <div class="row py-1 g-2">
                    <div class="col-md-12 d-inline-block mx-auto lederthought-w pb-3">
                        <?php the_content(); ?>
                    </div>
                    <div class="content-cat-tags col-md-12 d-inline-block mx-auto lederthought-w pb-3">
                    <div class="post-category d-inline-block">
                        <strong>Category: </strong>
                        <?php 
                        foreach ((get_the_category()) as $category) { 
                        $category_link = get_category_link($category->cat_ID);
                        ?>
                            <a href="<?php echo $category_link;?>" title="<?php echo $category->cat_name; ?>"><span class='btn btn-secondary btn-sm ms-1'><?php echo $category->cat_name; ?></span> </a>
                        <?php } ?>    
                    </div>

                        <div class="tags d-inline-block float-end">
                            <strong>Tags: </strong>
                            <?php
                            if (has_tag()) {
                                foreach (get_the_tags($post->ID) as $tag) {
                            ?>
                                    <a href="<?php echo get_tag_link($tag->term_id); ?>" class="btn btn-secondary btn-sm" rel="tag"><?php echo $tag->name; ?></a>
                                <?php }
                            } else { ?>
                                <span style="color:red;">No tag..</span>
                            <?php } ?>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        
        <section class="mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 d-inline-block mx-auto magazine-w">
                        <?php
                        // Previous/next post navigation.
                        $twentytwentyone_next = is_rtl() ? twenty_twenty_one_get_icon_svg('ui', 'arrow_left') : twenty_twenty_one_get_icon_svg('ui', 'arrow_right');
                        $twentytwentyone_prev = is_rtl() ? twenty_twenty_one_get_icon_svg('ui', 'arrow_right') : twenty_twenty_one_get_icon_svg('ui', 'arrow_left');

                        $twentytwentyone_next_label     = esc_html__('Next post', 'twentytwentyone');
                        $twentytwentyone_previous_label = esc_html__('Previous post', 'twentytwentyone');

                        the_post_navigation(
                            array(
                                'next_text' => '<p class="meta-nav btn btn-secondary btn-sm d-inline-block">' . $twentytwentyone_next_label . $twentytwentyone_next . '</p>                                
                                <p class="post-title">%title</p>',
                                'prev_text' => '<p class="meta-nav btn btn-secondary btn-sm d-inline-block">' . $twentytwentyone_prev . $twentytwentyone_previous_label . '</p><p class="post-title">%title</p>',
                            )
                        );
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <!--============================================Comments Temapltes=======================================================-->
        <section class="mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 d-inline-block mx-auto magazine-w">
                        <?php if ( comments_open() || get_comments_number() ) :
                        comments_template();
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!--============================================Comments Temapltes=======================================================-->
        <!--============================================Releted Post start=======================================================-->       
        <section class="bg-light py-3">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10 d-inline-block mx-auto lederthought-w">
                        <h4 class="mb-4 text-uppercase lederthought">Related Post</h4>
                    </div>
                </div> 
                <div class="row g-2">
                    <div class="col-md-10 d-inline-block mx-auto lederthought-w">
                        <div class="col-md-12 d-inline-block announce-single-page">
                            <?php
                            $args = array(
                            'category__in' => wp_get_post_categories( get_queried_object_id() ),
                            'posts_per_page' => 3,
                            'orderby'       => 'rand',
                            'post__not_in' => array( get_queried_object_id() )
                            );
                            $related_query = new WP_Query( $args );
                            if ( $related_query->have_posts() ) : ?>
                                
                                <?php while ( $related_query->have_posts() ) : $related_query->the_post();
                                    $related_query_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?> 

                                    <div class="col-md-6 d-inline-block">
                                        <div class="col-md-12 card announce">
                                            <!-- <div class="new-post position-absolute px-3 py-1">New</div> -->
                                            <?php twenty_twenty_one_post_thumbnail(); ?>
                                        </div>
                                        <div class="col-md-12 my-4">
                                            <div class="">                                                
                                                <p class="card-text"><?php the_title();?></p>
                                                <p class="card-text"><small><strong><?php echo ucfirst(get_author_name()); ?></strong> - <?php echo the_time('F jS, Y'); ?></small></p>
                                            </div>
                                            <a href="<?php echo get_permalink(); ?>"><button type="button" class="btn btn-labeled btn-default">
                                                    <span class="btn-label d-inline-block mt-3">Read More<i class="fa fa-newspaper-o"></i></span></button>
                                            </a>
                                        </div>
                                    </div> 
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>       

                        </div>                        
                    </div>
                </div>                
            </div>
        </section>         
        <!--============================================Releted Post ENDs========================================================-->

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

        <div class="entry-content">
            
        </div><!-- .entry-content -->

        <footer class="entry-footer default-max-width">
            <?php //twenty_twenty_one_entry_meta_footer(); 
            ?>
        </footer><!-- .entry-footer -->

        <?php if (!is_singular('attachment')) : ?>
            <?php //get_template_part( 'template-parts/post/author-bio' ); 
            ?>
        <?php endif; ?>

    </article><!-- #post-<?php the_ID(); ?> -->
</main>