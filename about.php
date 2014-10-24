<?php
    /* Template Name: About */
    get_header()
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1 class="text-center mt4 mb4 wrapper"><?php the_field('headline'); ?></h1>

    <main role="main" class="wrapper max-width mt4 mb4">

        <?php the_content() ?>

    </main>

<?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer() ?>