<?php get_header(); ?>
 
   <div id="main">
       
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <h1><?php the_title(); ?></h1>
         <div class="entry">
            <?php the_content(); ?>
         </div>
      <?php endwhile; endif; ?>
          
      <?php 
         /*
          * Kommentare sind auf Seiten deaktiviert. 
          * Möchtest du die Kommentarfunktion auf Seiten aktivieren, entferne einfach die beiden "//"-Zeichen vor "comments_template();"
          */
          
         //comments_template();
      ?>
             
   </div><!-- main -->
 
<?php get_footer(); ?>