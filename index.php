<?php get_header(); ?>
    
	<div id="main" class="row">
		<div class="post-container">	
			<h1>Neuigkeiten<?php if (get_query_var('paged') > 1){ echo '<span>Seite '.get_query_var('paged').'</span>';} ?></h1>
			<?php if (!get_query_var('paged')){ ?>
				<p>Hier ist unser Info-Blog um euch über die neuesten Aktionen und Veranstaltungen zu informieren.</p>
			<?php } ?>
		</div>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<div class="post-container row">
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="post-image col-md-3">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail(); ?>
						</a>
					</div>
				<?php endif; ?>
				<div class="col-md-<?php if ( has_post_thumbnail() ) { ?>9<?php }else{ ?>12<?php } ?>">
					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					<div class="entry">
						<?php $content = get_the_content(); echo mb_strimwidth(strip_tags($content), 0, 240, '...');?>
					</div>
					<a class="post-link" href="<?php the_permalink(); ?>">Weiterlesen...</a>
					<hr>
					<div class="meta-categories">
						Beitrag vom <?php the_date('d.m.Y'); ?> | Kategorie(n): <?php the_category(', '); ?>
					</div>
				</div>
			</div>

		<?php endwhile; ?>
			
		<p class="page-nav" align="center">
            <?php next_posts_link('&laquo; Ältere Einträge') ?>
            |
            <?php previous_posts_link('Neuere Einträge &raquo;') ?>
         </p>
				
		<?php endif; ?>
	</div>

<?php get_footer(); ?>