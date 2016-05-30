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


    <div style="background-size:cover;background-image:url(https://redeeminggod.com/wp-content/uploads/2013/11/what-is-the-gospel.jpg)" class="page-header ">
        <span class="title"><h3>The Gospel</h3></span>
    </div>
    


    <div class="content">
        <div class="container">


            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 post-holder">
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