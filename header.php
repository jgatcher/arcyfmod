<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/paper_img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Ridge Youth</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <?php wp_head();?>
  
        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>

<body>
    
    <nav class="navbar navbar-ct-transparent navbar-fixed-top" role="navigation-demo" id="demo-navbar">
       <?php 
  // Fix menu overlap bug..
  if ( is_admin_bar_showing() ) echo '<div style="min-height: 28px;"></div>'; 
?> 
       <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?php bloginfo('wpurl')?>">
                    <div class="logo-container">
                        <div class="logo">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/paper_img/new_logo.png" alt="ARCYF">
                        </div>
                        <div class="brand">
                            Ridge Youth
                        </div>
                    </div>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navigation-example-2">
                <ul class="nav navbar-nav navbar-right">

                    <li class="page-scroll">
                        <a href="<?php bloginfo('wpurl');?>/the-gospel" class="btn btn-danger btn-simple">The Gospel</a>
                    </li>
                    <li class="page-scroll">
                        <a href="<?php bloginfo('wpurl');?>/media" class="btn btn-danger btn-simple">Media</a>
                    </li>
                    <li class="page-scroll">
                        <a href="<?php bloginfo('wpurl');?>/blog" class="btn btn-danger btn-simple">Blog</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" id="plus-button" class="dropdown-toggle btn btn-simple " data-toggle="dropdown" aria-expanded="true"><i class="fa fa-plus"></i></a>
                        
                        <!--                                  You can add classes for different colours on the next element -->
                        <ul id="navdrop" class="dropdown-menu dropdown-menu-right">
<!--                            <li class="dropdown-header">Dropdown header</li>-->
                            <li><a href="">Resources</a></li>
                            <li><a href="#">Missions</a></li>
                            <li><a href="#">Camps + Conferences </a></li>
                            <li><a href="#">Ministries</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Giving</a></li>
                        </ul>
                    </li>

<!--
                    <li>
                        <a href="#team" class="btn btn-danger btn-fill cacti-action">Connect</a>
                    </li>
-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-->
    </nav>
    
