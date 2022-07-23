<?php
/**
 * Template part for displaying page content in page.php
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
                                <li class="breadcrumb-item"><a href="/Open_source">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <h4 class="py-1"><strong><?php the_title(); ?></strong></h4>
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
                    <div class="col-md-12 d-inline-block">
                        <div class="col-lg-12 col-md-8 wp-post-img-box img-thumbnail">
							<?php the_post_thumbnail( 'full', array('class' => 'img-fluid') ); ?>
							
                        </div>
                        <?php if( get_field('content_below_featured_image') ): ?>
						<div class="col-md-12">
                            <p class="my-4">
								<h2 class="featured-content"><?php the_field('content_below_featured_image'); ?></h2>
                            </p>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


	<section class="mb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-inline-block mx-auto lederthought-w">
				<?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
    <?php
    if (is_page( 16 )) {
    ?>
	<!-- Director Thought -->
    <section class="mb-5 bg-light newsletter-w">
        <div class="container">
            <div class="row py-3 g-2">
                <div class="col-md-10 d-inline-block mx-auto newsletter">
					<div class="card mb-3 director-card">
						<div class="row g-0">
							<div class="col-md-2 text-center">
								<?php
									$photoimage = myprefix_get_theme_option( 'input_director_logo' );
									$director_name = myprefix_get_theme_option( 'input_director_name' );
									$director_designation = myprefix_get_theme_option( 'input_director_designation' );
									$director_thought = myprefix_get_theme_option( 'input_director_thought' );
								?>
								<img src="<?php echo $photoimage;?>" class="img-fluid rounded-start" alt="<?php echo $director_name;?> - <?php echo $director_designation;?>">
								<h5 class="card-title"><?php echo $director_name;?></h5>
								<h6 class="card-title"><?php echo $director_designation;?></h6>
							</div>
							<div class="col-md-10">
								<div class="card-body p-4 px-5">
									<p><?php echo $director_thought;?></p>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </section>
    <?php
        }
    ?>
    <?php
    if (is_page( 17 )) {
    ?>
    <section class="bg-light">
        <div class="col-12 m-0 p-0">
        <?php if( get_field('add_map_location') ): ?>
            <?php the_field('add_map_location'); ?>
        <?php endif; ?>
        </div>
    </section>
    <?php
    }
    ?>

    <!--=========================================== VIDEO START=============================================================-->
    <section class="mb-3 mt-5 pt-3 bg-light user-carosel-large">
        <div class="container">
            <div class="row">
                <h4 class="mt-3 mb-0 text-center text-uppercase announcements">Popular Technology Video</h4>
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
                                <p><?php the_title();?></p>
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
			<?php
			//the_content();

			// wp_link_pages(
			// 	array(
			// 		'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
			// 		'after'    => '</nav>',
			// 		/* translators: %: Page number. */
			// 		'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
			// 	)
			// );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer default-max-width">
			<?php //twenty_twenty_one_entry_meta_footer(); ?>
		</footer><!-- .entry-footer -->

		<?php if ( ! is_singular( 'attachment' ) ) : ?>
			<?php //get_template_part( 'template-parts/post/author-bio' ); ?>
		<?php endif; ?>

	</article><!-- #post-<?php the_ID(); ?> -->
</main>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php /* ?><?php if ( ! is_front_page() ) : ?>
		<header class="entry-header alignwide">
			<?php get_template_part( 'template-parts/header/entry-header' ); ?>
			<?php twenty_twenty_one_post_thumbnail(); ?>
		</header><!-- .entry-header -->
	<?php elseif ( has_post_thumbnail() ) : ?>
		<header class="entry-header alignwide">
			<?php twenty_twenty_one_post_thumbnail(); ?>
		</header><!-- .entry-header -->
	<?php endif; ?>
<?php */ ?>
	<div class="entry-content">
		<?php
		// the_content();

		// wp_link_pages(
		// 	array(
		// 		'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
		// 		'after'    => '</nav>',
		// 		/* translators: %: Page number. */
		// 		'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
		// 	)
		// );
		?>
	</div><!-- .entry-content -->

	<?php /* ?><?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer default-max-width">
			<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Post title. Only visible to screen readers. *
					esc_html__( 'Edit %s', 'twentytwentyone' ),
					'<span class="screen-reader-text">' . get_the_title() . '</span>'
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?><?php */ ?>
</article><!-- #post-<?php the_ID(); ?> -->
