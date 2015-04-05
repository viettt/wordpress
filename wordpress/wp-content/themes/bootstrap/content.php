<?php?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

        <?php if ( 'post' == get_post_type() ) : ?>
        <div class="entry-meta">
            <?php upbootwp_posted_on(); ?>
        </div>
        <?php endif; ?>
    </header>

    <?php if ( is_search() || is_home() ) : ?>
    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div>
    <?php else : ?>
    <div class="entry-content">
        <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'upbootwp')); ?>
        <?php
            wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'upbootwp' ),
                'after'  => '</div>',
            ));
        ?>
    </div>
    <?php endif; ?>

    <footer class="entry-meta">
        <?php if ('post' == get_post_type()) : ?>
            <?php
                $categories_list = get_the_category_list( __( ', ', 'upbootwp' ) );
                if ( $categories_list && upbootwp_categorized_blog() ) :
            ?>
            <span class="cat-links">
                <?php printf( __( 'Posted in %1$s', 'upbootwp' ), $categories_list ); ?>
            </span>
            <?php endif ?>

            <?php
                $tags_list = get_the_tag_list( '', __( ', ', 'upbootwp' ) );
                if ( $tags_list ) :
            ?>
            <span class="tags-links">
                <?php printf( __( 'Tagged %1$s', 'upbootwp' ), $tags_list ); ?>
            </span>
            <?php endif ?>
        <?php endif ?>

        <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
        <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'upbootwp' ), __( '1 Comment', 'upbootwp' ), __( '% Comments', 'upbootwp' ) ); ?></span>
        <?php endif; ?>

        <?php edit_post_link( __( 'Edit', 'upbootwp' ), '<span class="edit-link">', '</span>' ); ?>
    </footer>
</article>
