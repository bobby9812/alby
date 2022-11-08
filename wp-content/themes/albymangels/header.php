<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="https://albyphilippines.com/wp-content/uploads/2022/08/Favicon-Alby-Philippines.png" type="image/x-icon" />
    <link rel="shortcut icon" href="https://albyphilippines.com/wp-content/uploads/2022/08/Favicon-Alby-Philippines.png" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo get_bloginfo('name'); ?></title>
    
     <!-- Latest compiled and minified CSS -->
<!-- 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php wp_head(); ?>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" rel="stylesheet">
   
  </head>
  <body rel="nofollow">
  	<header class="header">
      <style type="text/css">
        .header {
          left: 0;
        }
        header ul li a {
          color: #fff;
          padding: 0 5px;
          line-height: 45px;
        }
        .menu-desktop {
          padding-left: 3em;
        }
        .menu-desktop-logo {
            max-width: 175px;
        }
        .menu--desktop {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        @media (max-width: 991px) {
          .menu-desktop-logo {
            display: none;
          }
          .header {
            background-color: transparent !important;
          }
        }
      </style>
  		<div class="container-menu">
	  		<div class="row-menu text-center">
          <div class="menu--desktop">
            <div class="menu-desktop-logo">
              <a href="<?php echo site_url(); ?>/#section-home">
                <img class="img-feat img-logo" src="<?php the_field('logo_home',7); ?>" alt="Alby Mangels">
              </a>
            </div>
            <div class="menu-desktop">
              <?php wp_nav_menu(); ?>
            </div>
          </div>
	  			<div class="col-md-12">
            <div class="menu-mobile pull-right">
                  <div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <div class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <div class="nav sidebar-nav">
                <?php
                    wp_nav_menu( array(
                        'menu' => 'Mobile Header Menu',
                        )
                    );
               ?> 
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
          <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
          </button>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
            </div>
	  			</div>
	  		</div>
	  	</div>
  	</header>