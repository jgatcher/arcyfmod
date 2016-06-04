<?php get_header(); ?>


    <div class="full-page-header header-image ">
        <div class="motto">
            <div class="title-sub-lowercase">striving unto</div>
            <div class="title-uppercase">PERFECTION</div>
        </div>
    </div>


    <div class="main">
        <div class="section text-center">
            <div class="container">
                <?php
                        $page = new WP_Query('pagename=front');
                        $page->the_post();
                    ?>
                    <h4><?php the_content(); ?></h4>
            </div>

        </div>
        <!--section-->
    </div>
    <div class="main">
        <div id="sermon" class="section section-scroll-to ">
            <div class="container tim-container text-center">

                <div class="tim-title">
                    <h2>Latest Sermon</h2>
                </div>

                <div class="">
                    <?php 

                    $args1 = array(
                    'post_type' => 'wpfc_sermon',
                        'posts_per_page'=>1,
                        'meta_key'=>'sermon_date',
                    'orderby'=>'meta_value_datetime',
                    'order'=>'desc',
                    
                );
                $my_query = new WP_Query( $args1 );
						while ( $my_query->have_posts() ) : ?>
                        <div class="embed-responsive embed-responsive-16by9 col-md-10 col-md-offset-1">
                            <?php $my_query->the_post();$data=get_post_meta($post->ID,'sermon_video','true');
                                
                                    echo $data;
                                ?>
                        </div>
                        <div class="row" style="padding-bottom:60px">
                            <div class="col-md-2 col-md-offset-5">
                                <a href="<?php the_permalink()?>">
                                    <?php the_title()?>
                                </a>
                            </div>
                        </div>

                        <?php endwhile; ?>

                </div>

                <!-- end buttons div -->

            </div>
        </div>
    </div>

    <!-- end wrapper -->

    <!-- </div> -->
    <div class="main">
        <div id="how" class="section section-dark-blue ">
            <div class="container">
                <div class="row ">
                    <!--                        <div class="featured-holder">-->
                    <div class="col-md-4 ">
                        <div class="featured front-box">
                            <div class="front-box-img">
                                <?php 

                    $args2 = array(
                        'posts_per_page'=>1,
                         'post_type'=>array('events','wpfc_sermon','post'), 'tax_query'=>array(array('taxonomy'=>'category','terms'=>'featured','field'=>'slug'))
                    
                );
                $my_query = new WP_Query( $args2 );
						while ( $my_query->have_posts() ) : ?>

                                    <?php $my_query->the_post();
                                
                                  echo "<a class='text-center' href='".get_permalink()."'>".get_the_post_thumbnail(get_the_ID(),'medium',array('class'=>'center-block img-responsive'))."</a>";
                            
                                ?>
                                        <div class="box-text">
                                            <?php echo get_the_title()?>
                                        </div>
                                        <div class="more-btn btn btn-warning"> More </div>
                                        <?php endwhile; ?>
                            </div>
                        </div>
                        <div class="front-box-text text-center"></div>
                    </div>

                    <!--                        </div>-->
                    <div class="col-md-4 ">

                        <span class="hoverable"><span>hover</span></span>
                        <div class="front-box-img">
                            <?php 

                    $args3 = array(
                        'posts_per_page'=>1,
                        'post_type'=>'events','order'=>'desc',
                        'tax_query'=>array(array('taxonomy'=>'category','terms'=>'featured','field'=>'slug','operator'=>'NOT IN'))
                    
                );
                $my_query = new WP_Query( $args3 );
						while ( $my_query->have_posts() ) : ?>

                                <?php $my_query->the_post();
                                
                                   echo "<a class='text-center' href='".get_permalink()."'>".get_the_post_thumbnail(get_the_ID(),'medium',array('class'=>'center-block img-responsive'))."</a>";
                                ?>
                                    <div class="box-text">
                                        <?php echo get_the_title()?>
                                    </div>
                                    <div class="more-btn btn btn-warning"> Upcoming Event</div>


                                    <?php endwhile; ?>
                        </div>
                        <div class="front-box-text text-center"> </div>

                    </div>
                    <div class="col-md-4 ">
                        <div class="front-box-img">
                            <?php 

                    $args4 = array(
                        'posts_per_page'=>1,
                        'order'=>'desc','tax_query'=>array(array('taxonomy'=>'category','terms'=>'featured','field'=>'slug','operator'=>'NOT IN'))
                    
                );
                $my_query = new WP_Query( $args4 );
						while ( $my_query->have_posts() ) : ?>

                                <?php $my_query->the_post();
                                 echo "<a class='text-center' href='".get_permalink()."'>".get_the_post_thumbnail(get_the_ID(),'medium',array('class'=>'center-block img-responsive'))."</a>";
                                ?>
<div class="box-text"><?php echo get_the_title()?></div>
                            <div class="more-btn btn btn-warning"> Latest Post </div>


                                    <?php endwhile; ?>
                        </div>
                        <div class="front-box-text text-center">
                            
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="main">
        <div id="info-box" class="section section-with-space">
            <div class="container tim-container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-2">
                                <div id="editorial">
                                    <span class="box-heading">April  @ Ridge</span>
                                    <div class="box-body">
                                        Philippians 3:14 - I press toward the mark for the prize of the high calling of God in Christ Jesus. Join us this month as we look into what it takes to strive unto perfection. What really goes into striving? Can you and I strive as we need to? What kind of commitment does it take? Get answers to these questions and more... Topics treated at service will include 'The Simple Things' and other related topics. For fellowship we will have more discussions on God's purpose for striving in our lives and our monthly School of the Spirit at the end of the month.
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-2">
                                <div id="week-card">
                                    <div id="editorial">
                                        <span class="box-heading">Weekly Meetings</span>
                                        <div class="box-body">
                                            <div class="front">
                                                Monday : Prayer Meeting 630-730 MPH
                                                <br> Wednesday : Anaviosi 630-730 Main Auditorium
                                                <br> Saturday: Music + Drama Ministries
                                                <br> Sunday Morning : Youth Service 10-12 MPH
                                                <br> Sunday Morning : Adult Service 10-12 Main Auditorium
                                                <br> Sunday Afternoon : Youth Fellowship 330-600pm MPH
                                                <br>
                                            </div>
                                            <div class="back">
                                                <h4>Area Fellowships</h4> Labone
                                                <br> Legon
                                                <br> Haatsoo
                                                <br> KLM
                                                <br>

                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--  end row -->
            </div>
        </div>
    </div>

    <?php get_footer();?>
