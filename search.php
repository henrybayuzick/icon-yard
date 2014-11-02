<?php
    /* Template Name: Search */
    get_header()
?>


    <h1 class="text-center mt4 mb4 wrapper"><?php $found = $wp_query->found_posts; echo $found; ?> result<?php if (!$found==1) { echo 's'; } ?> for "<?php echo get_search_query(); ?>"</h1>

    <section class="bt bb">
    	<form role="search" method="get" action="<?php echo home_url( '/search/category/' ); ?>" class="wrapper mt3 mb3">
    		<input class="search" type="search" value="<?php echo get_search_query() ?>" name="s" placeholder="Search for an icon" autofocus="autofocus">
    		<input type="submit" style="position: absolute; left: -9999px; width: 1px; height: 1px;"/>
    	</form>
    </section>

    <main role="main" class="wrapper mb4">

        <?php $my_query = new WP_Query(  'posts_per_page=-1&s=' . $_GET['s']  );
        if( $my_query->have_posts() ) :

            while( $my_query->have_posts() ) : $my_query->the_post(); ?>

                <?php if (get_field('svg_code')) { ?>
            		<div class="grid">
            			<div class="col-1-4 icon text-center mt4">
            				<?php the_field('svg_code'); ?>
            				<p><a href="#">Download</a><br/>By <a href="<?php the_field('author_url'); ?>"><?php the_field('author_name'); ?></a></p>
            			</div>
            		</div>
                <?php } ?>

        <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, we couldn\'t find that.' ); ?></p>
        <?php endif; ?>
    </main>

<?php get_footer() ?>