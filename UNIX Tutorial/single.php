<?php get_header(); ?>
           
            <div class="row">
                <!-- Table of Contents -->
                <div class="col-md-3">
                    <div class="row toc">
                        <div class="scrollspy" id="myScrollspy">
                            <ul class="nav nav-tabs nav-stacked affix visible-lg-block visible-md-block" data-spy="affix" id="nav" data-offset-top="134">
                                <?php if( dynamic_sidebar( 'toc_widget' ) ) : else : endif; ?>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Table of Contents -->
                
                <!-- Content -->
                <div class="col-md-9 tutorial-content">
                    <!-- Advertisement -->
                    <div class="tutorial-ad-box hidden-xs">
                        <p>Advertisement 468x60</p>
                    </div>     
                    <?php while ( have_posts() ) : the_post();
                    wpb_set_post_views(get_the_ID());

                    get_template_part( 'content', 'single' );

                    the_post_navigation(); ?>

                    <?php endwhile; // end of the loop. ?>
                </div>
                <!-- /Content -->
            </div>
            
<?php get_sidebar(); ?>
<?php get_footer(); ?>
