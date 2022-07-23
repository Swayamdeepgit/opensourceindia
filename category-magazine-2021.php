<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

$description = get_the_archive_description();
?>
<main>ghgfvhj
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<section class="py-1">
			<div class="container">
				<div class="row">
					<div class="col-md-10 mx-auto magazine-w">
						<div class="col-md-7 d-inline-block my-3">
							<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">
										<?php if ( have_posts() ) : ?>
											<?php the_archive_title(); ?>
										<?php endif; ?>
									</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-10">
							<div class="col-md-12">
								<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
									<h4 class="py-1"><strong><?php single_post_title(); ?></strong></h4>
								<?php endif; ?>
							</div>
						</div> 
					</div>
				</div>
			</div>
		</section>
		<section class="py-2">
			<div class="container">
				<div class="row g-2">
					<div class="col-md-10 d-inline-block mx-auto lederthought-w">
						<div class="col-md-12 d-inline-block announce-single-page g-5">
							<?php if ( have_posts() ) : ?>

							<header class="page-header alignwide">
								
								<?php if ( $description ) : ?>
									<div class="archive-description"><?php echo wp_kses_post( wpautop( $description ) ); ?></div>
								<?php endif; ?>
							</header><!-- .page-header -->

							<?php while ( have_posts() ) : ?>
								<?php the_post(); ?>
								<?php get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) ); ?>
							<?php endwhile; ?>
                            <div class="clearfix"></div>
							<?php twenty_twenty_one_the_posts_navigation(); ?>

                            <?php
                                
                            ?>

							<?php else : ?>
								<?php get_template_part( 'template-parts/content/content-none' ); ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="mb-3 mt-5 pt-3 bg-light user-carosel-large">
        <div class="container">
            <div class="row">
                <h4 class="mt-3 mb-0 text-center text-uppercase announcements">Popular Technology Video</h4>
            </div>
            <div class="row">
                <div class="your-class col-md-10 d-inline-block mx-auto checkout-soft pt-5 pb-4">
                    <div class="col-md-10 my-3 mx-auto popular-video">
                        <div class="col-md-9 d-inline-block videos-css">
                            <a class="video-play-icon" href="https://www.youtube.com/embed/B1dBlVyfM9E?autoplay=1" data-lity data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022"><i class="fa fa-play" aria-hidden="true"></i></a>
                            <div class="col-md-11 card videos">
                                <div class="col-lg-12 col-md-8">
                                    <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/Jumpstarter-2022-1.jpg" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022">
                                </div>
                            </div>
                            <div class="col-md-11 my-2 mx-auto">
                                <p>Jumpstarter 2022</p>
                                <a type="button" class="btn btn-labeled btn-default" href="https://www.youtube.com/embed/B1dBlVyfM9E?autoplay=1" data-lity data-toggle="tooltip" data-placement="top" target="_blank">
                                <span class="btn-label d-inline-block">Read More<i class="fa fa-newspaper-o"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 my-3 mx-auto popular-video">
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
                    </div>
                    <div class="col-md-10 my-3 mx-auto popular-video">
                        <div class="col-md-9 d-inline-block videos-css">
                            <a class="video-play-icon" href="https://www.youtube.com/embed/B1dBlVyfM9E?autoplay=1" data-lity data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022"><i class="fa fa-play" aria-hidden="true"></i></a>
                            <div class="col-md-11 card videos">
                                <div class="col-lg-12 col-md-8">
                                    <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/Jumpstarter-2022-1.jpg" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022">
                                </div>
                            </div>
                            <div class="col-md-11 my-2 mx-auto">
                                <p>Jumpstarter 2022</p>
                                <a type="button" class="btn btn-labeled btn-default" href="https://www.youtube.com/embed/B1dBlVyfM9E?autoplay=1" data-lity data-toggle="tooltip" data-placement="top" target="_blank">
                                <span class="btn-label d-inline-block">Read More<i class="fa fa-newspaper-o"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 my-3 mx-auto popular-video">
                        <div class="col-md-9 d-inline-block videos-css">
                            <a class="video-play-icon" href="https://www.youtube.com/embed/B1dBlVyfM9E?autoplay=1" data-lity data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022"><i class="fa fa-play" aria-hidden="true"></i></a>
                            <div class="col-md-11 card videos">
                                <div class="col-lg-12 col-md-8">
                                    <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/Jumpstarter-2022-1.jpg" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022">
                                </div>
                            </div>
                            <div class="col-md-11 my-2 mx-auto">
                                <p>Jumpstarter 2022</p>
                                <a type="button" class="btn btn-labeled btn-default" href="https://www.youtube.com/embed/B1dBlVyfM9E?autoplay=1" data-lity data-toggle="tooltip" data-placement="top" target="_blank">
                                <span class="btn-label d-inline-block">Read More<i class="fa fa-newspaper-o"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 my-3 mx-auto popular-video">
                        <div class="col-md-9 d-inline-block videos-css">
                            <a class="video-play-icon" href="https://www.youtube.com/embed/B1dBlVyfM9E?autoplay=1" data-lity data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022"><i class="fa fa-play" aria-hidden="true"></i></a>
                            <div class="col-md-11 card videos">
                                <div class="col-lg-12 col-md-8">
                                    <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/Jumpstarter-2022-1.jpg" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022">
                                </div>
                            </div>
                            <div class="col-md-11 my-2 mx-auto">
                                <p>Jumpstarter 2022</p>
                                <a type="button" class="btn btn-labeled btn-default" href="https://www.youtube.com/embed/B1dBlVyfM9E?autoplay=1" data-lity data-toggle="tooltip" data-placement="top" target="_blank">
                                <span class="btn-label d-inline-block">Read More<i class="fa fa-newspaper-o"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 my-3 mx-auto popular-video">
                        <div class="col-md-9 d-inline-block videos-css">
                            <a class="video-play-icon" href="https://www.youtube.com/embed/B1dBlVyfM9E?autoplay=1" data-lity data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022"><i class="fa fa-play" aria-hidden="true"></i></a>
                            <div class="col-md-11 card videos">
                                <div class="col-lg-12 col-md-8">
                                    <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/Jumpstarter-2022-1.jpg" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022">
                                </div>
                            </div>
                            <div class="col-md-11 my-2 mx-auto">
                                <p>Jumpstarter 2022</p>
                                <a type="button" class="btn btn-labeled btn-default" href="https://www.youtube.com/embed/B1dBlVyfM9E?autoplay=1" data-lity data-toggle="tooltip" data-placement="top" target="_blank">
                                <span class="btn-label d-inline-block">Read More<i class="fa fa-newspaper-o"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 my-3 mx-auto popular-video">
                        <div class="col-md-9 d-inline-block videos-css">
                            <a class="video-play-icon" href="https://www.youtube.com/embed/B1dBlVyfM9E?autoplay=1" data-lity data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022"><i class="fa fa-play" aria-hidden="true"></i></a>
                            <div class="col-md-11 card videos">
                                <div class="col-lg-12 col-md-8">
                                    <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/Jumpstarter-2022-1.jpg" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022">
                                </div>
                            </div>
                            <div class="col-md-11 my-2 mx-auto">
                                <p>Jumpstarter 2022</p>
                                <a type="button" class="btn btn-labeled btn-default" href="https://www.youtube.com/embed/B1dBlVyfM9E?autoplay=1" data-lity data-toggle="tooltip" data-placement="top" target="_blank">
                                <span class="btn-label d-inline-block">Read More<i class="fa fa-newspaper-o"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 my-3 mx-auto popular-video">
                        <div class="col-md-9 d-inline-block videos-css">
                            <a class="video-play-icon" href="https://www.youtube.com/embed/B1dBlVyfM9E?autoplay=1" data-lity data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022"><i class="fa fa-play" aria-hidden="true"></i></a>
                            <div class="col-md-11 card videos">
                                <div class="col-lg-12 col-md-8">
                                    <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/Jumpstarter-2022-1.jpg" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022">
                                </div>
                            </div>
                            <div class="col-md-11 my-2 mx-auto">
                                <p>Jumpstarter 2022</p>
                                <a type="button" class="btn btn-labeled btn-default" href="https://www.youtube.com/embed/B1dBlVyfM9E?autoplay=1" data-lity data-toggle="tooltip" data-placement="top" target="_blank">
                                <span class="btn-label d-inline-block">Read More<i class="fa fa-newspaper-o"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	</article><!-- #post-${ID} -->
</main>

<?php get_footer(); ?>
