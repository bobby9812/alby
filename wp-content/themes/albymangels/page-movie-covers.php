<?php /* Template Name: Movie Cover Page */ 

get_header(); ?>
 
<div class="container container-large">
    <?php
    if( get_query_var('paged') ) {
      $page = get_query_var( 'paged' );
    } else {
      $page = 1;
    }
    
    // Variables
    $row              = 0;
    $images_per_page  = 6; // How many images to display on each page
    $images           = get_field( 'gallery' );
    $total            = count( $images );
    $pages            = ceil( $total / $images_per_page );
    $min              = ( ( $page * $images_per_page ) - $images_per_page ) + 1;
    $max              = ( $min + $images_per_page ) - 1;
    ?>
	<div class="col-md-12">
        <div class="pagination-holder">
    		<h3><?php the_field('movie_cover_title');?> </span></h3>
    		<div class="cover-pagination" >
    		<h3 style="display: inline-block;margin: 0;">Page</h3>
            <?php
              // Pagination
              echo paginate_links( array(
                'base' => get_permalink() . 'page/%#%',
                'format' => '?page=%#%',
                'current' => $page,
                'total' => $pages
                ) );
            ?>
            </div>
    	</div>
    </div>
	
    <?php
    // ACF Loop
    $cntr = 0; if( have_rows( 'gallery' ) ) : ?>
    
    <?php while( have_rows( 'gallery' ) ): the_row();
    
    $cntr++; 
    $row++;
    
    // Ignore this image if $row is lower than $min
    if($row < $min) { continue; }
    
    // Stop loop completely if $row is higher than $max
    if($row > $max) { break; } ?>                     
    
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
    
    <?php endwhile; else: ?>
    
      <h3></h3>No images found
    
    <?php endif; ?>
<!-- //footer -->
</div>	
<!-- //footer -->
<?php get_footer(); 