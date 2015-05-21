<?php get_header(); ?>
    
            <div class="wrapper">
                <!-- Jumbotron -->
                <div class="jumbotron">
                    <p class="visible-lg-block">Sometimes referred to as a "large leaderboard." This ad format expands to 970x415 while politely "pushing" all page elements downwards. This size is ideal to showcase High-Definition content such as videos, photos, animations, and applications. </p>
                </div>
                <!-- Main-content -->
                <div class="main-content">      
                    <div class="row main-row">
                        <!-- Main-post-grid -->
                        <?php $popularpost = new WP_Query( array( 'posts_per_page' => 12, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
                        while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>
                        <div class="main-table-items col-sm-6 col-md-4">
                            <div class="main-table-item-box" onclick="location.href='<?php the_permalink(); ?>';" style="cursor: pointer;">
                                <!-- Thumbnail -->
                                <div class="tutorial-img img-responsive">
                                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                                </div>
                                <!-- Title & Excerpt -->
                                <h3 class="main-table-item-h3"><?php the_title(); ?></h3>
                                <p><?php the_excerpt();?></p>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <!-- More -->
                        <h1 class="more-h1">That's not all!</h1>
                        <span><a class="btn btn-primary btn-lg more navbar-center" href="http://178.62.65.175/tutorials/" role="button">Browse More Tutorials</a></span>
                    </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>