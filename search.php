<?php get_header(); ?>
 
   <div id="main">
      <?php if (have_posts()) : ?>
         <p class="info">Deine Suchergebnisse für <strong><?php echo $s ?></strong></p>
       
         <?php while (have_posts()) : the_post(); ?>
            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            <div class="entry">
               <?php $content = get_the_content(); echo mb_strimwidth(strip_tags($content), 0, 240, '...');?>
            </div>
            <hr>
         <?php endwhile; ?>
       
         <p class="page-nav" align="center">
            <?php next_posts_link('&laquo; weitere Einträge') ?>
            |
            <?php previous_posts_link('vorherige Einträge &raquo;') ?>
         </p>
          
      <?php else : ?>
         <h2>Leider nichts gefunden</h2>
       
      <?php endif; ?>
   </div><!-- main -->
 
<?php get_footer(); ?>