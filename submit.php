<?php
    /* Template Name: Submit */
    get_header()
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1 class="text-center mt4 mb4 wrapper">
        Join designers from all over the world.<br/>
        Contribute your icons to Icon Yard.
    </h1>

    <main role="main" class="wrapper max-width mt4 mb4">

        <section>
            <form method="post" action="<?php echo get_template_directory_uri(); ?>/submission.php" enctype="multipart/form-data">

                <div class="text-center mt4 mb4">
                    <a href="#" class="svg-upload b pt2 pb2 pl4 pr4">Upload SVG file <input type="file" name="icon-file" required aria-required="true"></a>
                    <p class="svg-name mt3"></p>
                </div>

                <input type="text" name="icon-name" placeholder="Icon name*" required aria-required="true">
                <p>What object does the icon symbolize?</p>

                <input type="text" name="name" placeholder="Your name*" class="mt3" required aria-required="true" pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" title="First Last">
                <p>So we can give you credit.</p>

                <input type="email" name="email" placeholder="Your email*" class="mt3" required aria-required="true">
                <p>Just in case we have questions.</p>

                <input type="url" name="url" placeholder="Personal website or URL" class="mt3" required aria-required="true">
                <p>We’ll link your name to this URL.</p>

                <input type="text" name="tags" placeholder="Icon tag suggestions" class="mt3" required aria-required="true">
                <p>Used for search. What terms describe this icon? </p>

                <div class="mt4">
                    <div class="checkbox display-inline-block mr2">
                        <input type="checkbox" value="creator" id="creator" name="check" required aria-required="true">
                        <label for="creator"></label>
                    </div>
                    I am the original creator of this work.
                </div>

                <div class="mt3">
                    <div class="checkbox display-inline-block mr2">
                        <input type="checkbox" value="cc0" id="cc0" name="check" required aria-required="true">
                        <label for="cc0"></label>
                    </div>
                    I agree to release this work under CC0.
                </div>

                <div class="mt4">
                    <input type="submit" value="Submit &rarr;">
                </div>

            </form>
        </secction>

    </main>

<?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer() ?>