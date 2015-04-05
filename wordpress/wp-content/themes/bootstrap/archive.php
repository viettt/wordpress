<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 1.1
 */

get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <section id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">

                    <?php if ( have_posts() ) : ?>

                        <header class="page-header">
                            <h1 class="page-title">
                                <?php
                                    if ( is_category() ) :
                                        single_cat_title();

                                    elseif ( is_tag() ) :
                                        single_tag_title();

                                    elseif ( is_author() ) :

                                        the_post();
                                        printf( __( 'Author: %s', 'upbootwp' ), '<span class="vcard">' . get_the_author() . '</span>' );

                                        rewind_posts();

                                    elseif ( is_day() ) :
                                        printf( __( 'Day: %s', 'upbootwp' ), '<span>' . get_the_date() . '</span>' );

                                    elseif ( is_month() ) :
                                        printf( __( 'Month: %s', 'upbootwp' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

                                    elseif ( is_year() ) :
                                        printf( __( 'Year: %s', 'upbootwp' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

                                    elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
                                        _e( 'Asides', 'upbootwp' );

                                    elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
                                        _e( 'Images', 'upbootwp');

                                    elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
                                        _e( 'Videos', 'upbootwp' );

                                    elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
                                        _e( 'Quotes', 'upbootwp' );

                                    elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
                                        _e( 'Links', 'upbootwp' );

                                    else :
                                        _e( 'Archives', 'upbootwp' );

                                    endif;
                                ?>
                            </h1>
                            <?php

                                $term_description = term_description();
                                if ( ! empty( $term_description ) ) :
                                    printf( '<div class="taxonomy-description">%s</div>', $term_description );
                                endif;
                            ?>
                        </header>

                        <?php /* Start the Loop */ ?>
                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php

                                get_template_part( 'content', get_post_format() );
                            ?>

                        <?php endwhile; ?>

                        <?php upbootwp_content_nav( 'nav-below' ); ?>

                    <?php else : ?>

                        <?php get_template_part( 'no-results', 'archive' ); ?>

                    <?php endif; ?>

                    </main>
                </section>
            </div>

            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
