<?php
/**
 * The template for displaying all single posts.
 *
 * @package Underscores_theme
 */

get_header(); ?>
	<!--<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">-->  
            <div class="row">
                <div class="col-md-3">
                    <div class="row toc">
                        <div class="scrollspy" id="myScrollspy">
                            <ul class="nav nav-tabs nav-stacked affix visible-lg-block visible-md-block" data-spy="affix" id="nav" data-offset-top="134">
                                <?php if( dynamic_sidebar( 'toc_widget' ) ) : else : endif; ?>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-9 tutorial-content">
                    <div class="tutorial-ad-box hidden-xs">
                        <p>Advertisement 468x60</p>
                    </div>     
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', 'single' ); ?>

                 <?php the_post_navigation(); ?>

			<?/*php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?*/>

		<?php endwhile; // end of the loop. ?>
            </div>
        </div>
		<!--</main><!-- #main -->
	<!--</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
