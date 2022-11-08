<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>
<?php
if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
  wpcf7_enqueue_scripts();
}
 
if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
  wpcf7_enqueue_styles();
} ?>
<!-- <div class="modal fade bs-example-modal-lg" id="modalVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<img src="<?php echo get_template_directory_uri(); ?>/custom/js/skins/default/lightbox-close.png" alt="close">
	</button>
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<?php the_field('home_video');?>
			</div>
		</div>
	</div>
</div> -->
<!-- Modal -->
<div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        	<span class="icon icon-close"></span>
        </button>
      </div>
      <div class="modal-body">
      	<?php if(get_field('home_video')): ?> <?php endif; $images = array( 'post_type' => 'post-gallery', 'posts_per_page' => -1, 'order' => 'ASC' ); if (!empty($images)): $gallery = new WP_Query($images); if ($gallery->have_posts()): ?>

			<div id="carouselGalleryfull" class="carousel slide" data-ride="carousel" data-interval="false">
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			  	<?php
			  		$i = 0;
			  		while ( $gallery->have_posts() ) : $gallery->the_post();

			  	?>	
	    		<div class="item <?= ($i == 0) ? 'active' : ''; ?>">
	    			<img src="<?php the_post_thumbnail_url() ?>">
			    </div>
				<?php $i++; endwhile; ?>
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carouselGalleryfull" data-slide="prev">
			    <img src="<?= get_template_directory_uri(); ?>/custom/images/arrow-black.png" alt="prev">
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carouselGalleryfull" data-slide="next">
			    <img src="<?= get_template_directory_uri(); ?>/custom/images/arrow-black.png" alt="next">
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		<?php endif; wp_reset_postdata(); endif; ?>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Begin Web-Stat code v 7.0 -->
<span id="wts1919513"></span>
<script>var wts=document.createElement('script');wts.async=true;
wts.src='https://wts.one/log7.js';document.head.appendChild(wts);
wts.onload = function(){ wtslog7(1919513,3); };
</script><noscript><a href="https://www.web-stat.com">
<img src="https://wts.one/7/3/1919513.png" 
alt="Web-Stat traffic analysis"></a></noscript>
<!-- End Web-Stat code v 7.0 -->

<!-- #content -->
<?php wp_footer(); ?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js'></script>
<script type="text/javascript">
	(function(window, document, $) {
	    'use strict';
	    var D = $(document);

	    D.ready(function() {
	        $('#videoHome').bind('contextmenu',function() { return false; });
	       $('.html5lightbox').click(function() {
	    		$(this).parent().parent().parent().parent().addClass("pausevideo");
	    		$('.pausevideo').each(function(){
	    		    $(this).find('#videoHome').prop('muted', true);
	    		});
	    	});
	    });

	})(window, document, jQuery);
</script>

<script>
// scroll and menu
$(function() {
    $('.menu li:first-child').find('a').addClass('active');
    
    $(window).on('scroll',function(){
        var WindowTop = $(window).scrollTop();
        $('section').each(function(i){
            if(WindowTop > $(this).offset().top - 50 && 
               WindowTop < $(this).offset().top + $(this).outerHeight(true)
              ){
                $('.menu > li > a').removeClass('active');
                $('.menu li').eq(i).find('a').addClass('active');
            } 
        });
    });
//       $('a[href*=#]:not([href=#])').click(function() {
//     	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
//     	  var target = $(this.hash);
//     	  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
//     	  if (target.length) {
//     		$('html,body').animate({
//     		  scrollTop: target.offset().top
//     		}, 1000);
//     		return false;
//     	  }
//     	}
//       });
    
});
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
     $(document).ready( function() {   
    
        // filter items on button click
        $('.filter-button-group').on( 'click', 'li', function() {
          var filterValue = $(this).attr('data-filter');
          $('.grid').isotope({ filter: filterValue });
          $('.filter-button-group li').removeClass('active');
          $(this).addClass('active');
        });
        
        // filter items on button click
        $('.isotope-pager').on( 'click', 'a', function() {
          var filterValue = $(this).attr('data-page');
        
          $('.isotope-pager a').removeClass('active');
          $(this).addClass('active');
        });
        

        $(".cover-grid h3").hover(
            function () {
                $(this).parent('.cover-grid').addClass('hover');
            }, 
            function () {
                $(this).parent('.cover-grid').removeClass('hover');
            }
        );
    });

</script>


</body>
</html>
