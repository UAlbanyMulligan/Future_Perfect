<?php
/**
 * Template Name: News
 *
 */

get_header(); ?>

<div id="main">

	

		<?php
				query_posts('category_name=featured');
				while (have_posts()) : the_post(); ?>

					<div class="row featured-post medium-uncollapse large-collapse" data-equalizer>
							<div class="small-12 large-5 columns" data-equalizer-watch>
								
									<?php the_post_thumbnail(); ?>
								
							</div>

							<div class="small-12 large-7 columns featured-post-text" data-equalizer-watch>
							  <div class="the-text">
							  		<p class="date"> <?php the_date(); ?></p>
									<h3><?php the_title();?></h3>
									<p><?php the_content();?></p>
								</div>
							  
							</div>


						</div>
		<?php endwhile;?>


		<div class="row small-up-1 medium-up-2 large-up-3 uncategorized-post">
		<?php
				query_posts('category_name=uncategorized');
				while (have_posts()) : the_post(); ?>

					
							<div class="column post-card">
									<?php the_post_thumbnail(); ?>
									<h3><?php the_title();?></h3>
									<p><?php the_excerpt();?></p>
							</div>


						
		<?php endwhile;?>
		</div>


<div class="row small-up-1 medium-up-3 large-up-4 external-post grid js-masonry" data-masonry-options='{ "itemSelector": ".grid-item",}'>

		<?php
				query_posts('category_name=external');
				while (have_posts()) : the_post(); ?>

					
							<div class="column external-card grid-item">
									
									<h4><?php the_content();?></h4>
									
							</div>


						
		<?php endwhile;?></div>

</div>

<?php get_footer();
