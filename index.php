<?php get_header(); ?>

    <div class="wrapper">
        <div class="demo-header ">
            <div class="motto">
                <h1 class="title-uppercase">PERFECTION</h1>
            </div>
        </div>

        <div style="border-bottom:1px solid red" id="line"></div>
        <div class="main">
            <div class="section text-center">
                <div class="container">
                    <h4>The Ridge Church Youth Fellowship is a fellowship of Passionate Christian youth looking to IMPACT the nation and generation with the good news of Jesus Christ.Our vision is to reach out</h4>
                </div>

            </div>
            <!--section-->
        </div>
        <div class="main">
            <div id="sermon" class="section section-scroll-to">
                <div class="container tim-container text-center">

                    <div class="tim-title">
                        <h2>Latest Sermons</h2>
                    </div>

                    <div id="buttons">
                        <?php 

                    $args = array(
                    'post_type' => 'wpfc_sermon',
                        'posts_per_page'=>1,
                        'meta_key'=>'sermon_date',
                    'orderby'=>'meta_value_datetime',
                    'order'=>'desc',
                    
                );
                $my_query = new WP_Query( $args );
						while ( $my_query->have_posts() ) : ?>
                            <div class="row">
                                <div class="col-md-12">
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
                    <div class="row">
                        <div style="background-color:grey" class="col-md-4 col-md-offset-2 ">asd</div>
                        <div style="background-color:red" class="col-md-2 ">dfg</div>
                        <div style="background-color:blue" class="col-md-2 ">
                            <div class="row" style="padding-top:60px">
                                <?php 

                    $args = array(
                        'posts_per_page'=>1,
                        'order'=>'desc'
                    
                );
                $my_query = new WP_Query( $args );
						while ( $my_query->have_posts() ) : ?>
                                    <div class="col-md-3 col-offset-md-3">
                                        <?php $my_query->the_post();
                                
                                  the_post_thumbnail('medium',array('class'=>'img-circle'));
                                ?>
                                    </div>


                                    <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="team" class="section section-nude section-with-space">
                    <div class="container tim-container">
                        <div class="row">
                            <div class="container">
                                <div class="tim-title text-center">
                                    <h2>Meet the Team</h2>
                                </div>

                                <div class="row" id="modals">
                                    <div class="col-md-2 col-md-offset-1">
                                        <div class="team-player">
                                            <img src="assets/paper_img/prof.jpg" alt="Thumbnail Image" class="img-circle img-responsive">
                                            <h5>Prof. S Adei <br /><small class="text-muted">Club Advisor</small></h5>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-md-offset-1">
                                        <div class="team-player">
                                            <img src="assets/paper_img/nana.jpg" alt="Thumbnail Image" class="img-circle img-responsive">
                                            <h5>Nana Owusu-Achau <br /><small class="text-muted">President</small></h5>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-md-offset-1">
                                        <div class="team-player">
                                            <img src="assets/paper_img/felix.jpg" alt="Thumbnail Image" class="img-circle img-responsive">
                                            <h5>Felix Sintim <br /><small class="text-muted">Vice President</small></h5>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-md-offset-1">
                                        <div class="team-player">
                                            <img src="assets/paper_img/adobs.jpg" alt="Thumbnail Image" class="img-circle img-responsive">
                                            <h5>Adobea  Amissah <br /><small class="text-muted">Administrative Director</small></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-2">
                                        <div class="team-player">
                                            <img src="assets/paper_img/koomson.jpg" alt="Thumbnail Image" class="img-circle img-responsive">
                                            <h5>Daniel Koomson <br /><small class="text-muted">Accounts  Manager</small></h5>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-md-offset-1">
                                        <div class="team-player">
                                            <img src="assets/paper_img/molly.jpg" alt="Thumbnail Image" class="img-circle img-responsive">
                                            <h5>Molly Brew Hayford <br /><small class="text-muted">Fund Analyst</small></h5>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-md-offset-1">
                                        <div class="team-player">
                                            <img src="assets/paper_img/baafuor.jpg" alt="Thumbnail Image" class="img-circle img-responsive">
                                            <h5>Baafour Otu-Boateng<br /><small class="text-muted">Portfolio Manager</small></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                                <br>
                                <br>
                            </div>
                            <!--  end row -->

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php get_footer();?>