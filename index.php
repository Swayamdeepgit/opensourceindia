<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>
<main>
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
										<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
											<?php single_post_title(); ?>
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
							<?php
							if ( have_posts() ) {

								// Load posts loop.
								while ( have_posts() ) {
									the_post();

									get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
								}

								// Previous/next page navigation.
								twenty_twenty_one_the_posts_navigation();

							} else {

								// If no content, include the "No posts found" template.
								get_template_part( 'template-parts/content/content-none' );

							}
							?>
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
                <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <div class="col-md-10 my-3 mx-auto popular-video">
                                <div class="col-md-3 d-inline-block videos-css">
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
                                <div class="col-md-3 d-inline-block videos-css">
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
                                <div class="col-md-3 d-inline-block videos-css">
                                    <a class="video-play-icon" href="https://www.youtube.com/embed/rIo56xcpyq0?autoplay=1" data-lity data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022"><i class="fa fa-play" aria-hidden="true"></i></a>
                                    <div class="col-md-11 card videos">
                                        <div class="col-lg-12 col-md-8">
                                            <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/5G-in-India-explained.jpg" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022">
                                        </div>
                                    </div>
                                    <div class="col-md-11 my-2 mx-auto">
                                        <p>5G in India, explained!</p>
                                        <a type="button" class="btn btn-labeled btn-default" href="https://www.youtube.com/embed/rIo56xcpyq0?autoplay=1" data-lity data-toggle="tooltip" data-placement="top" target="_blank">
                                        <span class="btn-label d-inline-block">Read More<i class="fa fa-newspaper-o"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                        <div class="col-md-10 my-3 mx-auto popular-video">
                                <div class="col-md-3 d-inline-block videos-css">
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
                                <div class="col-md-3 d-inline-block videos-css">
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
                                <div class="col-md-3 d-inline-block videos-css">
                                    <a class="video-play-icon" href="https://www.youtube.com/embed/rIo56xcpyq0?autoplay=1" data-lity data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022"><i class="fa fa-play" aria-hidden="true"></i></a>
                                    <div class="col-md-11 card videos">
                                        <div class="col-lg-12 col-md-8">
                                            <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/5G-in-India-explained.jpg" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022">
                                        </div>
                                    </div>
                                    <div class="col-md-11 my-2 mx-auto">
                                        <p>5G in India, explained!</p>
                                        <a type="button" class="btn btn-labeled btn-default" href="https://www.youtube.com/embed/rIo56xcpyq0?autoplay=1" data-lity data-toggle="tooltip" data-placement="top" target="_blank">
                                        <span class="btn-label d-inline-block">Read More<i class="fa fa-newspaper-o"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                        <div class="col-md-10 my-3 mx-auto popular-video">
                                <div class="col-md-3 d-inline-block videos-css">
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
                                <div class="col-md-3 d-inline-block videos-css">
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
                                <div class="col-md-3 d-inline-block videos-css">
                                    <a class="video-play-icon" href="https://www.youtube.com/embed/rIo56xcpyq0?autoplay=1" data-lity data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022"><i class="fa fa-play" aria-hidden="true"></i></a>
                                    <div class="col-md-11 card videos">
                                        <div class="col-lg-12 col-md-8">
                                            <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/5G-in-India-explained.jpg" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022">
                                        </div>
                                    </div>
                                    <div class="col-md-11 my-2 mx-auto">
                                        <p>5G in India, explained!</p>
                                        <a type="button" class="btn btn-labeled btn-default" href="https://www.youtube.com/embed/rIo56xcpyq0?autoplay=1" data-lity data-toggle="tooltip" data-placement="top" target="_blank">
                                        <span class="btn-label d-inline-block">Read More<i class="fa fa-newspaper-o"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev videos-prev-css" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next videos-next-css" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="mb-3 mt-5 pt-3 bg-light user-carosel-mobile">
        <div class="container">
            <div class="row">
                <h4 class="mt-3 mb-0 text-center text-uppercase announcements">Popular Technology Video</h4>
            </div>
            <div class="row">
                <div id="carouselExampleControls4" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="col-md-10 my-3 mx-auto popular-video">
                                <div class="col-md-3 d-inline-block videos-css">
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
                        <div class="carousel-item">
                            <div class="col-md-10 my-3 mx-auto popular-video">
                                <div class="col-md-3 d-inline-block videos-css">
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
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-10 my-3 mx-auto popular-video">
                                <div class="col-md-3 d-inline-block videos-css">
                                    <a class="video-play-icon" href="https://www.youtube.com/embed/rIo56xcpyq0?autoplay=1" data-lity data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022"><i class="fa fa-play" aria-hidden="true"></i></a>
                                    <div class="col-md-11 card videos">
                                        <div class="col-lg-12 col-md-8">
                                            <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/5G-in-India-explained.jpg" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022">
                                        </div>
                                    </div>
                                    <div class="col-md-11 my-2 mx-auto">
                                        <p>5G in India, explained!</p>
                                        <a type="button" class="btn btn-labeled btn-default" href="https://www.youtube.com/embed/rIo56xcpyq0?autoplay=1" data-lity data-toggle="tooltip" data-placement="top" target="_blank">
                                        <span class="btn-label d-inline-block">Read More<i class="fa fa-newspaper-o"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev videos-prev-css" type="button" data-bs-target="#carouselExampleControls4" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next videos-next-css" type="button" data-bs-target="#carouselExampleControls4" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
	</article><!-- #post-${ID} -->
</main>
<?php
get_footer();
