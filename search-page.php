<?php
/* Template Name:Category Search Page*/
/**
 * The template for displaying search results pages
 *
 *
 */

get_header();

if ( have_posts() ) {
	?>
	<main>
    <?php
        // print_r($_POST['cat_id']);
        // print_r($_POST['post_year']);
        // print_r($_POST['post_month']);
        // print_r(__LINE__,__FILE__);
    ?>
    <?php
    $category_id = get_cat_ID($_POST['cat_id']);
    //print_r($category_id );
    $date_query = [];
        // I have kept the month and year values the same as in your question though I doubt if this is correct
        $m = filter_var( get_the_time( 'm' ), FILTER_VALIDATE_INT ); // Sanitize and validate value as an integer
        $y = filter_var( get_the_time( 'Y' ), FILTER_VALIDATE_INT ); // Sanitize and validate value as an integer

        $date_query = [
            [
                'year'  => $_POST['post_year'],
                'month' => $_POST['post_month']
            ]
        ];
    //print_r($date_query);
        $args = array(
            's' => $_REQUEST[ 'search' ],
            'cat' => $category_id,
            'paged' => $paged,
            'date_query' => $date_query
        );

        //print_r($args);
        // The Query
        $the_query = new WP_Query( $args );
        //print_r($the_query);
        // The Loop
        
    ?>
		<!-- Top breadcrumb -->
		<section class="py-1">
			<div class="container">
				<div class="row">
					<div class="col-md-10 mx-auto magazine-w">
						<div class="col-md-12">
							<div class="col-md-12">
								<div class="search-result-count default-max-width">
                                    <div class="col-md-10">
                                        <div class="col-md-12">
                                            <h4 class="py-1"><strong>Category: <?php echo $_POST['cat_id'];?> <small> of Month <?php echo $_POST['post_month'];?> Year <?php echo $_POST['post_year'];?></small></strong></h4>
                                        </div>
                                    </div>
								</div><!-- .search-result-count -->
								<?php
                                while ( $the_query->have_posts() ) : $the_query->the_post();
                                    //inside the loop
                                    get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
                                    //the_content();
                                endwhile;
								// Reset Post Data
                                wp_reset_postdata();	

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
                        <?php                        
                        $get_video_link = $wpdb->get_results("SELECT `meta_value` FROM `op_postmeta` WHERE `post_id`='".$post->ID."' AND `meta_key`='video_link'");
                        foreach ($get_video_link as $video_url) {                             
                        ?>
                            <a class="video-play-icon" href="<?php echo $video_url->meta_value; ?>" data-lity data-toggle="tooltip" data-placement="top" title="<?php the_title();?>"><i class="fa fa-play" aria-hidden="true"></i></a>  
                            
                        <?php } ?>

                            <div class="col-md-11 card videos">
                                <div class="col-lg-12 col-md-8">
                                    <img src="<?php echo $OS_video_img;?>" class="img-fluid" data-toggle="tooltip" data-placement="top" title="<?php the_title();?>" alt="<?php the_title();?>">
                                </div>
                            </div>

                            <div class="col-md-11 my-2 mx-auto">
                                <p><?php the_title();?></p>
                                <a type="button" class="btn btn-labeled btn-default" href="<?php echo get_permalink(); ?>" data-lity data-toggle="tooltip" data-placement="top" title="<?php the_title();?>" target="_blank">
                                <span class="btn-label d-inline-block">Read More<i class="fa fa-newspaper-o"></i></span></a>
                            </div>

                        </div>
                    </div>
                <?php  $i++; endwhile; wp_reset_query();?>
                    
                </div>
            </div>
        </div>
    </section>
    <!--=========================================== VIDEO END================================================================-->
<?php get_footer(); ?>
