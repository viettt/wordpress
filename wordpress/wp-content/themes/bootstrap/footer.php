<?php?>

    </div><!-- #content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <footer id="colophon" class="site-footer" role="contentinfo">
                    <div class="site-info">
                        <?php do_action( 'upbootwp_credits' ); ?>
                        &copy;
                        <a href="http://wordpress.thanhviet.com" rel="designer"><?php bloginfo('name') ?><?php the_time('Y') ?></a>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
