<?php

/* Template Name: test */

get_header(); 
?>


<div id="photo-gallery">
	<div class="row">
		<?php
		if( have_rows('gallery') ): 
			$total = count(get_field('gallery'));
			$count = 0;
			$number = 2;					
			while ( have_rows('gallery') ) : the_row(); ?>						
					 <?php $img_obj = get_sub_field( 'movie_cover' ); ?>
					    <div class="col-md-4 col-sm-6 cover-grid" data-filter="movie-cover-<?php echo $cntr;?>-<?php echo $row;?>">
					    	<a class="popupimg" href="<?php the_sub_field('movie_cover'); ?>">
					    	    <!--<div class="cover-image bg-inline" style="background-image: url(<?php the_sub_field('movie_cover'); ?>);"></div>-->
					    		<img src="<?php the_sub_field('movie_cover'); ?>">
					    		<div class="overlay-hover">
					        		<p><?php the_sub_field('cover_description'); ?></p>
					        	</div>
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
	<a id="gallery-load-more" href="javascript: my_repeater_show_more();" <?php if ($total < $count) { ?> style="display: none;"<?php } ?>><h2 id="title-bg"><span>Load more</span></h2></a>
</div>


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
				// add content to container
				// this ID must match the containter 
				// you want to append content to
				jQuery('#photo-gallery .row').append(json['content']);
				// update offset
				my_repeater_field_offset = json['offset'];
				// see if there is more, if not then hide the more link
				if (!json['more']) {
					// this ID must match the id of the show more link
					jQuery('#gallery-load-more').css('display', 'none');
				}
			},
			'json'
		);
	}
	
</script>
