<?php
    /* Template Name: Search */
    get_header()
?>

    <h1 class="text-center mt4 mb4 wrapper"><?php $found = $wp_query->found_posts; echo $found; ?> result<?php if (!$found==1) { echo 's'; } ?> for "<?php echo get_search_query(); ?>"</h1>

    <section class="bt bb">
    	<form role="search" method="get" action="<?php echo home_url( '/' ); ?>" class="wrapper mt3 mb3">
    		<input class="search" type="search" value="<?php echo get_search_query() ?>" name="s" placeholder="Search for an icon" autofocus="autofocus">
    		<input type="submit" style="position: absolute; left: -9999px; width: 1px; height: 1px;"/>
    	</form>
    </section>

    <main role="main" class="wrapper mb4">

    	<?php global $query_string;

    	$query_args = explode("&", $query_string);
    	$search_query = array();

    	foreach($query_args as $key => $string) {
    		$query_split = explode("=", $string);
    		$search_query[$query_split[0]] = urldecode($query_split[1]); ?>

            <?php if (get_field('svg_code')) { ?>
        		<div class="grid">
        			<div class="col-1-4 icon text-center mt4">
        				<?php the_field('svg_code'); ?>
        				<p><a href="#">Download</a><br/>By <a href="<?php the_field('author_url'); ?>"><?php the_field('author_name'); ?></a></p>
        			</div>
        		</div>
            <?php } ?>
		<?php } ?>

		<?php $search = new WP_Query($search_query); ?>

    </main>

<?php get_footer() ?>