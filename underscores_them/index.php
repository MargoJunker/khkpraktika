<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Underscores_theme
 */

get_header(); ?>
    

        <div class="jumbotron">
                <div class="sisu col-md-7"> 
                    <h2 class="hidden-sm hidden-xs">Check out these popular tutorials</h2>
                </div>
                <div class="eelvaade col-md-5">
                    <span><a class="btn btn-primary btn-lg learn-now" href="index.html" role="button">Browse All</a></span>
            </div>
        </div>
        <div class="main-content">      
            <div class="row">
                  <?php 
                        global $query_string;
                        query_posts ('posts_per_page=12');
                        if (have_posts()) : while (have_posts()) : the_post();
                    ?>
                  <div class="main-table-items col-sm-6 col-md-4" onclick="location.href='<?php the_permalink(); ?>';" style="cursor: pointer;">
                      <div class="main-table-item-box">
                          <img src="https://d1cg27r99kkbpq.cloudfront.net/static/icon/43-19-minutes-with-ansible-part-1-4-icon.png" alt="" style="height:150px; width:200px margin:0 auto;" class="tutorial-img img-responsive hidden-xs">
                          <h3 class="main-table-item-h3"><?php the_title(); ?></h3>
                          <p><?php the_excerpt();?></p>
                      </div>
                  </div>
                  <?php endwhile;
                        else :
                            echo '<p>No content found</p>';
                        endif; ?>
            </div>
	    <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php/* if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php /*while ( have_posts() ) : the_post(); ?>                      
                            <?php
                                /* Include the Post-Format-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                 */
                                /*get_template_part( 'content', get_post_format() );
                            ?>

                    <?php /*endwhile; ?>

                    <?php the_posts_navigation(); ?>

                <?php else : ?>

                    <?php get_template_part( 'content', 'none' ); ?>

                <?php endif; */?>
       
		  </main><!-- #main -->
	   </div><!-- #primary -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>