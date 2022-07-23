<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

if ( have_posts() ) {
	?>
	<main>
		<!-- Top breadcrumb -->
		<section class="py-1">
			<div class="container">
				<div class="row">
					<div class="col-md-10 mx-auto magazine-w">
						<div class="col-md-7 d-inline-block my-3">
							<header class="page-header alignwide">
								<h1 class="page-title">
									<?php
									printf(
										/* translators: %s: Search term. */
										esc_html__( 'Results for "%s"', 'twentytwentyone' ),
										'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
									);
									?>
								</h1>
							</header><!-- .page-header -->
						</div>
						<div class="col-md-12">
							<div class="col-md-12">
								<div class="search-result-count default-max-width">
									<?php
									printf(
										esc_html(
											/* translators: %d: The number of search results. */
											_n(
												'We found %d result for your search.',
												'We found %d results for your search.',
												(int) $wp_query->found_posts,
												'twentytwentyone'
											)
										),
										(int) $wp_query->found_posts
									);
									?>
								</div><!-- .search-result-count -->
								<?php
									// Start the Loop.
								while ( have_posts() ) {
									the_post();

									/*
									* Include the Post-Format-specific template for the content.
									* If you want to override this in a child theme, then include a file
									* called content-___.php (where ___ is the Post Format name) and that will be used instead.
									*/
									get_template_part( 'template-parts/content/content-excerpt', get_post_format() );
								} // End the loop.

								// Previous/next page navigation.
								twenty_twenty_one_the_posts_navigation();

								// If no content, include the "No posts found" template.
								?>
							</div>
						</div> 
					</div>
				</div>
			</div>
		</section>
	</main>
	<?php
		// }elseif(isset()){
	?>
	
	<?php
} else {
	?>
	<main>
		<!-- Top breadcrumb -->
		<section class="py-1">
			<div class="container">
				<div class="row">
					<div class="col-md-10 mx-auto magazine-w">
						<?php
							get_template_part( 'template-parts/content/content-none' );
						?> 
					</div>
				</div>
			</div>
		</section>
	</main>
	<?php } ?>
    <!--=========================================== VIDEO START=============================================================-->
    <section class="mb-3 mt-5 pt-3 bg-light user-carosel-large">
        <div class="container">
            <div class="row">
                <h4 class="mt-3 mb-0 text-center text-uppercase announcements">Popular Technology Video <?php echo date("Y"); ?></h4>
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
                        
                            <a class="video-play-icon" href="<?php  if( get_field('video_link') ):  the_field('video_link'); endif; ?>?autoplay=1" data-lity data-toggle="tooltip" data-placement="top" title="<?php the_title();?>"><i class="fa fa-play" aria-hidden="true"></i></a>  

                            <div class="col-md-11 card videos">
                                <div class="col-lg-12 col-md-8">
                                    <img src="<?php echo $OS_video_img;?>" class="img-fluid" data-toggle="tooltip" data-placement="top" title="<?php the_title();?>" alt="<?php the_title();?>">
                                </div>
                            </div>

                            <div class="col-md-11 my-2 mx-auto">
                                <p><?php the_title();?> &nbsp;&nbsp;<?php  if( get_field('video_link') ):  the_field('video_link'); endif; ?></p>

                                <a type="button" class="btn btn-labeled btn-default" href="<?php echo get_permalink(); ?>" data-lity data-toggle="tooltip" data-placement="top" title="<?php the_title();?>" target="_blank">
                                <span class="btn-label d-inline-block">Read More<i class="fa fa-newspaper-o"></i></span></a>
                            </div>

                        </div>
                    </div>
                <?php  $i++; endwhile; wp_reset_query();?>
                    <!-- <div class="col-md-10 my-3 mx-auto popular-video">
                        <div class="col-md-9 d-inline-block videos-css">
                            <a class="video-play-icon" href="https://www.youtube.com/embed/7200_NswpJQ?autoplay=1" data-lity data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022"><i class="fa fa-play" aria-hidden="true"></i></a>
                            <div class="col-md-11 card videos">
                                <div class="col-lg-12 col-md-8">
                                    <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/blackberry-bids-goodbye-phones-stopped-working-on-Jan-4.jpg" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022">
                                </div>
                            </div>
                            <div class="col-md-11 my-2 mx-auto">
                                <p>Blackberry bids goodbye, phones stopped working on Jan 4</p>
                                <a type="button" class="btn btn-labeled btn-default" href="https://www.youtube.com/embed/7200_NswpJQ?autoplay=1" data-lity data-toggle="tooltip" data-placement="top" target="_blank">
                                <span class="btn-label d-inline-block">Read More<i class="fa fa-newspaper-o"></i></span></a>
                            </div>
                        </div>
                    </div>-->                    
                </div>
            </div>
        </div>
    </section>
    <!--=========================================== VIDEO END================================================================-->
    
<?php get_footer(); ?>
