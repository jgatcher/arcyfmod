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
        <span class="title"><h3>Blog</h3></span>
    </div>



    <div class="content">
        <div class="container">
    
        <?php echo do_shortcode("[post_grid id='1785']"); ?>
        </div>

    </div>



    <?php get_footer(); ?>

