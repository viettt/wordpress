<?php get_header() ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">

                    <?php while ( have_posts() ) : the_post() ?>

                        <?php get_template_part( 'content', 'single' ) ?>

                        <?php upbootwp_content_nav( 'nav-below' ) ?>

                        <?php
                            if ( comments_open() || '0' != get_comments_number() )
                                comments_template()
                        ?>

                    <?php endwhile ?>

                    </main>
                </div>
            </div>

            <div class="col-md-4">
                <?php get_sidebar() ?>
            </div>
        </div>
    </div>
<?php get_footer() ?>
