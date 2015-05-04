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
                <div class="col-md-4">
                    <div class="row">
                        <div class="inb" id="myScrollspy">
                            <ul class="nav nav-tabs nav-stacked affix visible-lg-block visible-md-block" data-spy="affix" data-offset-top="90">
                                <li><a href="#section-1">1.1 Listing files and directories</a></li>
                                <li><a href="#section-2">1.2 Making Directories</a></li>
                                <li><a href="#section-3">1.3 Changing to a different directory</a></li>
                                <li><a href="#section-4">1.4 The directories . and ..</a></li>
                                <li><a href="#section-5">1.5 Pathnames</a></li>
                                <li><a href="#section-6">1.6 More about home directories and pathnames</a></li>
                                <li><a href="#section-7">Summary</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 tutorial-content">
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
