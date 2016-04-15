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
    <?php
if( class_exists('Dynamic_Featured_Image') ) {
     global $dynamic_featured_image;
     $featured_images = $dynamic_featured_image->get_featured_images( $postId );
     
    $post_banner=$featured_images[0]['full'];
    //You can now loop through the image to display them as required
 }
global $post;
$author_id=$post->post_author;
$author=get_the_author_meta('display_name',$author_id);
$author_href= get_author_posts_url($author_id);
$author_link='<a href='.$author_href.'>'.$author.'</a>';

?>

        <div style="background-size:cover;background-image:url('<?php echo $post_banner;?>')" class="page-header ">

        </div>


        <div class="content">
            <div class="container">



                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="row">
                        <div class="post-info col-md-8 col-md-offset-2">
                            <span class="post-title"><?php echo the_title()?></span>
                            <?php if(get_post_type()!='wpfc_sermon'): ?>
                            <div class="post-meta row">
<!--
                                <div class="col-md-2 col-md-offset-2">
                                   image
                                </div>
-->
                                <div class="col-md-6 ">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <?php echo $author_link  ?> |  <?php the_time('jS F Y')?>
                                        </div>
<!--
                                        <div class="col-md-6">
                                           
                                        </div>
-->
                                    </div>
                                    <div class="row">
                                        
                                        <div> </div>
                                    </div>
                                </div>
                            </div>
                            <?php endif;?>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 post-holder">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <?php endwhile; else: ?>
                        <p>
                            <?php _e('Sorry, no posts matched your criteria.'); ?>
                        </p>a
                        <?php endif; ?>

            </div>
        </div>


        <?php get_footer(); ?>