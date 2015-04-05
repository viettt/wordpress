<?php get_header() ?>

    <div class="container">

        <div class="jumbotron">
            <h1>Jumbotron heading</h1>
            <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">

                    <?php if ( have_posts() ) : ?>

                        <?php while ( have_posts() ) : the_post() ?>

                            <?php get_template_part('content', get_post_format()) ?>

                        <?php endwhile ?>

                        <?php upbootwp_content_nav('nav-below') ?>

                    <?php else : ?>

                        <?php get_template_part( 'no-results', 'index' ) ?>

                    <?php endif ?>

                    </main>
                </div>
            </div>

            <div class="col-md-4">
                <?php get_sidebar() ?>
            </div>
        </div>
    </div>
<?php get_footer() ?>
