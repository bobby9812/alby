<?php

/***
** Template Name: Home
**/

get_header();
?>
	<?php if(get_field('home_video')): ?>

	<style type="text/css">
	#title-load-more-btn {
	    text-align: center;
	}
	#movie-cover{
		padding-bottom: 7em; 
	}
	#movie-cover-main {
	    float: left;
	}
	.home-trailer-links {
	    background-color: #000;
	}
	.home-trailer-links ul {
	    padding: 0;
	    margin: 0;
	    text-align: center;
	}
	section#section-home .home-trailer-links ul li {
	    display: inline-block;
	    margin-bottom: 0;
	    margin: 0 5px;
	    font-size: 15px;
	    line-height: initial;
	}
	section#section-home .home-trailer-links ul li a {
	    font-size: 15px;
	    float: none !important;
	    width: initial !important;
	    height: initial !important;
	    text-transform: uppercase;
	    font-family: brandongrotw01-lightregular;
	    display: block;
	}
	section#section-home .home-trailer-links ul li.special-offer a {
	    border: 1px solid #FF4040;
	    padding: 5px 20px;
	    border-radius: 7px;
	    position: static;
	}
	section#section-home .home-trailer-links ul li a .button-video {
	    margin: 0;
	    padding: 0;
	}
	section#section-home .home-trailer-links ul li a button span.glyphicon-play {
	    width: 30px;
	    height: 30px;
	    position: relative;
	    display: inline-block;
	    float: left;
	    color: #FF4040;
	    font-family: 'Glyphicons Halflings';
	    border: 1px solid;
	    margin-right: 5px;
	}
	section#section-home .home-trailer-links ul li a button span.glyphicon-play:before {
	    position: absolute;
	    top: 46%;
	    left: 55%;
	    -webkit-transform: translate(-50%,-50%);
	    -ms-transform: translate(-50%,-50%);
	    transform: translate(-50%,-50%);
	    font-size: 19px;
	}
	section#section-home .home-trailer-links ul li a button span {
	    font-size: 15px;
	    position: static;
	    top: 0;
	    color: #fff;
	    font-family: brandongrotw01-lightregular;
	}
	.button-sound-on {
	    position: absolute;
        bottom: 13.5%;
        right: 3.5%;
        width: 203px;
	}
	a.sound-on-off {
	    display: block;
        color: #ffca1d;
        opacity: 0;
        text-transform: uppercase;
        font-size: 24px;
        text-align: left;
    }
    .button-sound-on .sound-off {
        display: none;
    }
    .button-sound-on.mute .sound-off {
        display: block;
    }
    .button-sound-on.mute .sound-on {
        display: none;
    }
    body.is__in .sound-on-off {
        opacity: 1;
    }
    div.wpcf7 .ajax-loader {
        height: 38px;
    }
    @media (max-width: 1440px) {
        section#section-contact .company-info-holder p {
            font-size: 18px;
        }
    }
    @keyframes blink {
      0% {
        color: #fff;
      }
      100% {
        background-color: #222291;
        color: red;
      }
    }
	@media (max-width: 991px) {
      section#section-home .home-trailer-links ul li {
          font-size: 13px;
          margin-bottom: 10px;
      }
      section#section-home .home-trailer-links ul li a {
        font-size: 13px;
      }
      section#section-home .home-trailer-links ul li a button span {
        font-size: 13px;
      }
	}
	@media (max-width: 768px) {
	    .button-sound-on {
            bottom: 25%;
        }
	}
	@media (max-width: 400px) {
	    .button-sound-on {
	        display: none;
	    }
	}
		
		/* 	September 3, 2022	 */
		@media (max-width: 991px) {
			section#section-gallery #carouselGallery .carousel-inner .item a {
				height: 500px;
			}
		}
		@media screen and (max-height: 740px) {
			.vimeo-holder iframe {
				height: 600px !important;
			}
		}
		@media screen and (max-height: 700px) {
			section#section-gallery #carouselGallery .carousel-inner .item a {
				height: 400px;
			}
		}
		@media screen and (max-height: 680px) {
			.vimeo-holder iframe {
				height: 400px !important;
			}
		}
		@media screen and (max-height: 600px) {
			section#section-gallery #carouselGallery .carousel-inner .item a {
				height: 320px;
			}
			section#section-gallery #carouselGallery .carousel-inner .item a .gallery-banner {
				height: 80%;
			}
		}
		@media screen and (max-height: 400px) {
			.vimeo-holder iframe {
				height: 300px !important;
			}
			section#section-gallery {
				padding-top: 15px !important;
			}
			section#section-gallery #carouselGallery .carousel-inner .item a .gallery-banner {
				height: 75%;
			}
			.owl-carousel .owl-item .item {
				height: 67%;
			}
			section#section-gallery .col-section-title {
				margin-bottom: 15px;
			}
			section#section-gallery #carouselGallery .carousel-inner .item a {
				height: 200px;
			}
			.carousel-control .glyphicon-chevron-left, .carousel-control .glyphicon-chevron-right, .carousel-control .icon-next, .carousel-control .icon-prev {
				top: 25%;
			}
			div#html5-lightbox-box {
				width: 500px !important;
				margin-top: 40px !important;
			}
			.html5-elem-box .html5-elem-wrap {
				height: 200px !important;
				width: 400px !important;
			}
			.html5lightbox-video iframe {
				height: 200px;
			}
			.html5-nav-mask .html5-nav-list {
				width: 500px!important;
			}
			.html5-next {
				top: 50%!important;
			}
			.html5-prev {
				top: 50%!important;
			}
			section#section-legal {
				padding: 1em 4em;
				font-size: 15px !important;
			}
			section#section-legal .container-custom .content .warning-text {
				margin-bottom: 1em;
			}
			.text-center p {
				margin-bottom: 0 !important;
				font-size: 16px !important;
			}
		}
