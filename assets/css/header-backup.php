<section class="navbar shadow-sm">
            <div class="container-fluid align-middle">
                <div class="row">
                    <div class="col-5 col-sm-5 left-panel">
                        <a class="toggle-menu" href="#">
                            <i></i>
                            <i class="menu-line-short"></i>
                            <i></i>
                        </a>
                        <div class="menu-drawer">
                            <?php
                                wp_nav_menu( array('menu' => 'Category Menu','container'=> '','items_wrap'=>'<ul>%3$s</ul>'));
                            ?>
                        </div>
                        <div class="col-4 d-inline-block logo-company">
                            <?php the_custom_logo(); ?>
                        </div>
                    </div>
                    <div class="col-8 col-sm-6 align-middle right-panel">
                        <div class="col-12 justify-content-end align-items-center">
                            <div class="col-2 d-inline-block justify-content-end search-icon">
                                <!-- <a class="link-secondary" href="javascript:void(0);" aria-label="Search">
                                
                                    
                                </a>
                                <div class="search-field">
                                </div> -->
                                <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" for="search-input" id="search-label" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
                                    <input id="search-input" type="search" class="search-input" placeholder="Search …" value="" name="s" title="Search for:" />
                                    <input type="submit" class="search-submit" value="Search" />
                                </form>
                            </div>
                            <div class="col-2 btn btn-sm signin-css">
                                <a href="javascript:void(0);">Sign in</a>
                            </div>
                            <div class="col-2 d-inline-block subscribe">
                                <a class="btn btn-sm btn-outline-secondary subscribe-btn" href="javascript:void(0);">Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<div class="container">
<div class="row">
<div class="col">

</div>
<div class="col">

</div>
</div>
<div class="row">
<div class="col">
<div class="row">
<div class="col">

</div>
<div class="col">

</div>
</div>
</div>
<div class="col">

</div>
<div class="col">

</div>
</div>
</div>



<div class="container">
    <div class="row">
        <div class="col-6 input-group mb-3">
            <label class="input-group-text" id="basic-addon1"> Your name </label> [text* your-name class:form-control]
        </div>
        <div class="col-6 input-group mb-3">
            <label class="input-group-text" id="basic-addon1"> Your email </label> [email* your-email class:form-control]
        </div>
    </div>
  <div class="row row-cols-2">
    
    <div class="col input-group mb-3">
        <div class="row">
        <div class="col-6">
            <label class="input-group-text" id="basic-addon1"> Contact Number </label> [text* your-name class:form-control]
        </div>
        <div class="col-6">
            <label class="input-group-text" id="basic-addon1"> Company </label> [email* your-email class:form-control]
        </div>
    </div>
    </div>
    <div class="col input-group mb-3">
        <label class="input-group-text" id="basic-addon1"> Subject </label> [text* your-subject class:form-control]
    </div>
    <div class="col input-group mb-3">
        <label class="input-group-text" id="basic-addon1"> Your message (optional) </label> [textarea your-message class:form-control]
    </div>
    <div class="col input-group mb-3">
        [submit "Submit"]
    </div>
  </div>
</div>


.leaders-colom p.leaders-colom-name{
	white-space: nowrap;
  	overflow: hidden;
	text-overflow: ellipsis;
}