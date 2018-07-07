<?php
/* Template Name: FilmList */

/**
  * @package unite-child
 */

get_header(); ?>

	<div id="primary" class="content-area col-sm-12 col-md-8 <?php echo of_get_option( 'site_layout' ); ?>">
		<main id="main" class="site-main" role="main">
			  <?php
				 $mypost = array( 'post_type' => 'films', );
				 $loop = new WP_Query( $mypost );
			  ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post();?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="person">
						<div class="person-header">
							<div class="person-image">
								<?php the_post_thumbnail( array( 300, 300 ) ); ?>
							</div>
							<div class="person-name"><?php the_title(); ?></div>							
						</div>
						<div class="person-content"><?php the_content(); ?></div>
					</div>
				</article>

    <?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
 <?php wp_reset_query(); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
