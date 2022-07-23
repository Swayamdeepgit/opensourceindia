<?php
/* Template Name: Home Page */
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 */
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
                <div class="col-8 text-center">
                    <div class="col-12 d-inline-block">
                        <marquee class="col-md-12"><p class="mb-0">Darktable An Open Source Photo Editing App Now Supports Canon's CR3 Raw Format Photo Editing App Now Supports ... </p> / <p class="mb-0">Darktable An Open Source Photo Editing App Now Supports Canon's CR3 Raw Format Photo Editing App Now Supports ... </p> / <p class="mb-0">Darktable An Open Source Photo Editing App Now Supports Canon's CR3 Raw Format Photo Editing App Now Supports ... </p> / <p class="mb-0">Darktable An Open Source Photo Editing App Now Supports Canon's CR3 Raw Format Photo Editing App Now Supports ... </p> / <p class="mb-0">Darktable An Open Source Photo Editing App Now Supports Canon's CR3 Raw Format Photo Editing App Now Supports ... </p></marquee>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- <div class="py-lg-0">
            <div class="col-lg-10 col-md-8 mx-auto">
                
                
                
            </div>
        </div> -->
    </section>
    <!-- Archives Search -->
    <section class="py-lg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-10 my-3 d-flex fw-bold mx-auto year-month-width">
                    <div class="col-md-4 border archive-search d-inline-block themed-grid-col">
                        <div class="col-md-12 d-inline-block ms-1 year-month">
                            <div class="col-md-12 d-inline-block themed-grid-col">
                                <div class="col-md-3 d-inline-block themed-grid-col">
                                    Category
                                </div>
                                <div class="col-md-7 d-inline-block ms-3 themed-grid-col">
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
                                            foreach ( $categories as $category ) {
                                                $term_link = get_category_link($category->term_id );
                                                $term_link = esc_url( $term_link );           
                                                echo '<option value="'.$term_link.'">'.$category->cat_name.'</option>';
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
    <!-- Center Content -->
    <section class="py-1">
        <div class="container">
            <div class="row">
                <div class="col-md-10 d-inline-block mx-auto magazine-w">
                    <div class="col-md-7 d-inline-block">
                        <div class="col-lg-12 col-md-12">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                    <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/Open-Source-Magazine-Page.png" class="d-block w-100" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/01Open-Source-Magazine-Page.png" class="d-block w-100" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2021" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/0Open-Source-Magazine-Page.png" class="d-block w-100" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2020" alt="...">
                                    </div>
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
                        <div class="col-md-12 banner-right-panel">
                            <div class="col-md-12">
                                <div class="new-post position-absolute px-3 py-1">New</div>
                                <div class="col-lg-12 col-md-12">
                                    <a href="https://indiaopensource.com/Open_source/how-are-cloud-based-securities-empowered-with-open-apis/"><img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/How-are-Cloud-Based-Securities-empowered.jpg" class="img-fluid interview-img" data-toggle="tooltip" data-placement="top" title="How are Cloud-Based Securities empowered with open APIs?"></a>
                                </div>
                                <div class="col-md-11 mx-auto py-3">
                                    <p class="h5 post-para"><a href="https://indiaopensource.com/Open_source/how-are-cloud-based-securities-empowered-with-open-apis/">How are Cloud-Based Securities empowered with open APIs?</a></p>
                                    <p class="h5 interview text-muted">The security boundaries for enterprises employing public cloud resources are blurring in today's world of hybrid cloud infrastructures that use both on-premise and public cloud Infrastructure-as-a-Service (IaaS) or Software-as-a-Service (SaaS). 

Many businesses are turning to cloud-based security technology. It is well-known as a reliable data storage alternative, and it's swiftly gaining popularity due to its more flexible security system management, ease of use, and interoperability thanks to open API architecture.

Cloud-based security technique offers great ability to integrate any system, even seemingly disconnected ones, allowing for remarkable expansion and scalability. Security technology becomes more holistic and manageable as a result of open APIs, simplifying management.</p>
                                    <a type="button" class="btn btn-labeled btn-default" href="https://indiaopensource.com/Open_source/how-are-cloud-based-securities-empowered-with-open-apis/"> <span class="btn-label">Read More<i class="fa fa-newspaper-o"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 banner-right-panel">
                            <div class="col-md-12">
                                <div class="new-post position-absolute px-3 py-1">New</div>
                                <div class="col-lg-12 col-md-12">
                                    <a href="https://indiaopensource.com/Open_source/discover-cloud-data-warehouses-with-snowflake/"><img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/Discover-Cloud-Data-Warehouses-with-Snowflake.jpg" class="img-fluid interview-img" data-toggle="tooltip" data-placement="top" title="Discover Cloud Data Warehouse with Snowflake"></a>
                                </div>
                                <div class="col-md-11 mx-auto py-3">
                                    <p class="h5 post-para"><a href="https://indiaopensource.com/Open_source/discover-cloud-data-warehouses-with-snowflake/">Discover Cloud Data Warehouse with Snowflake</a></p>
                                    <p class="h5 interview text-muted">Every organization is dealing with constantly increasing volumes of data. This data not only needs to be stored on more secure infrastructures but also needs strategically planned systems to share data and make it accessible without the risk of exposing it to unauthentic use.

Technology-enriched companies are thriving towards providing better ways to automate tasks and make data storage and accessibility more efficient. A Cloud Data Warehouse is a service that allows organizations to store and manage data efficiently while making it accessible to authentic users. It is a database delivered in a public cloud as a managed service that is optimized for analytics, scale, and ease of use.</p>
                                    <a type="button" class="btn btn-labeled btn-default" href="https://indiaopensource.com/Open_source/discover-cloud-data-warehouses-with-snowflake/"> <span class="btn-label">Read More<i class="fa fa-newspaper-o"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>

    <!-- Leder Thought -->
    <section class="p-3 my-3 bg-light user-carosel-large">
        <div class="container">
            <div class="row">
                <h4 class="mt-3 mb-0 text-center text-uppercase lederthought">Leder Thought</h4>
                <span class="text-center lederthought-sub">“With the Internet and open source, the world is your playground”</span>
            </div>
            <div class="row">
                <div class="your-class-leader">
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

    <section class="p-3 my-3 bg-light user-carosel-mobile">
        <div class="container">
            <div class="row">
                <h4 class="mt-3 mb-0 text-center text-uppercase lederthought">Leder Thought</h4>
                <span class="text-center lederthought-sub">“With the Internet and open source, the world is your playground”</span>
            </div>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row py-5 g-2 col-md-10 mx-auto lederthought-wd">
                            <div class="col-md-2 leaders-colom text-center">
                                <div class="col-md-12 rounded-circle leaders-image">
                                    <a href="javascript:void(0);"><img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/032-Mask.png" class="rounded-circle border p-2" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022" alt="Sreejani Bhattacharya"></a>
                                </div>
                                <h6><a href="javascript:void(0);">Aiding Big Data Cluster Computing...</a></h6>
                                <p>Sreejani Bhattacharya</p>
                                <p class="post-meta-css">July 30, 2020</p>
                                <span><a href="javascript:void(0);"><i class="fa fa-newspaper-o"></i> 53</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row py-5 g-2 col-md-10 mx-auto lederthought-wd">
                            <div class="col-md-2 leaders-colom text-center">
                                <div class="col-md-12 rounded-circle leaders-image">
                                    <a href="javascript:void(0);"><img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/03-Mask-2.png" class="rounded-circle border p-2" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022" alt="Sreejani Bhattacharya"></a>
                                </div>
                                <h6><a href="javascript:void(0);">Aiding Big Data Cluster Computing...</a></h6>
                                <p>Sreejani Bhattacharya</p>
                                <p class="post-meta-css">July 30, 2020</p>
                                <span><a href="javascript:void(0);"><i class="fa fa-newspaper-o"></i> 53</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row py-5 g-2 col-md-10 mx-auto lederthought-wd">
                            <div class="col-md-2 leaders-colom text-center">
                                <div class="col-md-12 rounded-circle leaders-image">
                                    <a href="javascript:void(0);"><img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/03-Mask-3.png" class="rounded-circle border p-2" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022" alt="Sreejani Bhattacharya"></a>
                                </div>
                                <h6><a href="javascript:void(0);">Aiding Big Data Cluster Computing...</a></h6>
                                <p>Sreejani Bhattacharya</p>
                                <p class="post-meta-css">July 30, 2020</p>
                                <span><a href="javascript:void(0);"><i class="fa fa-newspaper-o"></i> 53</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row py-5 g-2 col-md-10 mx-auto lederthought-wd">
                            <div class="col-md-2 leaders-colom text-center">
                                <div class="col-md-12 rounded-circle leaders-image">
                                    <a href="javascript:void(0);"><img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/03-Mask-4.png" class="rounded-circle border p-2" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022" alt="Sreejani Bhattacharya"></a>
                                </div>
                                <h6><a href="javascript:void(0);">Aiding Big Data Cluster Computing...</a></h6>
                                <p>Sreejani Bhattacharya</p>
                                <p class="post-meta-css">July 30, 2020</p>
                                <span><a href="javascript:void(0);"><i class="fa fa-newspaper-o"></i> 53</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row py-5 g-2 col-md-10 mx-auto lederthought-wd">
                            <div class="col-md-2 leaders-colom text-center last-leaders">
                                <div class="col-md-12 rounded-circle leaders-image">
                                    <a href="javascript:void(0);"><img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/03-Mask-5.png" class="rounded-circle border p-2" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022" alt="Sreejani Bhattacharya"></a>
                                </div>
                                <h6><a href="javascript:void(0);">Aiding Big Data Cluster Computing...</a></h6>
                                <p>Sreejani Bhattacharya</p>
                                <p class="post-meta-css">July 30, 2020</p>
                                <span><a href="javascript:void(0);"><i class="fa fa-newspaper-o"></i> 53</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- New Technology -->
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
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="col-md-10 card announce">
                                        <div class="new-post position-absolute px-3 py-1">New</div>
                                        <div class="col-lg-12 col-md-12">
                                            <a href="https://indiaopensource.com/Open_source/what-microsoft-azure-has-brought-to-table/"><img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/MicrosoftTeams-azure-image.jpg" data-toggle="tooltip" data-placement="top" title="What Microsoft Azure has brought to the table?" class="img-fluid announce-img-css"></a>
                                        </div>
                                        <div class="card-img-overlay">
                                            <!-- <h5 class="card-title">Card title</h5> -->
                                            <p class="card-text techno-text-title"><a href="https://indiaopensource.com/Open_source/what-microsoft-azure-has-brought-to-table/">What Microsoft Azure has brought to the table?</a></p>
                                            <p class="card-text">Abbinaya Kumar  -  December 14,2021</p>
                                        </div>
                                    </div>
                                    <div class="col-md-10 my-3 announce-text-content">
                                        <p>Microsoft Azure cloud is one of the leading cloud service providers with its innovative and collaborative ideas. Azure has recently announced many securities updated in their Azur WAF within a week on their official website through blogs that seem interesting and important to the customers.</p>
                                        <a type="button" class="btn btn-labeled btn-default" href="https://indiaopensource.com/Open_source/what-microsoft-azure-has-brought-to-table/">
                                        <span class="btn-label d-inline-block mt-3" data-toggle="tooltip" data-placement="top" title="What Microsoft Azure has brought to the table?">Read More<i class="fa fa-newspaper-o"></i></span></a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-10 my-3">
                            <div class="card border-top custome-card pt-4">
                                <div class="row g-0">
                                    <div class="col-md-2">
                                        <a href="https://indiaopensource.com/Open_source/discover-cloud-data-warehouses-with-snowflake/"><img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/Discover-Cloud-Data-Warehouses-with-Snowflake.jpg" data-toggle="tooltip" data-placement="top" title="Discover Cloud Data Warehouse with Snowflake" class="img-fluid announce-small-img-css" alt="Discover Cloud Data Warehouse with Snowflake"></a>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <h6 class="card-title"><a href="https://indiaopensource.com/Open_source/discover-cloud-data-warehouses-with-snowflake/">Discover Cloud Data Warehouse with Snowflake</a></h5>
                                            <p class="card-text">Every organization is dealing with constantly increasing volumes of data. This data not only needs to be stored on more secure infrastructures ... </p>
                                            <p class="card-text"><small class="text-muted"><strong>Abbinaya Kumar  -</strong>  June 14, 2021</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-top custome-card pt-4">
                                <div class="row g-0">
                                    <div class="col-md-2">
                                        <a href="https://indiaopensource.com/Open_source/why-should-you-hire-a-devops-engineer/"><img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/Why-should-you-hire-a-DevOps-Engineer.jpg" data-toggle="tooltip" data-placement="top" title="Why should you hire a DevOps Engineer?" class="img-fluid announce-small-img-css" alt="Why should you hire a DevOps Engineer?"></a>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <h6 class="card-title"><a href="https://indiaopensource.com/Open_source/why-should-you-hire-a-devops-engineer/">Why should you hire a DevOps Engineer?</a></h5>
                                            <p class="card-text">A DevOps Engineer bridges the gap between the development team and the Operational team. They oversee code releases and deployments ...</p>
                                            <p class="card-text"><small class="text-muted"><strong>Akhilesh  -</strong>  January 14, 2021</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-top custome-card pt-4">
                                <div class="row g-0">
                                    <div class="col-md-2">
                                        <a href="https://indiaopensource.com/Open_source/salesforce-to-acquire-troops-in-2023/"><img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/Salesforce-to-acquire-Troops-in-2023.jpg" data-toggle="tooltip" data-placement="top" title="Salesforce to acquire Troops in 2023" class="img-fluid announce-small-img-css" alt="Salesforce to acquire Troops in 2023"></a>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <h6 class="card-title"><a href="https://indiaopensource.com/Open_source/salesforce-to-acquire-troops-in-2023/">Salesforce to acquire Troops in 2023</a></h5>
                                            <p class="card-text">Salesforce, a leading CRM platform will soon acquire troops.ai which works as a bridge between slack and salesforce. The salesforce ...</p>
                                            <p class="card-text"><small class="text-muted"><strong>Bhavesh  -</strong>  August 14,2021</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-top custome-card pt-4">
                                <div class="row g-0">
                                    <div class="col-md-2">
                                        <a href="https://indiaopensource.com/Open_source/now-alexa-will-be-able-to-mimic-voices/"><img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/Now-Alexa-will-be-able-to-Mimic-Voices.jpg" data-toggle="tooltip" data-placement="top" title="Now Alexa will be able to Mimic Voices" class="img-fluid announce-small-img-css" alt="Now Alexa will be able to Mimic Voices"></a>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <h6 class="card-title"><a href="https://indiaopensource.com/Open_source/now-alexa-will-be-able-to-mimic-voices/">Now Alexa will be able to Mimic Voices</a></h5>
                                            <p class="card-text">Rohit Prasad, Amazon's head scientist for Alexa revealed on the second day of the re: Mars event that soon Alexa will be able to speak ...</p>
                                            <p class="card-text"><small class="text-muted"><strong>Aaradhya  -</strong>  February 14,2021</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-top custome-card pt-4">
                                <div class="row g-0">
                                    <div class="col-md-2">
                                        <a href="https://indiaopensource.com/Open_source/introduction-to-webassembly/"><img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/maxresdefault.jpg" data-toggle="tooltip" data-placement="top" title="Introduction to WebAssembly" class="img-fluid announce-small-img-css" alt="Introduction to WebAssembly"></a>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <h6 class="card-title"><a href="https://indiaopensource.com/Open_source/introduction-to-webassembly/">Introduction to WebAssembly</a></h5>
                                            <p class="card-text">With the enhancements in technologies, new programming languages are evolving to serve better purposes and to meet the latest digital expectations. WebAssembly is one such language that is relatively new and came into existence to meet the high demands of technology with the simplest and fastest approach. The sole purpose of this language is to provide a better web experience to users.</p>
                                            <p class="card-text"><small class="text-muted"><strong>Kamal  -</strong>  February 14,2021</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-top custome-card pt-4">
                                <div class="row g-0">
                                    <div class="col-md-2">
                                        <a href="https://indiaopensource.com/Open_source/python-profilier-libraries/"><img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/Python-Profilier-Libraries.jpg" data-toggle="tooltip" data-placement="top" title="Python Profilier Libraries" class="img-fluid announce-small-img-css" alt="Python Profilier Libraries"></a>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <h6 class="card-title"><a href="https://indiaopensource.com/Open_source/python-profilier-libraries/">Python Profilier Libraries</a></h5>
                                            <p class="card-text">Python is known for its speed. The 1 lac plus libraries make it easier for developers to deploy codes and save programming time by reusing them. When software is developed, the main focus is given to improving user experience along with security assured, and one of the ways to enhance user experience is by making the software run faster with the least loading time, hence programmers constantly work towards creating smaller and simpler codes that can run fast.</p>
                                            <p class="card-text"><small class="text-muted"><strong>Rohit  -</strong>  February 14,2021</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-top custome-card pt-4">
                                <div class="row g-0">
                                    <div class="col-md-2">
                                        <a href="https://indiaopensource.com/Open_source/hypervisor-the-backbone-of-virtualization/"><img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/Hypervisor-The-backbone-of-Virtualization-1.jpg" data-toggle="tooltip" data-placement="top" title="Hypervisor: The backbone of Virtualization" class="img-fluid announce-small-img-css" alt="Hypervisor: The backbone of Virtualization"></a>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <h6 class="card-title"><a href="https://indiaopensource.com/Open_source/hypervisor-the-backbone-of-virtualization/">Hypervisor: The backbone of Virtualization</a></h5>
                                            <p class="card-text">Virtualization employs software to establish an abstraction layer over the computer hardware to divide the hardware components of a single computer—processors, memory, storage, and more—into several virtual computers, also known as virtual machines (VMs).</p>
                                            <p class="card-text"><small class="text-muted"><strong>Aman  -</strong>  February 14,2021</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-inline-block float-end">
                        <div class="col-md-12 mb-5">
                            <div class="col-lg-12 col-md-12 google-adds">
                                <a href="https://www.click2cloud.com/innovation-factory.php" target="_blank">
                                <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/Click2Cloud-Technology-Services-India-Private-Limited-Innovation-Factory.png" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12 pt-2 mt-5">
                            <h5 class="techno-css mb-4">Technology Update</h5>
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="card border-bottom custome-card right-techno-css py-3">
                                            <div class="row g-0">
                                                <div class="col-md-3">
                                                    <a href="https://indiaopensource.com/Open_source/what-to-expect-from-jdk-19/"><img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/What-to-expect-from-JDK-19-2023.jpg" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022" class="img-fluid" alt="..."></a>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <span><strong><a href="https://indiaopensource.com/Open_source/what-to-expect-from-jdk-19/">What to expect from JDK 19?</a></strong></span>
                                                        <p class="card-text">Java Development Kit is soon to generally avail the JDK-19 download and they have recently announced the seventh ...</p>
                                                        <p class="card-text"><small class="text-muted"><strong>Abbinaya Kumar  -</strong>  December 14,2021</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-bottom custome-card right-techno-css py-3">
                                            <div class="row g-0">
                                                <div class="col-md-3">
                                                    <a href="https://indiaopensource.com/Open_source/rise-of-rust/"><img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/Rust_programming_language_black_logo.jpg" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022" class="img-fluid" alt="..."></a>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <span><strong><a href="https://indiaopensource.com/Open_source/rise-of-rust/">Rise of Rust</a></strong></span>
                                                        <p class="card-text">Rust programming language is a relatively new language gaining popularity in recent years. The language is so ...</p>
                                                        <p class="card-text"><small class="text-muted"><strong>Chameli  -</strong>  March 14, 2020</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-bottom custome-card right-techno-css py-3">
                                            <div class="row g-0">
                                                <div class="col-md-3">
                                                    <a href="https://indiaopensource.com/Open_source/googles-new-spatial-awareness-technology/"><img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/Googles-New-Spatial-Awareness.jpg" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022" class="img-fluid" alt="..."></a>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <span><strong><a href="https://indiaopensource.com/Open_source/googles-new-spatial-awareness-technology/">Google’s New Spatial Awareness Technology</a></strong></span>
                                                        <p class="card-text">Some recent announcements have led through how google is going to advance its technology for better comfort and user ...</p>
                                                        <p class="card-text"><small class="text-muted"><strong>Kamal  -</strong>  March 25, 2019</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-bottom custome-card right-techno-css py-3">
                                            <div class="row g-0">
                                                <div class="col-md-3">
                                                    <a href="https://indiaopensource.com/Open_source/what-microsoft-azure-has-brought-to-table/"><img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/Microsoft.jpg" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022" class="img-fluid" alt="..."></a>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <span><strong><a href="https://indiaopensource.com/Open_source/what-microsoft-azure-has-brought-to-table/">What Microsoft Azure has brought to the table?</a></strong></span>
                                                        <p class="card-text">Microsoft Azure cloud is one of the leading cloud service providers with its innovative and collaborative ideas. Azure ...</p>
                                                        <p class="card-text"><small class="text-muted"><strong>Subhash  -</strong>  March 25, 2019</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-bottom custome-card right-techno-css py-3">
                                            <div class="row g-0">
                                                <div class="col-md-3">
                                                    <a href="https://indiaopensource.com/Open_source/now-deploy-the-new-erp-solution-within-3-months/"><img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/ERP-Solutions.jpg" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022" class="img-fluid" alt="..."></a>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <span><strong><a href="https://indiaopensource.com/Open_source/now-deploy-the-new-erp-solution-within-3-months/">Now deploy the new ERP solution within 3 months</a></strong></span>
                                                        <p class="card-text">Global Shop Solution CEO Chris Pinair has announced a new implementation towards the ERP systems claiming to ...</p>
                                                        <p class="card-text"><small class="text-muted"><strong>Patil  -</strong>  April 25, 2019</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>

    <!-- Check Out -->
    <section class="mb-3">
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
    
    <!-- Newsletter -->
    <section class="mb-3 bg-light newsletter-w">
        <div class="container">
            <div class="row py-5 g-2">
                <div class="col-md-10 d-inline-block mx-auto newsletter">
                    <div class="card text-center">
                        <div class="card-header">
                            <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                        </div>
                        <div class="card-body mx-auto col-md-10">
                            <p class="card-text">Newletter for Inside Open Source India. Be the First to see the new cover of the Open Source India and get our most compelling stories delivered straight to your inbox</p>
                            <div class="newsletter-signup-btn">
                                <a href="javascript:void(0);" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022">Sign Up for Our Newsletter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- New Technology -->
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
                                <div class="carousel-item active">
                                    <div class="col-md-10 card announces">
                                        <div class="new-post position-absolute px-3 py-1">New</div>
                                        <div class="col-lg-12 col-md-8">
                                            <a href="https://indiaopensource.com/Open_source/i-dont-care-for-the-economy-elon-musk/"><img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/Elon-Musk-Twitter-1.jpg" data-toggle="tooltip" data-placement="top" title="“I don’t care for the economy” – Elon Musk" class="img-fluid announce-img-css"></a>
                                        </div>
                                        <div class="col-md-12 my-2">
                                            <!-- <h5 class="card-title">Card title</h5> -->
                                            <p class="card-text"><a href="https://indiaopensource.com/Open_source/i-dont-care-for-the-economy-elon-musk/">“I don’t care for the economy” - Elon Musk</a></p>
                                            <span>Elon Musk was interviewed by Chris Anderso, the head of TED where he talked about Twitter, Tesla, and other things. Elon Musk answered why he bought the platform and how he wants Twitter ...</span>
                                            <p class="card-text">Abdul Hafiz  -  <span>December 11, 2021<span></p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-mid-10 mt-3">
                            <div class="col-md-5 d-inline-block">
                                <div class="py-2 h6 fw-bold">New Beginners</div>
                                <div class="col-md-10 card announce">
                                    <div class="col-lg-12 col-md-8">
                                        <a href="https://indiaopensource.com/Open_source/evolution-of-cloud-computing-with-metaverse/"><img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/metaverse.png" data-toggle="tooltip" data-placement="top" title="Evolution of Cloud computing with Metaverse" class="img-fluid new-beginners-img"></a>
                                    </div>
                                </div>
                                <div class="col-md-10 my-4">
                                    <span><strong><a href="https://indiaopensource.com/Open_source/evolution-of-cloud-computing-with-metaverse/">Evolution of Cloud computing with Metaverse</a></strong></span>
                                    <p>New technologies have their effects on the entire technical industries ...</p>
                                    <a type="button" class="btn btn-labeled btn-default" href="https://indiaopensource.com/Open_source/evolution-of-cloud-computing-with-metaverse/">
                                    <span class="btn-label d-inline-block">Read More<i class="fa fa-newspaper-o"></i></span></a>
                                </div>
                            </div>
                            <div class="col-md-5 d-inline-block">
                                    <div class="py-2 h6 fw-bold">Experts Beginners</div>
                                    <div class="col-md-10 card announce">
                                        <div class="col-lg-12 col-md-8">
                                            <a href="https://indiaopensource.com/Open_source/lexus-to-launch-its-first-battery-electric-vehicle-rz-450e/"><img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/Lexus-RZ-teasers-3.webp" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022" class="img-fluid new-beginners-img"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-10 my-4">
                                        <span><strong><a href="https://indiaopensource.com/Open_source/lexus-to-launch-its-first-battery-electric-vehicle-rz-450e/">Lexus to launch its first Battery Electric Vehicle RZ 450e</a></strong></span>
                                        <p>New technologies have their effects on the entire technical industries ...</p>
                                        <a type="button" class="btn btn-labeled btn-default" href="https://indiaopensource.com/Open_source/lexus-to-launch-its-first-battery-electric-vehicle-rz-450e/">
                                        <span class="btn-label d-inline-block">Read More<i class="fa fa-newspaper-o"></i></span></a>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="card border-top custome-card pt-4">
                                <div class="row g-0">
                                    <div class="col-md-2">
                                    <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/iOS-15.5-03.webp" data-toggle="tooltip" data-placement="top" title="Apple released iOS 15.5" class="img-fluid announce-small-img-css" alt="...">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <h6 class="card-title">Apple released iOS 15.5</h5>
                                            <p class="card-text">On Monday, May 16, 2022, Apple released a new software update for iPhones. The latest release of iOS is the extended version of iOS ... </p>
                                            <p class="card-text"><small class="text-muted"><strong>Satish  -</strong>  October 4, 2021</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="card border-top border-bottom custome-card pt-4">
                                <div class="row g-0">
                                    <div class="col-md-2">
                                    <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/iPhone-14-pill-hole-punch-1.webp" data-toggle="tooltip" data-placement="top" title="What to expect from iPhone 14?" class="img-fluid announce-small-img-css" alt="...">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <h6 class="card-title">What to expect from iPhone 14?</h5>
                                            <p class="card-text">Keeping up with the tradition, Apple is about to launch the new addition to their iPhones, iPhone 14 and iPhone 14 Pro. The iPh ...</p>
                                            <p class="card-text"><small class="text-muted"><strong>Malay  -</strong>  December 14, 2021</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-inline-block float-end">
                        <div class="col-md-12 mb-5">
                            <div class="col-lg-12 col-md-8 google-adds">
                            <a href="https://www.click2cloud.com/innovation-factory.php" target="_blank">
                                <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/Click2Cloud-Technology-Services-India-Private-Limited-Innovation-Factory.png" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12 pt-2 mt-5">
                            <h5 class="techno-css mb-4">Developer Corner</h5>
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="card border-bottom custome-card right-techno-css py-3">
                                            <div class="row g-0">
                                                <div class="col-md-3">
                                                    <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/WordPress_blue_logo.png" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022" class="img-fluid" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <p class="card-text"><span class="text-muted"><strong>Abbinaya Kumar  -</strong>  December 14, 2021</span></p>
                                                        <p class="card-text">The Programming Foundation: Towards a Better Future Database Programming in Python</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-bottom custome-card right-techno-css py-3">
                                            <div class="row g-0">
                                                <div class="col-md-3">
                                                    <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/anguler-js-logo.png" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022" class="img-fluid" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <p class="card-text"><span class="text-muted"><strong>Abbinaya Kumar  -</strong>  December 14, 2021</span></p>
                                                        <p class="card-text">The Programming Foundation: Towards a Better Future Database Programming in Python</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-bottom custome-card right-techno-css py-3">
                                            <div class="row g-0">
                                                <div class="col-md-3">
                                                    <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/Python-logo-notext.svg_.png" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022" class="img-fluid" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <p class="card-text"><span class="text-muted"><strong>Abbinaya Kumar  -</strong>  December 14, 2021</span></p>
                                                        <p class="card-text">The Programming Foundation: Towards a Better Future Database Programming in Python</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-bottom custome-card right-techno-css py-3">
                                            <div class="row g-0">
                                                <div class="col-md-3">
                                                    <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/07/nodejs-logo.png" data-toggle="tooltip" data-placement="top" title="Open Source Magazine - 2022" class="img-fluid" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <p class="card-text"><span class="text-muted"><strong>Abbinaya Kumar  -</strong>  December 14, 2021</span></p>
                                                        <p class="card-text">The Programming Foundation: Towards a Better Future Database Programming in Python</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>

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
</main>
<?php get_footer(); ?>