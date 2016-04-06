<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>


    <div class="page-header ">
        <h3>Sermon</h3>
    </div>


    <div class="content">
        <div class="container">


            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 post-holder">
                        <?php the_content(); ?>
                    </div></div>
                    <?php endwhile; else: ?>
                        <p>
                            <?php _e('Sorry, no posts matched your criteria.'); ?>
                        </p>a
                        <?php endif; ?>

        </div>
    </div>


    <?php get_footer(); ?>