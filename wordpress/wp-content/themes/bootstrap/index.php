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

                    <?php
                        $categories = get_categories();
                        foreach ($categories as $cat) {
                            $category_ids = $cat->term_id;
                            $category_num = $cat->category_count;
                            $category_link = get_category_link( $category_ids);
                            if ($category_num >=0) {
                                echo '<div><div class="title-category"><a href="'.esc_url( $category_link ).'">'.$cat->cat_name.'</a></div>';
                                $args=array('category__in' => $category_ids,'showposts'=>5);
                                $my_query = new wp_query($args);
                                echo '<ul id="post">';
                                while ($my_query->have_posts()){
                                    $my_query->the_post();
                                        echo '<li><h2><a href="'.get_permalink().'">'.get_the_title().'</h2></li>';
                                }
                                echo '</ul> </div>';
                            }
                        }?>



                    </main>
                </div>

            </div>


            <div class="col-md-4">
                <?php get_sidebar() ?>
            </div>
        </div>
    </div>
<?php get_footer() ?>
