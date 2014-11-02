<?php
    /* Template Name: Home */
    get_header()
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1 class="text-center mt4 mb4 wrapper"><?php the_field('lead') ?></h1>

    <section class="bt bb">
        <form role="search" method="get" action="<?php echo home_url( '/' ); ?>" class="wrapper mt3 mb3">
            <input class="search" type="search" value="<?php echo get_search_query() ?>" name="s" placeholder="Search for an icon" autofocus="autofocus">
            <input type="submit" style="position: absolute; left: -9999px; width: 1px; height: 1px;"/>
        </form>
    </section>

    <main role="main" class="wrapper mb4">

        <div class="grid">

           <?php
                if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
                elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
                else { $paged = 1; }
            ?>
            <?php $the_query = new WP_Query( 'cat=3&posts_per_page=12&paged=' . $paged  ); ?>

            <?php if ( $the_query->have_posts() ) : ?>

                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <div class="col-1-4 icon text-center mt4">
                        <?php the_field('svg_code'); ?>
                        <p><a href="#">Download</a><br/>By <a href="<?php the_field('author_url'); ?>"><?php the_field('author_name'); ?></a></p>
                    </div>

                <?php endwhile; ?>

                </div>

                <?php if (get_next_posts_link() || get_previous_posts_link()) { ?>
                    <div class="mt4 text-center">
                        <a href="#" class="previous mr2">
                            <? next_posts_link( 'Next &rarr;', $the_query->max_num_pages ); ?>
                        </a>
                        <a href="#" class="next ml2">
                           <? previous_posts_link( '&larr; Previous' ); ?>
                        </a>
                    </div>
                <?php } ?>

                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>

    </main>

<?php endwhile; else : ?>
    <p><?php _e( 'Sorry, cannot load page.' ); ?></p>
<?php endif; ?>

<?php get_footer() ?>