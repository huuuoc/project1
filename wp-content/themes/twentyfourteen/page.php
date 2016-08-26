<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
	
	
?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
				if(is_front_page()){
			?>
			<?php 
				$args_my_query = array(
					'p' => 1
				);
				
				$my_query = new WP_Query( $args_my_query );
				if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
				
					/*
					 * Nội dung hiển thị bài viết
					 */
				?>
					 <article <?php post_class() ?> >
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<summary>
							<?php the_content(); ?>
						</summary>
						<footer>
							<?php the_tags(); ?>
						</footer>
					</article>
				<?php
				endwhile; endif;
				?>
			<div class="fb-comments" data-href="http://localhost/namlimxanh2/" data-numposts="5"></div>	
			<?php }?>
		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
