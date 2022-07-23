<?php
/*Template Name: Our Magazine*/

get_header();?>

<section class="we-offer-area text-center bg-gray">
    <div class="container">
        <div class="row my-5">
            <h4 class="mt-3 mb-0 text-center text-uppercase lederthought">Our Magazine<span> </span></h4>
            <span class="text-center lederthought-sub">“This is our magazine to provided to our customer”</span>
        </div>
    </div>    
	<div class="container">
		<div class="row g-2">
			<div class="col-md-10 d-inline-block mx-auto magazine-archive-w">
				<div class="col-md-12 d-inline-block announce-single-page g-5">

                    <?php
                    $magazine_args=array( 
                    'post_type'=>'magazine',
                    'posts_per_page'=>25,                   
					'paged' => get_query_var('paged') ? get_query_var('paged') : 1                    
                    );
                    $magazine_posts=new WP_Query($magazine_args);
                    if( $magazine_posts->have_posts() ) :
                    while($magazine_posts ->have_posts()):                    
                    $magazine_posts->the_post();
                    ?>            
                    <!-- Single Item -->
                    <div class="col-md-3 d-inline-block float-start magazine-archive-css">
                        <header class="entry-header">
                            <a href="<?php echo get_post_permalink() ?>">
                                <?php the_post_thumbnail();?>
                            </a>
                        </header>
                        <div class="entry-content">
                            <h2 class="default-max-width">
                                <a href="<?php echo get_post_permalink() ?>">
                                    <?php echo the_title();?>
                                </a>  
                            </h2>                            
                            <!-- <p class="desc-first">
                                <?php $expert=get_the_excerpt();  echo substr($expert, 0, 50);?>...
                            </p> -->
                            <!-- <a href="<?php //echo get_post_permalink() ?>"><center><button class="read-btn-services">Read More</button></center></a> -->
                        </div>
                    </div>
                        <!-- End Single Item -->
                        <?php endwhile;
                    else:
                    ?>
                    
                    <p class="mesage-service">Sorry, no magazine found here...</p>                   

                    <?php endif;?>

                    <div class="clearfix"></div>

                <!--==================================Pagination block===============================================-->
                    <ul class="pagination-ul">
						<?php 
                        $big = 999999999; // need an unlikely integer
                        $links = paginate_links( array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format' => '?paged=%#%',
                            'current' => max( 1, get_query_var('paged') ),
                            'total' => $magazine_posts->max_num_pages,
                            'prev_text'    => '<<',
                            'next_text'    => '>>',
                            'type' => 'array'
                        ) );
                        
                        if(!empty($links)){ ?>
                            <ul class="pagination">
                                <?php
                                foreach($links as $link){
                                ?>
                                    <li><?php echo $link; ?></li>
                                <?php
                                }
                                wp_reset_query(); 
                                ?>
                            </ul>
                        <?php } ?>
                    </ul>
                <!--==================================Pagination block===============================================-->
            
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Check Out -->
<section class="mb-5 bg-light mt-5 pt-3 pb-4">
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




<?php get_footer();?>
        

