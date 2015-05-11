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
    

        <div class="row">
           <?php 
                        global $query_string;
                        query_posts ();
                        if (have_posts()) : while (have_posts()) : the_post();
                    ?>
            <div class="col-sm-12 tutorial-item-row" onclick="location.href='<?php the_permalink(); ?>';" style="cursor: pointer;">
                <div class="col-sm-4 tutorial-item-img">
                    <div class="tutorial-img img-responsive hidden-xs"><?php if ( has_post_thumbnail() ) {
	the_post_thumbnail();
                    } ?></div>
                </div>
                <div class="col-sm-8 tutorial-item-description">
                    <h2 class="tutorial-item-h2"><?php the_title(); ?></h2>
                    <p class="tutorial-item-p"><?php the_excerpt();?></p>
                </div>
            </div>
            <?php endwhile;
                        else :
                            echo '<p>No content found</p>';
                        endif; ?>
        </div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>