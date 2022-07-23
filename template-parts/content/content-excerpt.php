<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>
	<div class="col-md-4 blog-grid-css">
		<div class="col-md-12 card announce">
			<!-- <div class="new-post position-absolute px-3 py-1">New Open Source</div> -->
			<div class="col-lg-12 col-md-8">
				<?php the_post_thumbnail( 'full', array('class' => 'img-fluid interview-img') ); ?>
			</div>
		</div>
		<div class="col-md-12 my-4">
			<div class="">		
				
				<span><?php the_title( sprintf( '<h2 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?></span>				
				<div class="card-text card-text-blog"><?php get_template_part( 'template-parts/excerpt/excerpt', get_post_format() ); ?></div>
				<p class="card-text"><small><strong><?php echo ucfirst(get_the_author()); ?></strong>  -  <?php echo get_the_date(); ?></small></p>
			</div>
			<a class="btn btn-labeled btn-default" href="<?php echo get_permalink( $post->ID ); ?>">
			<span class="btn-label d-inline-block mt-3">Read More<i class="fa fa-newspaper-o"></i></span></a>
		</div>
	</div>						

	<?php //get_template_part( 'template-parts/header/excerpt-header', get_post_format() ); ?>

	<!--<div class="entry-content">
		<?php //get_template_part( 'template-parts/excerpt/excerpt', get_post_format() ); ?>
	</div> .entry-content -->

	<!--<footer class="entry-footer default-max-width">
		<?php //twenty_twenty_one_entry_meta_footer(); ?>
	</footer> .entry-footer -->