</style>
	<section id="section-home" class="page-section" style="padding: 0; position: relative;">
		<?php $video_choices = get_field('video_home_choices',7); ?>
		<?php if($video_choices == 'Vimeo') : ?>
			<div class="vimeo-holder" style="width: 100%; display: block; position: relative;">
				<iframe class="embed-player slide-media" width="100%" height="663px" src="<?php the_field('home_video_autoplay_link',7); ?>?autoplay=1&amp;loop=1&amp;rel=0&amp;title=0&amp;byline=0&amp;portrait=0&amp;muted=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen=""></iframe>
			</div>
		<?php else : ?>
	    <video controls autoplay muted controlsList="nodownload" width="100%" height="94%" style="object-fit: fill;" id="videoHome">
		  <source src="<?php the_field('hostgator_video_autoplay_link',7); ?>" type="video/mp4">
		</video>
		<?php endif; ?>
		<div class="home-trailer-links">
		    <!--<div class="button-sound-on">
		        <a onclick="toggleMute()" class="sound-on-off sound-on">Turn sound on </a>
		        <a onclick="toggleMute()" class="sound-on-off sound-off">Turn sound off</a>
		    </div>-->
		    
			<ul>
				<!--<li class="special-offer">-->
				<!--	<a href="#" class="link-video" data-toggle="modal" data-target=".bs-example-modal-sm">Special Offer</a>-->
				<!--</li>-->
				<li>
					<a href="<?php the_field('home_video',7);?>" class="html5lightbox link-video">
						<button type="button" class="btn btn-primary button-video">
							<span class="glyphicon glyphicon-play"></span>
							<span class="copy copy-play"><?php the_field('play_video_caption',7); ?></span>
						</button>
					</a>
				</li>
				<?php $row_count = 2;
		        $videos = array(
		            'post_type' => 'post-thumbnails',
		            'posts_per_page' => 2,
		            'order' => 'ASC'
		        );

		        if (!empty($videos)):
				?>
				<?php 

				  	$sample = new WP_Query($videos);

				  	if ($sample->have_posts()):
	    			$i = 1;

				  	while ( $sample->have_posts() ) : $sample->the_post(); 
		  		?>
				<li>
					<a href="https://player.vimeo.com/video/<?php the_field('embed_videos_id') ?>" data-transition="slidefade" class="html5lightbox" data-group="mygroup" title="<?php echo the_title(); ?>">
						<button type="button" class="btn btn-primary button-video">
							<span class="glyphicon glyphicon-play"></span>
							<span class="copy copy-play"><?php the_title(); ?></span>
						</button>
					</a>
				</li>
				<?php  $i++; endwhile;?>
				<?php endif; wp_reset_postdata(); ?>
				<?php endif; ?>
				<li>
					<a class="btn-contact" href="#section-contact" style="max-width: 125px;
                             margin-bottom: 0;top: -2px;">
						<img src="https://albymangels.com/wp-content/uploads/2019/09/try.jpg" alt="contact">
					</a>
				</li>
			</ul>
		</div>
		<div class="modal modal-special-offer fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
			<a href="#" class="close" data-dismiss="modal" aria-label="Close">
	  			<img alt="close-jpg" src="<?php echo get_template_directory_uri(); ?>/custom/js/skins/default/lightbox-close.png">
	  		</a>
		  <div class="modal-dialog modal-sm" role="document">
		    <div class="modal-content">
		      <?php the_field('special_offer_pop-up',7); ?>
		    </div>
		  </div>
		</div>
	</section>
	<?php 
		$pn = get_field('phone_number', 'options');
		$ph_lb = $pn['label'];
		$pn_no = $pn['number'];
		$pn_disable = $pn['disable'];
		$privacyn = get_field('privacy_notice', 'options');
		$privacyn_lb = $privacyn['label'];
		$privacyn_no = $privacyn['number'];
		$privacyn_disable = $privacyn['disable'];
 	  	$email = get_field('email', 'options');
 	  	$author = get_field('author', 'options'); 
 	  	$copyright = get_field('copyright', 'options'); 
   	?>
	<?php 
		endif; 

		$row_count = 3;

        $videos = array(
            'post_type' => 'post-sample-videos',
            'posts_per_page' => 6,
            'order' => 'ASC'
        );

        if (!empty($videos)):

	?>
		<section id="section-videos" class="clearfix page-section">
			<div class="container container-large">
			  	<div class="row row-header">
			  		<div class="col-md-2 col-section-title">
			  			<h2 class="text-uppercase" style="font-size: 29px;padding-bottom: 10px;">Sample Videos</h2>
			  		</div>
			  		<div class="col-md-10 col-section-info">
			  		    
		  			 	<?php $info = get_field('home_video_informations');
				  			if($info):
				  		?>
					  	<?php endif; ?>
					  	<span><?php the_field('video_description');?></span>
			  		</div>
			  	</div>
			  	<div class="row row-videos-info m-0 text-center">
					<!--<p><span class="text-uppercase"><?= $info['obligations']?></span></p>-->
					<!--<?= $info['broadcast']?>-->
					<!--<p class="col-supply-desktop"><span><?= $info['broadcast_versions']?></span></p>-->
				</div>

			  	<?php 

				  	$sample = new WP_Query($videos);

				  	if ($sample->have_posts()):
	    			$i = 1;

				  	while ( $sample->have_posts() ) : $sample->the_post(); 
		  		?>

				  	<?php if ($i % $row_count == 1): ?>
				  	<div class="row row-videos videos-desktop">
				  		<div class="container container-contact">
							<div class="pull-right">
								<a class="btn-contact" href="#section-contact">
									<img src="https://albymangels.com/wp-content/uploads/2019/09/try.jpg" width="142" height="38" alt="contact">
								</a>
							</div>
						</div>
			  		<?php endif; ?>
				  	<div class="image_tn col-md-4 caption-show-<?php the_field('show_video_captions') ?>">
						<a href="https://player.vimeo.com/video/<?php the_field('embed_videos') ?>" data-height="450" data-transition="slidefade" data-thumbnail="<?php the_post_thumbnail_url('medium_large') ?>" class="html5lightbox" data-group="mygroup" title="<?php echo the_title(); ?>">
							<div class="caption caption-videos text-center caption-mobile">
								<div class="copy copy-cap cap-top">
						  			<?php the_field('top_description') ?>
						  		</div>
						  		<div class="copy copy-cap cap-bottom">
						  			<?php the_field('bottom_description') ?>
						  		</div>
							</div>
							<div class="content-vid" style="background-image: url('<?php the_post_thumbnail_url('medium_large') ?>')">
								<div class="caption caption-videos text-center caption-desktop">
						  			<div class="copy copy-cap cap-top">
						  				<?php the_field('top_description') ?>
						  			</div>
						  		</div>
					  			<button type="button" class="btn btn-primary button-video html5lightbox">
				  					<span class="glyphicon glyphicon-play"></span> <span class="copy copy-play">Play Video</span>
					  			</button>
						  		<div class="caption caption-videos text-center">
						  			<div class="copy copy-cap cap-bottom">
						  				<?php the_field('bottom_description') ?>
						  			</div>
						  		</div>
							</div>
					  		<span class="vid-title text-center">
					  			<?php the_title(); ?>
					  		</span>
					  	</a>
					</div>
					
					<?php if ($i % $row_count == 0) : ?>
				  		</div>
			  		<?php endif; $i++; endwhile;?>
			  		<div class="row row-videos-mobile">
				  			<div id="carouselVideo" class="carousel slide" data-ride="carousel" data-interval="false">
							  <!-- Wrapper for slides -->
							  <div class="carousel-inner" role="listbox">
							  	<?php
							  		$i = 0;
							  		while ( $sample->have_posts() ) : $sample->the_post();

							  	?>	
					    		<div class="item <?= ($i == 0) ? 'active' : ''; ?>">
					    			<a href="https://player.vimeo.com/video/<?php the_field('embed_videos') ?>" class="html5lightbox" data-transition="slidefade" data-group="gallerygroup">
								  	    <div class="banner-bg" style="background: #000;"></div>
					    				<div class="gallery-banner" style="background-image: url('<?php the_post_thumbnail_url('medium_large') ?>')">
									    	<div class="carousel-caption">
									    		<span class="vid-title text-center">
										  			<?php the_title(); ?>
										  		</span>
										  		<button type="button" class="btn btn-primary button-video html5lightbox">
								  					<span class="glyphicon glyphicon-play"></span> <span class="copy copy-play">Play Video</span>
									  			</button>
								    		</div>
									  	</div>
								  	</a>
							    </div>
							    <?php $i++; endwhile; ?>
							  </div>

							  	
							  <!-- Indicators -->
							  <ol class="carousel-indicators">
							  	<?php
							  		$j= 0;
							  		$i= 0;
							  		while ( $sample->have_posts() ) : $sample->the_post();

						  		?>	
							    <li data-target="#carouselVideo" data-slide-to="<?= $j?>" class="<?= ($i == 0) ? 'active' : ''; ?>" ></li>
								<?php $j++;$i++; endwhile; ?>
							  </ol>
							</div>
				  		</div>
				  	<?php endif; wp_reset_postdata(); ?>
			</div>
			<div class="container container-contact contact-mobile" style="display: none;">
				<p class="col-supply-mobile"><span><?= $info['broadcast_versions']?></span></p>
				<div class="pull-right">
					<a class="btn-contact" href="#section-contact">
						<img src="https://albymangels.com/wp-content/uploads/2019/09/try.jpg" width="142" height="38" alt="contact">
					</a>
				</div>
			</div>
		</section>
	<?php endif; ?>
	
	<?php 
		$ha = get_field('home_about');
		if($ha):?>

		<section id="section-about" class="page-section">
			<div class="container container-custom">
				<div class="first-content">
					<?= $ha['first_content']; ?>
				</div>
				<div class="about-quote">
					<?= $ha['second_content']; ?>
				</div>
				<div class="third-content">
					<?= $ha['third_content']; ?>
				</div>
				<?php 
					while( have_rows('home_about') ) : the_row();
						if ( have_rows('statistics') ): while (	have_rows('statistics') ): the_row(); ?>
							<div class="about-statistics">
								<p><strong><?= get_sub_field('label'); ?></strong> - <?= get_sub_field('first_content'); ?>
							    </p><?= get_sub_field('second_content'); ?>
							</div>
				<?php endwhile; endif; endwhile;?>
				<div class="fourth-content">
					<?= $ha['fourth_content']; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>
	
	
	<?php 
		$hm = get_field('home_movies');
		if($hm):?>

		<section id="section-movies" class="page-section">
			<div class="container container-custom">
				<h2 class="text-center" style="font-size: 30px;"><?= $hm['header']?></h2>
				<div class="movie-list">
					<?= $hm['lists']?>
				</div>
			</div>
			<!--<div class="pull-right">-->
			<!--		<a class="btn-contact" href="#section-contact">-->
			<!--			<img src="https://albymangels.com/wp-content/uploads/2019/09/try.jpg" width="142" height="38" alt="contact">-->
			<!--	    </a>-->
			<!--	</div>-->
		</section>

	<?php endif; ?>
	
	<section id="section-film" class="page-section" style="min-height: 1px !important;"></section>
	
    <?php 
        if(get_field('gallery')):
    ?>
	<!-- Movie covers -->
    	<section id="section-movie-cover" class="page-section">
    		<div class="container container-large">
    	    	<div class="col-md-12">
    	            <div class="pagination-holder">
    	        		<h3><?php the_field('movie_cover_title');?> </span></h3>
    	        	</div>
    	        </div>
    	        <div id="movie-cover">
    	            <div class="row">
    	                <?php
    	                if( have_rows('gallery') ): 
    	                    $total = count(get_field('gallery'));
    	                    $count = 1;
    	                    $number = 6;                    
    	                    while ( have_rows('gallery') ) : the_row(); ?>                      
    	                             <?php $img_obj = get_sub_field( 'movie_cover' ); ?>
    	                                <div class="col-md-4 col-sm-6 cover-grid" data-filter="movie-cover-<?php echo $cntr;?>-<?php echo $row;?>">
    	                                    <a class="popupimg" href="<?php the_sub_field('movie_cover'); ?>">
    	                                        <!--<div class="cover-image bg-inline" style="background-image: url(<?php the_sub_field('movie_cover'); ?>);"></div>-->
    	                                        <img src="<?php the_sub_field('movie_cover'); ?>">
    	                                       <!--  <div class="overlay-hover">
    	                                            <p><?php //the_sub_field('cover_description'); ?></p>
    	                                        </div> -->
    	                                    </a>
    	                                    <h3><?php the_sub_field('cover_title'); ?></h3>
    	                                </div>
    	                        <?php
    	                        if ($count == $number) {
    	                            // we've shown the number, break out of loop
    	                            break;
    	                        } ?>                    
    	                    <?php $count++; endwhile;
    	                else : endif;
    	                ?>
    	            </div>
    	            <!--<h2 id="title-load-more-btn">-->
    	            <!--	<a id="gallery-load-more" href="javascript: my_repeater_show_more();" <?php if ($total < $count) { ?> style="display: none;"<?php } ?>>-->
    	            <!--		<img src="https://albymangels.com/wp-content/uploads/2020/10/load.png" alt="load-more">-->
    	            <!--	</a>-->
    	            <!--</h2>-->
    	        </div>
    	    </div>	
    	</section>
    <!-- Movie covers End -->
    <?php endif; ?>
    
    	

    <?php
		$images = array(
            'post_type' => 'post-gallery',
            'posts_per_page' => -1,
            'order' => 'ASC'
        );

        if (!empty($images)):

    	$gallery = new WP_Query($images);

    	if ($gallery->have_posts()):
	?>

	<section id="section-gallery" class="clearfix page-section">
		<div class="container container-large">
			<div class="row row-header">
		  		<div class="col-md-3 col-section-title">
		  			<h2 class="text-uppercase">Gallery</h2>
		  		</div>
		  </div>
		</div>
		<div class="container-fluid">
		  <div class="row row-gallery">
		  	<div id="carouselGallery" class="carousel slide" data-ride="carousel" data-interval="false">
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			  	<?php
			  		$i = 0;
			  		while ( $gallery->have_posts() ) : $gallery->the_post();

			  	?>	
	    		<div class="item <?= ($i == 0) ? 'active' : ''; ?>">
	    			<!-- <a href="#" data-toggle="modal" data-target="#galleryModal"> -->
	    			<!--<a href="<?php the_post_thumbnail_url() ?>" -->
				  	 <!--  class="html5lightbox"-->
				  	 <!--  data-group="gallerygroup"-->
				  	 <!--  data-transition="slidefade">-->
				  	 <a class="html5lightbox popup-disable">
				  	    <div class="banner-bg" style="background: #000;"></div>
	    				<div class="gallery-banner" style="background-image: url('<?php the_post_thumbnail_url() ?>')">
					    	<div class="caption-desktop">
					    		<div class="carousel-caption">
						    		<h2><?php the_title() ?></h2>
					    		</div>
					    	</div>
					  	</div>
					  	<div class="caption-mobile">
					  		<div class="carousel-caption">
						    	<h2><?php the_title() ?></h2>
					    	</div>
					  	</div>
				  	</a>
			    </div>
				<?php $i++; endwhile; ?>
