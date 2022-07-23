<?php
/* Template Name: Magazine */
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 */

get_header(); 


$terms = wp_get_post_terms( $post->ID, 'magazine-category');
foreach ( $terms as $term )
{
    $term_link = get_term_link( $term );
    //echo '<a href="' . $term_link . '">' . $term->name . ' ' . $term->ID . '</a>' . ' ';
}                        

?>
<main>
    <!-- Top breadcrumb -->
    <section class="py-1">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto magazine-w">
                    <div class="col-md-7 d-inline-block my-3">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo home_url();?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo $term_link = get_term_link($term ); ?>"><?php echo $term->name; ?></a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php the_title();?></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-10">
                        <div class="col-md-12">                            
                            <h4 class="py-1"><strong><?php the_title();?></strong></h4>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
    
    <!-- Center Content -->
    <section class="py-1">
        <div class="container">
            <div class="row">
                <div class="col-md-10 d-inline-block mx-auto magazine-w magazine-scroll-bigimg">
                    <div class="col-md-7 d-inline-block">
                        <div class="col-lg-12 col-md-8">
                            <div id="carouselExampleControlsT" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <?php $magazine_img=the_post_thumbnail('full'); ; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--==============================Magazine Edition By Category==================================================-->

                    <div class="col-md-4 d-inline-block float-end magazine-scroll">                    
                    <?php 
                    global $post;
                    $category_name=$term->name;    

                    $args_magzine_category = array (
                    'post_type' => get_post_type(),
                    'post_status' => 'publish',
                    'magazine-category'  => $category_name, // get category ID here
                    'order'=>'DESC', 
                    'posts_per_page' =>10,                       
                    );

                    $magazine_cat = new WP_Query( $args_magzine_category );    
                    while ($magazine_cat ->have_posts()) : $magazine_cat ->the_post();  
                    $magzine_cat_img= wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                    ?>                    
                        <div class="card">
                            <div class="row g-0">
                                <div class="col-md-4 p-3">
                                    <img src="<?php echo $magzine_cat_img; ?>" title="<?php echo the_title();?>"  class="img-fluid" alt="<?php echo the_title();?>">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p class="card-text"><small class="text-muted"><?php echo the_time('F jS, Y');?></small><small class="text-muted float-end">Edition No.<?php if( get_field('magazine_post_edition') ): the_field('magazine_post_edition'); endif; ?></small></p>
                                        <h5 class="card-title">
                                            <!-- <a href="javascript:;" onclick="get_id('<?php echo the_ID();?>')"><?php echo the_title();?></a> -->
                                            <a href="<?php echo get_permalink(); ?>"><?php echo the_title();?></a>
                                            
                                        </h5>
                                        <h6 class="card-title"><?php $expert=get_the_excerpt();  echo substr($expert, 0, 70);?>...</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    <?php  endwhile; wp_reset_query();?> 
                    </div> 
                   
                    <!--==============================Magazine Edition By Category==================================================-->
                </div>
            </div>
        </div>
    </section>

    <script>
    // function get_id(ID)
    // {
    //     alert(ID);     

    // }
    </script>

    <!-- Magazine Thought -->
    

    <!-- New Technology -->
    

    <div id="filterID">
        <section class="mb-0">
            <div class="container">
                <div class="row py-2 g-2">
                    <div class="col-md-10 d-inline-block mx-auto lederthought-w">
                        <div class="col-md-12 d-inline-block">
                            <h4 class="mt-4 magazines"><?php echo the_title();?></h4>
                            <h5 class="card-text magazines-post-meta">Open Source India<span>&nbsp;|&nbsp;&nbsp;<?php echo $category_name=$term->name;?>&nbsp;|&nbsp;<?php  echo the_time('F jS, Y' );?></span></h5>
                        </div>
                    </div>
                </div>
                <div class="row pb-5 g-2">
                    <div class="col-md-10 d-inline-block mx-auto lederthought-w">
                        <p class="magazine-p"><?php the_content(); ?></p>
                    </div>                
                </div>            
            </div>
        </section>
    </div>
    <!-- Check Out -->
    <!-- <section class="mb-5">
        <div class="container">
            <div class="row">
                <div class="row g-2">
                    <div class="col-md-10 d-inline-block mx-auto checkout-soft pt-5 pb-4" style="background: url(https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/Group-811.png) no-repeat center; background-size: cover; background-position: left;">
                        <div class="row mb-3 align-middle">
                            <div class="col-md-4 themed-grid-col">&nbsp;</div>
                            <div class="col-md-4 check-out-text themed-grid-col ps-5 pe-5 ms-5">Hi, Developers the most Usefull open source software for windows</div>
                            <div class="col-md-2 themed-grid-col ms-5 align-middle">
                                <button type="button" class="btn btn-danger btn-lg float-end">Check Out</button>
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
                <div class="col-md-12 d-inline-block mx-auto lederthought-w border-top py-3">
                    <div class="col-md-12 d-inline-block">
                        <h4 class="magazine-h4">Our team of technical experts has carried out in-depth software development market research</h4>
                        <p class="magazine-p">When you run a business in the modern era, the presence of a well-structured, feature-rich, and interactive website is of utmost importance. However, coming across the right web development team in such a competitive era can be a challenging task. This is wherein the role of experienced tech experts comes into play. To get you the right team to work for you, we perform an in-depth search of the best-in-class team of leading web developers and top web development companies for your project.</p>
                        <blockquote class="blockquote">web developers and top web development companies for your project.<br> the unique requirements of your web development project.<br> web developers and top web development companies for your project.<br> the unique requirements of your web development project.</blockquote>

                        <p class="magazine-p">When you run a business in the modern era, the presence of a well-structured, feature-rich, and interactive website is of utmost importance. However, coming across the right web development team in such a competitive era can be a challenging task. This is wherein the role of experienced tech experts comes into play. To get you the right team to work for you, we perform an in-depth search of the best-in-class team of leading web developers and top web development companies for your project.</p>
                        <p class="magazine-p">Top Developers has drawn up an integrated list of hundreds of experienced web developers & companies that could cater to the unique project requirements. The list of top-class web development companies that we provide is based on an in-depth analysis of the services provided by the respective firms. Moreover, we also take into consideration the respective customer reviews, ratings, total experience, and the number of projects handled.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-0">
        <div class="container">
            <div class="row py-1 g-2">
                <div class="col-md-12 d-inline-block mx-auto lederthought-w border-top py-3">
                    <div class="col-md-12 d-inline-block">
                        <h4 class="magazine-h4">MOST POPULAR TECH</h4>
                        <ol class="list-group list-group-numbered magazine-list-group-numbered">
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Bespoke Web Development Experiences for Your Business</div>
                                </div>
                                <span class="badge bg-primary rounded-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Leading Top Web Development Companies for Your Assistance</div>
                                </div>
                                <span class="badge bg-primary rounded-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Team of the Best Web Developers</div>
                                </div>
                                <span class="badge bg-primary rounded-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Team of the Best Web Developers</div>
                                </div>
                                <span class="badge bg-primary rounded-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Team of the Best Web Developers</div>
                                </div>
                                <span class="badge bg-primary rounded-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Team of the Best Web Developers</div>
                                </div>
                                <span class="badge bg-primary rounded-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Team of the Best Web Developers</div>
                                </div>
                                <span class="badge bg-primary rounded-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Team of the Best Web Developers</div>
                                </div>
                                <span class="badge bg-primary rounded-pill">14</span>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    

    <!-- Check Out -->
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
                                <p><?php the_title();?></p>
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
    <!--=========================================== VIDEO END===============================================================-->
</main>
<?php get_footer(); ?>

<style>
img.wp-post-image{
	max-width: 100% !important;
    height: 645px !important;
    object-fit: cover;
}</style>
