<?php?>

    </div><!-- #content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <footer id="colophon" class="site-footer" role="contentinfo">
                    <div class="site-info">
                        <?php do_action( 'upbootwp_credits' ); ?>
                        &copy; <?php bloginfo('name'); ?> <?php the_time('Y') ?>
                        <span class="sep"> | </span>
                        <?php printf(__('Theme: %1$s by %2$s.', 'upbootwp' ), 'upBootWP', '<a href="http://upplex.de" rel="designer">upplex</a>'); ?>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
