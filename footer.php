<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
    $facebook_link = myprefix_get_theme_option( 'input_facebook_link' );
    $twitter_link = myprefix_get_theme_option( 'input_twitter_link' );
    $instagram_link = myprefix_get_theme_option( 'input_instagram_link' );
    $linkedin_link = myprefix_get_theme_option( 'input_linkedin_link' );

	$email = myprefix_get_theme_option( 'input_email' );
    $mobile = myprefix_get_theme_option( 'input_mobile' );
    $location_add = myprefix_get_theme_option( 'input_location_add' );
	$about_us = myprefix_get_theme_option( 'input_about_us' );
    ?>
	<footer class="text-muted">
		<section class="my-5">
			<div class="container">
				<div class="row">
					<div class="col-md-10 d-inline-block mx-auto footer-content-w">
						<div class="row">
							
							<div class="col-md-3">
								<div class="d-inline-block col-md-11">
									<div class="col-md-11 footer-titles">
										<h6 class="py-2">About us</h6>
									</div>
									<div class="col-md-11 footer-logo">
										<span class="col-4 d-inline-block logo-company">
											<?php the_custom_logo(); ?>
										</span>										
									</div>									
									
									<div class="col-md-11">
										<p><?php echo $about_us;?></p>
										<a type="button" class="btn btn-labeled btn-default" href="https://indiaopensource.com/Open_source/about-us/">
										<span class="btn-label d-inline-block">Read More<i class="fa fa-newspaper-o"></i></span></a>
									</div>									
								</div>
							</div>
							<div class="col-md-3">
								<div class="col-md-11">
									<div class="col-md-12 footer-titles mb-4">
										<h6 class="py-2">Usefull Links</h6>
									</div>
									<div class="col-md-12 userlinks-css">
									    <?php //dynamic_sidebar('open_source-2') ?>
										
										<?php
										wp_nav_menu( array('menu' => 'Footer Menu','container'=> '','items_wrap'=>'<ul> %3$s </ul>','menu_class' => 'fa fa-angle-right'));
										
										//wp_nav_menu( array('menu' => 'Footer Menu','container'=> '','items_wrap'=>'<ul>%3$s</ul>'));
										?>
										
										<!-- <ul class="list-group">
											<li class="list-group-item">
												<a href="javascript:void(0);"><i class="fa fa-angle-right" aria-hidden="true"></i>Home</a>
											</li>
											<li class="list-group-item">
												<a href="javascript:void(0);"><i class="fa fa-angle-right" aria-hidden="true"></i>Technology Announcements</a>
											</li>
											<li class="list-group-item">
												<a href="javascript:void(0);"><i class="fa fa-angle-right" aria-hidden="true"></i>Developer</a>
											</li>
											<li class="list-group-item">
												<a href="javascript:void(0);"><i class="fa fa-angle-right" aria-hidden="true"></i>Data center</a>
											</li>
											<li class="list-group-item">
												<a href="javascript:void(0);"><i class="fa fa-angle-right" aria-hidden="true"></i>CEOs Thought</a>
											</li>
											<li class="list-group-item">
												<a href="javascript:void(0);"><i class="fa fa-angle-right" aria-hidden="true"></i>Community</a>
											</li>
											<li class="list-group-item">
												<a href="javascript:void(0);"><i class="fa fa-angle-right" aria-hidden="true"></i>Reacher Paper</a>
											</li>
											<li class="list-group-item">
												<a href="javascript:void(0);"><i class="fa fa-angle-right" aria-hidden="true"></i>Blogs</a>
											</li>
											<li class="list-group-item">
												<a href="javascript:void(0);"><i class="fa fa-angle-right" aria-hidden="true"></i>Careers</a>
											</li>
											<li class="list-group-item">
												<a href="javascript:void(0);"><i class="fa fa-angle-right" aria-hidden="true"></i>Privacy Policy</a>
											</li>
										</ul> -->

									</div>
								</div>
							</div>
							<div class="col-md-3">
							<div class="d-inline-block col-md-11">
								<div class="col-md-12 footer-titles mb-4">
									<h6 class="py-2">Get in Touchsss</h6>        
								</div>
								<div class="col-md-12 getintouch">
									<div class="col-md-1 d-inline-block align-top">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
									</div>
									<div class="col-md-10 d-inline-block">
										<h6>Email</h6>
										<a href="mailto:<?php echo $email;?>"><p><?php echo $email;?></p></a>        
									</div>        
								</div>
								
								<div class="col-md-12 getintouch">
									<div class="col-md-1 d-inline-block align-top">
										<i class="fa fa-phone" aria-hidden="true"></i>
									</div>
									<div class="col-md-10 d-inline-block">
										<h6>Phone No.</h6>
										<a href="tel:<?php echo $mobile;?>"><p>+ 91 &nbsp;<?php echo $mobile;?></p></a>     
									</div>        
								</div>
								<div class="col-md-12 getintouch">
									<div class="col-md-1 d-inline-block align-top">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
									</div>
									<div class="col-md-10 d-inline-block">
										<h6>Address</h6>
										<p><?php echo $location_add;?></p>            
									</div>        
								</div>    
                            </div>

							</div>
							<div class="col-md-3">
								<div class="d-inline-block col-md-12">
									<div class="col-md-12 footer-titles mb-4">
										<h6 class="py-2">Our Blog</h6>
									</div>

									<?php 
									global $post;
									$latest_blog = new WP_Query(array('posts_per_page' =>3,'paged' => get_query_var('paged') ? get_query_var('paged') : 1 ));
									$i=1;
									while ($latest_blog->have_posts()) : $latest_blog->the_post();
									$latest_blog_img= wp_get_attachment_url( get_post_thumbnail_id($post->ID) );  
									?>

									<div class="card custome-card right-techno-css right-foot-blog-css">
										<div class="row g-0">
											<div class="col-md-3">
												<img src="<?php echo $latest_blog_img;?>" class="img-fluid" alt="...">
											</div>
											<div class="col-md-9">
												<div class="card-body">												
													<a href="<?php echo get_permalink(); ?>"><p class="card-text mb-0"><span class="text-muted">
										             <strong><?php the_title();?></strong></span></p></a>
													<p class="card-text fw-normal"><?php $expert=get_the_excerpt();  echo $expert;?></p>
												</div>
											</div>
										</div>
									</div>
									<?php  $i++; endwhile;  wp_reset_query();?> 

									<!-- <div class="card custome-card right-techno-css right-foot-blog-css">
										<div class="row g-0">
											<div class="col-md-3">
												<img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/main-qimg-27d25d3fd343a3d2e4384c7f0eeaf785-Mask-2.png" class="img-fluid" alt="...">
											</div>
											<div class="col-md-9">
												<div class="card-body">
													<p class="card-text mb-0"><span class="text-muted"><strong> The Focus is on the Community Commerce</strong></span></p>
													<p class="card-text fw-normal">Interview with Prof. Giancarlo Succi, Program</p>
												</div>
											</div>
										</div>
									</div>
									<div class="card custome-card right-techno-css right-foot-blog-css">
										<div class="row g-0">
											<div class="col-md-3">
												<img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/main-qimg-27d25d3fd343a3d2e4384c7f0eeaf785-Mask.png" class="img-fluid" alt="...">
											</div>
											<div class="col-md-9">
												<div class="card-body">
													<p class="card-text mb-0"><span class="text-muted"><strong> The Focus is on the Community Commerce</strong></span></p>
													<p class="card-text fw-normal">Interview with Prof. Giancarlo Succi, Program</p>
												</div>
											</div>
										</div>
									</div> -->
								</div> 
								<!-- <?php dynamic_sidebar('open_source-4') ?> -->
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="mb-0 py-2 mt-3 bg-light bg-footer-subscribe">
			<div class="container">
				<div class="row">
					<div class="col-md-8 d-inline-block mx-auto">
						<div class="col-md-3 d-inline-block text-end pe-2"><small>Subscribe Now</small></div>
						<div class="col-md-6 d-inline-block subscribe-input">
							<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
						</div>
						<div class="col-md-2 d-inline-block">
							<div class="d-inline-block subscribe-submit">
								<button class="btn btn-outline-secondary" type="button" id="button-addon2">Submit</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="bg-footer-copy">
			<div class="container">
				<div class="row">
					<div class="col-md-11 d-inline-block mx-auto">
						<div class="container mt-3">
							<div class="col-md-6 d-inline-block">
								<p class="mb-1"><?php dynamic_sidebar('open_source-5') ?></p>
							</div>
							<div class="col-md-1 d-inline-block footer-social-icons float-end">
								<a href="<?php echo $facebook_link;?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="<?php echo $twitter_link;?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								<a href="<?php echo $instagram_link;?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
								<a href="<?php echo $linkedin_link;?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
				<a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
				<!-- <p class="float-end mb-1 back-to-top">
					<a href="#"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
				</p> -->
			</div>
		</section>
	</footer>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript">
		function openNav() {
		document.getElementById("mySidenav").style.width = "20%";
		}

		function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
		}
	</script>
	<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
	<script  src="<?php bloginfo('template_directory'); ?>/assets/js/script.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/script-header.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
	<?php wp_footer(); ?>
  </body>
</html>
