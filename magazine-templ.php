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

get_header(); ?>
<main>
    <!-- Top breadcrumb -->
    <section class="py-1">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto magazine-w">
                    <div class="col-md-7 d-inline-block my-3">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-10">
                        <div class="col-md-12">
                            <h4 class="py-1"><strong>Open Source Magazines</strong></h4>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <!-- Archives Search -->
    <section class="py-lg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-10 my-3 border archive-search fw-bold mx-auto">
                    <div class="col-md-2 d-inline-block themed-grid-col">
                        <div class="col-md-10 d-inline-block ms-3 py-2">
                            <div class="col-md-4 d-inline-block">
                                2021 &nbsp;<img src="<?php bloginfo('template_directory'); ?>/img/Shape1.png" class="archive-year">
                            </div>
                            <div class="col-md-5 d-inline-block ms-3">
                                Month &nbsp;<img src="<?php bloginfo('template_directory'); ?>/img/Shape1.png" class="archive-year">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 d-inline-block themed-grid-col">
                        <div class="col-12 d-inline-block ms-3">
                            <div class="col-0 d-inline-block">
                                <img src="<?php bloginfo('template_directory'); ?>/img/ic_left-1.png">
                            </div>
                            <div class="col-11 d-inline-block">
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group-item"><a href="javascript:void(0);">Tech Announcements</a></li>
                                    <li class="list-group-item"><a href="javascript:void(0);">Developer</a></li>
                                    <li class="list-group-item"><a href="javascript:void(0);">Data center</a></li>
                                    <li class="list-group-item"><a href="javascript:void(0);">CEOs Thought</a></li>
                                    <li class="list-group-item"><a href="javascript:void(0);">Community</a></li>
                                </ul>
                            </div>
                            <div class="col-0 d-inline-block">
                                <img src="<?php bloginfo('template_directory'); ?>/img/ic_left 3.png">
                            </div>
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
                        <div class="col-lg-12 col-md-8">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                    <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/0Open-Source-Magazine-Page.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/01Open-Source-Magazine-Page.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/Open-Source-Magazine-Page.png" class="d-block w-100" alt="...">
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
                    <div class="col-md-4 d-inline-block float-end magazine-scroll">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4 p-3">
                                    <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/Open-Source-Magazine-Page-Mask-2.png" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p class="card-text"><small class="text-muted">Dec 27, 2021    Edition No. 100</small></p>
                                        <h5 class="card-title">Developers & Fans of Open Source, However, coming across the right web development team </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4 p-3">
                                    <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/Open-Source-Magazine-Page-Mask-2.png" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p class="card-text"><small class="text-muted">Dec 27, 2021    Edition No. 100</small></p>
                                        <h5 class="card-title">Developers & Fans of Open Source, However, coming across the right web development team </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4 p-3">
                                    <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/Open-Source-Magazine-Page-Mask-2.png" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p class="card-text"><small class="text-muted">Dec 27, 2021    Edition No. 100</small></p>
                                        <h5 class="card-title">Developers & Fans of Open Source, However, coming across the right web development team </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4 p-3">
                                    <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/Open-Source-Magazine-Page-Mask-2.png" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p class="card-text"><small class="text-muted">Dec 27, 2021    Edition No. 100</small></p>
                                        <h5 class="card-title">Developers & Fans of Open Source, However, coming across the right web development team </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4 p-3">
                                    <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/Open-Source-Magazine-Page-Mask-2.png" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p class="card-text"><small class="text-muted">Dec 27, 2021    Edition No. 100</small></p>
                                        <h5 class="card-title">Developers & Fans of Open Source, However, coming across the right web development team </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4 p-3">
                                    <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/Open-Source-Magazine-Page-Mask-2.png" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p class="card-text"><small class="text-muted">Dec 27, 2021    Edition No. 100</small></p>
                                        <h5 class="card-title">Developers & Fans of Open Source, However, coming across the right web development team </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4 p-3">
                                    <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/Open-Source-Magazine-Page-Mask-2.png" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p class="card-text"><small class="text-muted">Dec 27, 2021    Edition No. 100</small></p>
                                        <h5 class="card-title">Developers & Fans of Open Source, However, coming across the right web development team </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4 p-3">
                                    <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/Open-Source-Magazine-Page-Mask-2.png" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p class="card-text"><small class="text-muted">Dec 27, 2021    Edition No. 100</small></p>
                                        <h5 class="card-title">Developers & Fans of Open Source, However, coming across the right web development team </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4 p-3">
                                    <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/Open-Source-Magazine-Page-Mask-2.png" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p class="card-text"><small class="text-muted">Dec 27, 2021    Edition No. 100</small></p>
                                        <h5 class="card-title">Developers & Fans of Open Source, However, coming across the right web development team </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4 p-3">
                                    <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/Open-Source-Magazine-Page-Mask-2.png" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p class="card-text"><small class="text-muted">Dec 27, 2021    Edition No. 100</small></p>
                                        <h5 class="card-title">Developers & Fans of Open Source, However, coming across the right web development team </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>

    <!-- Magazine Thought -->
    

    <!-- New Technology -->
    <section class="mb-0">
        <div class="container">
            <div class="row py-5 g-2">
                <div class="col-md-10 d-inline-block mx-auto lederthought-w">
                    <div class="col-md-12 d-inline-block">
                        <h4 class="mt-4 magazines"><span>Web Developers</span> and Development Companies 2021, Leading Top Web Development Companies for Your Assistance</h4>
                        <h5 class="card-text magazines-post-meta">Open Source India    <span>|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dec 27, 2021</span></h5>
                    </div>
                </div>
            </div>
            <div class="row py-1 g-2">
                <div class="col-md-12 d-inline-block mx-auto lederthought-w border-top py-5">
                    <div class="col-md-12 d-inline-block">
                        <h4 class="magazine-h4">Our team of technical experts has carried out in-depth software development market research and studied the existing top web development companies to get an idea of the overall performance</h4>
                        <p class="magazine-p">
                            When you run a business in the modern era, the presence of a well-structured, feature-rich, and interactive website is of utmost importance. However, coming across the right web development team in such a competitive era can be a challenging task. This is wherein the role of experienced tech experts comes into play. To get you the right team to work for you, we perform an in-depth search of the best-in-class team of leading web developers and top web development companies for your project.
                        </p>
                    </div>
                    <div class="magazine-img-view">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <img src="https://indiaopensource.com/Open_source/wp-content/uploads/2022/06/cheerful-programmer.png" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5 class="card-title txt-red">Web developers and top web development companies for your project.</h5>
                                        <h5 class="card-title txt-black">The unique requirements of your web development project.</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 d-inline-block py-3">
                        <p class="magazine-p">When you run a business in the modern era, the presence of a well-structured, feature-rich, and interactive website is of utmost importance. However, coming across the right web development team in such a competitive era can be a challenging task. This is wherein the role of experienced tech experts comes into play. To get you the right team to work for you, we perform an in-depth search of the best-in-class team of leading web developers and top web development companies for your project.</p>

                        <p class="magazine-p">Top Developers has drawn up an integrated list of hundreds of experienced web developers & companies that could cater to the unique project requirements. The list of top-class web development companies that we provide is based on an in-depth analysis of the services provided by the respective firms. Moreover, we also take into consideration the respective customer reviews, ratings, total experience, and the number of projects handled.</p>
                    </div>
                    <div class="col-md-12 d-inline-block border-top py-3">
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

    <!-- Check Out -->
    <section class="mb-5">
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
</main>
<?php get_footer(); ?>
