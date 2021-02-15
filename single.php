<?php get_header(); ?>

<div id="main" class="row">
    <div class="col-12">
        <h1><?php the_title(); ?></h1>
    </div>
    <div class="col-md-3">
        <div id="sidebar">
            <div class="meta-categories">
                Kategorie(n): <?php the_category(', '); ?>
            </div>
        </div><!-- sidebar -->
    </div>

    <div class="col-md-9">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="meta-date">
            <?php the_date('d.m.Y'); ?>
        </div>
        <div class="entry">
            <?php the_content(); ?>
        </div>
        <?php endwhile; endif; ?>
    </div>
</div><!-- main -->

<?php get_footer(); ?>