<!-- 				<div class="container container-contact gallery-contact-desktop">
					<div class="pull-left btn-left-position">
						<a class="btn-contact" href="#section-contact">
							<img src="https://albymangels.com/wp-content/uploads/2019/09/try.jpg" width="142" height="38" alt="contact">
						</a>
					</div>
				</div> -->
			  </div>

			  	
			  <!-- Indicators -->
			 	<div class="owl-carousel owl-theme">
				  	<?php
				  		$j= 0;
				  		while ( $gallery->have_posts() ) : $gallery->the_post();
			  		?>
				    <div class="item" data-target="#carouselGallery" data-slide-to="<?= $j?>" style="background-image: url('<?php the_post_thumbnail_url('medium_large') ?>');">
				    </div>
			    	<?php $j++; endwhile; ?>
				</div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carouselGallery" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left">
			    	<img src="<?= get_template_directory_uri(); ?>/custom/images/arrow.png" alt="prev">
			    </span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carouselGallery" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right">
			    	<img src="<?= get_template_directory_uri(); ?>/custom/images/arrow.png" alt="next">
			    </span>
			    <span class="sr-only">Next</span>
			  </a>
<!-- 			  <div class="container container-contact gallery-contact-mobile">
					<div class="pull-right">
						<a class="btn-contact" href="#section-contact">
							<img src="https://albymangels.com/wp-content/uploads/2019/09/try.jpg" width="142" height="38" alt="contact">
						</a>
					</div>
				</div> -->
			</div>
		  </div>
		</div>
	</section>
	<?php endif; wp_reset_postdata(); endif; ?>
	<section id="section-contact" class="clearfix page-section">
		<div class="container container-small">
			<div class="row">
				<div class="title-mobile">
					<h5 class="text-center text-uppercase">Contact Us</h5>
					<p style="color: #162298; text-align: center; font-size: 18px;">(No designers, SEO, marketers etc)</p>
				</div>
				<div class="contact-holder">
					<h2 class="title-desktop text-center text-uppercase">Let's connect...</h2>
					<p style="color: #162298; text-align: center; font-size: 20px;"> </p>
					<p style="color: #162298; text-align: center; font-size: 20px;">Email or call us regarding any licencing, new project, distribution or other questions you may have</p>
					<!--<p style="color: #162298; text-align: center; font-size: 20px;">Note: Most 1 hour films can be split into 2 x 30 minute versions</p>-->
					<?php echo do_shortcode('[contact-form-7 id="1351" title="Wed love to hear from you .."]'); ?>
				</div>
				<div class="company-info-holder text-center">
					<p>E: <a href="mailto: <?= $email ?>"><?= $email ?></a></p>
					<p class="<?= ($pn_disable)? 'invisible': ''?>"><?php if($ph_lb){ echo $ph_lb; }?>
						<?php if($pn_no): ?>
							<a href="tel:<?= $pn_no ?>"><?= $pn_no ?> (WhatsApp / Viber)</a>
						<?php endif; ?>
					</p>
					
					<!-- <p>© <?php echo date(Y) ?> <?= $copyright ?></p> -->
				</div>
			</div>
		</div>
	</section>
	<?php
		$legal = get_field('home_legal_content');
		if($legal):
	?>
		<section id="section-legal" class="page-section">
			<div class="container container-custom">
				<div class="row">
					<div class="content">
						<div class="warning-text">
							<?= $legal ?>
						</div>
						<div class="text-center">
						    <style>
						        .copy-privacy p {
						            margin-bottom: 10px !important;
						        }
						    </style>
						    <div class="copy-privacy <?= ($privacyn_disable)? 'visible-hidden': ''?>"><?php if($privacyn_lb){ echo $privacyn_lb; }?>
        						<?php if($privacyn_no): ?>
        							<a href="tel:<?= $privacyn_no ?>"><?= $privacyn_no ?></a>
        						<?php endif; ?>
        					</div>
        					<p><?= $author ?></p>
							<!--<p><strong><?php the_field('title', 'options')?></strong></p>-->
							<p>© <?php echo date(Y) ?> <?= $copyright ?></p>
						</div>
					</div>
				</div>
			</div>
			<!--<div class="container container-custom">-->
			<!--	<a class="btn-contact pull-right" href="#section-contact">-->
			<!--		<img src="https://albymangels.com/wp-content/uploads/2019/09/try.jpg" width="142" height="38" alt="contact">-->
			<!--	</a>-->
			<!--</div>-->
		</section>
	<?php endif; ?>
	<script type="text/javascript">
		var my_repeater_field_post_id = <?php echo $post->ID; ?>;
		var my_repeater_field_offset = <?php echo $number + 1; ?>;
		var my_repeater_field_nonce = '<?php echo wp_create_nonce('my_repeater_field_nonce'); ?>';
		var my_repeater_ajax_url = '<?php echo admin_url('admin-ajax.php'); ?>';
		var my_repeater_more = true;
		
		function my_repeater_show_more() {
			// make ajax request
			jQuery.post(
				my_repeater_ajax_url, {
					// this is the AJAX action we set up in PHP
					'action': 'my_repeater_show_more',
					'post_id': my_repeater_field_post_id,
					'offset': my_repeater_field_offset,
					'nonce': my_repeater_field_nonce
				},
				function (json) {
					jQuery('#movie-cover .row').append(json['content']);
					my_repeater_field_offset = json['offset'];
					if (!json['more']) {
						jQuery('#gallery-load-more').css('display', 'none');
					}
					$('.popupimg').magnificPopup({
            type: 'image',
            mainClass: 'mfp-with-zoom', 
            gallery:{
        		enabled:true
        	},
            
            zoom: {
                enabled: true, 
                
                duration: 300, // duration of the effect, in milliseconds
                easing: 'ease-in-out', // CSS transition easing function
                
                opener: function(openerElement) {
                
                  return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            }
        });
				},
				'json'
			);
		}
		
		(function(window, document, $) {
        'use strict';
        var D = $(document),
            W = $(window);
            
    		W.load(function() { // makes sure the whole site is loaded
                $('body').addClass('is__in');
            });
            
            $('.sound-on-off').on('click', function () {
                $(this).parent().toggleClass('mute');
            });
            
		})(window, document, jQuery);
		
		var video = document.getElementById('videoHome');
        function toggleMute(){
            video.muted = !video.muted;
        }
	</script>
<?php get_footer(); ?>