<?php
/**
 * Twenty Nineteen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

/**
 * Twenty Nineteen only works in WordPress 4.7 or later.
 */

remove_action('wp_head', 'description');

if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

if ( ! function_exists( 'twentynineteen_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function twentynineteen_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Nineteen, use a find and replace
		 * to change 'twentynineteen' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'twentynineteen', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'twentynineteen' ),
				'footer' => __( 'Footer Menu', 'twentynineteen' ),
				'social' => __( 'Social Links Menu', 'twentynineteen' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'twentynineteen' ),
					'shortName' => __( 'S', 'twentynineteen' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'twentynineteen' ),
					'shortName' => __( 'M', 'twentynineteen' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'twentynineteen' ),
					'shortName' => __( 'L', 'twentynineteen' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'twentynineteen' ),
					'shortName' => __( 'XL', 'twentynineteen' ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'twentynineteen' ),
					'slug'  => 'primary',
					'color' => twentynineteen_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 33 ),
				),
				array(
					'name'  => __( 'Secondary', 'twentynineteen' ),
					'slug'  => 'secondary',
					'color' => twentynineteen_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 23 ),
				),
				array(
					'name'  => __( 'Dark Gray', 'twentynineteen' ),
					'slug'  => 'dark-gray',
					'color' => '#111',
				),
				array(
					'name'  => __( 'Light Gray', 'twentynineteen' ),
					'slug'  => 'light-gray',
					'color' => '#767676',
				),
				array(
					'name'  => __( 'White', 'twentynineteen' ),
					'slug'  => 'white',
					'color' => '#FFF',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'twentynineteen_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twentynineteen_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Footer', 'twentynineteen' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'twentynineteen_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function twentynineteen_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'twentynineteen_content_width', 640 );
}
add_action( 'after_setup_theme', 'twentynineteen_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function twentynineteen_scripts() {
	//CSS
	wp_enqueue_style( 'albey_main', untrailingslashit(get_stylesheet_directory_uri()) . '/custom/main.css?'.time().'', array( 'twentynineteen-style' ), '1.0' );

	wp_enqueue_style( 'twentynineteen-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	wp_style_add_data( 'twentynineteen-style', 'rtl', 'replace' );

	if ( has_nav_menu( 'menu-1' ) ) {
		wp_enqueue_script( 'twentynineteen-priority-menu', get_theme_file_uri( '/js/priority-menu.js' ), array(), '1.1', true );
		wp_enqueue_script( 'twentynineteen-touch-navigation', get_theme_file_uri( '/js/touch-keyboard-navigation.js' ), array(), '1.1', true );
	}

	wp_enqueue_style( 'twentynineteen-print-style', get_template_directory_uri() . '/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	//from CDN 
	wp_register_script('albymangels_jquery191_js', untrailingslashit(get_stylesheet_directory_uri()) . '/custom/js/jquery.min.js?'.time().'', array('jquery'), '1.0', null, null, true);
	//internal js
	wp_register_script('albymangels_bootstrapmin_js', untrailingslashit(get_stylesheet_directory_uri()) . '/custom/js/bootstrap.min.js?'.time().'', array('jquery'), '1.0', true);
	wp_register_script('albymangels_lightbox_js', untrailingslashit(get_stylesheet_directory_uri()) . '/custom/js/html5lightbox.js?'.time().'', array('jquery'), '1.0', true);
	wp_register_script('bcSwipe_js', untrailingslashit(get_stylesheet_directory_uri()) . '/custom/js/jquery.bcSwipe.min.js?'.time().'', array('jquery'), '1.0', true);
	wp_register_script('owl_js', untrailingslashit(get_stylesheet_directory_uri()) . '/custom/js/owl.carousel.min.js?'.time().'', array('jquery'), '1.0', true);
	//custom js
	wp_register_script('albymangels_main_js', untrailingslashit(get_stylesheet_directory_uri()) . '/custom/js/main.js?'.time().'', array('jquery'), '1.0', true);

	wp_enqueue_script('albymangels_jquery191_js');
	wp_enqueue_script('albymangels_bootstrapmin_js');
	wp_enqueue_script('albymangels_lightbox_js');
	wp_enqueue_script('bcSwipe_js');
	wp_enqueue_script('owl_js');

	wp_enqueue_script('albymangels_main_js');
}
add_action( 'wp_enqueue_scripts', 'twentynineteen_scripts' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function twentynineteen_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'twentynineteen_skip_link_focus_fix' );

/**
 * Enqueue supplemental block editor styles.
 */
function twentynineteen_editor_customizer_styles() {

	wp_enqueue_style( 'twentynineteen-editor-customizer-styles', get_theme_file_uri( '/style-editor-customizer.css' ), false, '1.1', 'all' );

	if ( 'custom' === get_theme_mod( 'primary_color' ) ) {
		// Include color patterns.
		require_once get_parent_theme_file_path( '/inc/color-patterns.php' );
		wp_add_inline_style( 'twentynineteen-editor-customizer-styles', twentynineteen_custom_colors_css() );
	}
}
add_action( 'enqueue_block_editor_assets', 'twentynineteen_editor_customizer_styles' );

/**
 * Display custom color CSS in customizer and on frontend.
 */
function twentynineteen_colors_css_wrap() {

	// Only include custom colors in customizer or frontend.
	if ( ( ! is_customize_preview() && 'default' === get_theme_mod( 'primary_color', 'default' ) ) || is_admin() ) {
		return;
	}

	require_once get_parent_theme_file_path( '/inc/color-patterns.php' );

	$primary_color = 199;
	if ( 'default' !== get_theme_mod( 'primary_color', 'default' ) ) {
		$primary_color = get_theme_mod( 'primary_color_hue', 199 );
	}
	?>

	<style type="text/css" id="custom-theme-colors" <?php echo is_customize_preview() ? 'data-hue="' . absint( $primary_color ) . '"' : ''; ?>>
		<?php echo twentynineteen_custom_colors_css(); ?>
	</style>
	<?php
}
add_action( 'wp_head', 'twentynineteen_colors_css_wrap' );

/**
 * SVG Icons class.
 */
require get_template_directory() . '/classes/class-twentynineteen-svg-icons.php';

/**
 * Custom Comment Walker template.
 */
require get_template_directory() . '/classes/class-twentynineteen-walker-comment.php';

/**
 * Enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * SVG Icons related functions.
 */
require get_template_directory() . '/inc/icon-functions.php';

/**
 * Custom template tags for the theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

//Sample Videos Custom Post Type
function my_custom_post_sample_videos() {
	$labels = array(
			'name'               => _x( 'Sample Videos', 'post type general name' ),
			'singular_name'      => _x( 'Sample Videos', 'post type singular name' ),
			'add_new'            => _x( 'Add New', 'Sample Videos' ),
			'add_new_item'       => __( 'Add New Sample Videos' ),
			'edit_item'          => __( 'Edit Sample Videos' ),
			'new_item'           => __( 'New Sample Videos' ),
			'all_items'          => __( 'All Sample Videos' ),
			'view_item'          => __( 'View Sample Videos' ),
			'search_items'       => __( 'Search Sample Videos' ),
			'not_found'          => __( 'No Sample Videos found' ),
			'not_found_in_trash' => __( 'No Sample Videos found in the Trash' ),
			'parent_item_colon'  => '',
			'menu_name'          => 'Sample Videos'
	);
	$args = array(
			'labels'        => $labels,
			'description'   => 'Holds our Sample Videos data',
			'public'        => true,
			'menu_position' => 5,
			'supports'      => array( 'title', 'thumbnail' ),
			'has_archive'   => true,
	);
	register_post_type( 'post-sample-videos', $args );
}
add_action( 'init', 'my_custom_post_sample_videos' );

//Video Thumbnails
function my_custom_post_video_thumbnails() {
	$labels = array(
			'name'               => _x( 'Video Thumbnails', 'post type general name' ),
			'singular_name'      => _x( 'Video Thumbnails', 'post type singular name' ),
			'add_new'            => _x( 'Add New', 'Video Thumbnails' ),
			'add_new_item'       => __( 'Add New Video Thumbnails' ),
			'edit_item'          => __( 'Edit Video Thumbnails' ),
			'new_item'           => __( 'New Video Thumbnails' ),
			'all_items'          => __( 'All Video Thumbnails' ),
			'view_item'          => __( 'View Video Thumbnails' ),
			'search_items'       => __( 'Search Video Thumbnails' ),
			'not_found'          => __( 'No Video Thumbnails found' ),
			'not_found_in_trash' => __( 'No Video Thumbnails found in the Trash' ),
			'parent_item_colon'  => '',
			'menu_name'          => 'Video Thumbnails'
	);
	$args = array(
			'labels'        => $labels,
			'description'   => 'Holds our Video Thumbnails data',
			'public'        => true,
			'menu_position' => 5,
			'supports'      => array( 'title', 'thumbnail' ),
			'has_archive'   => true,
	);
	register_post_type( 'post-thumbnails', $args );
}
add_action( 'init', 'my_custom_post_video_thumbnails' );

//Galley Custom Post Type
function my_custom_post_gallery() {
	$labels = array(
			'name'               => _x( 'Gallery', 'post type general name' ),
			'singular_name'      => _x( 'Gallery', 'post type singular name' ),
			'add_new'            => _x( 'Add New', 'Gallery' ),
			'add_new_item'       => __( 'Add New Gallery' ),
			'edit_item'          => __( 'Edit Gallery' ),
			'new_item'           => __( 'New Gallery' ),
			'all_items'          => __( 'All Gallery' ),
			'view_item'          => __( 'View Gallery' ),
			'search_items'       => __( 'Search Gallery' ),
			'not_found'          => __( 'No Gallery found' ),
			'not_found_in_trash' => __( 'No Gallery found in the Trash' ),
			'parent_item_colon'  => '',
			'menu_name'          => 'Gallery'
	);
	$args = array(
			'labels'        => $labels,
			'description'   => 'Holds our Gallery data',
			'public'        => true,
			'menu_position' => 5,
			'supports'      => array( 'title', 'thumbnail' ),
			'has_archive'   => true,
	);
	register_post_type( 'post-gallery', $args );
}
add_action( 'init', 'my_custom_post_gallery' );




// Contact Form 7 Filter

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});

# Automatically clear autoptimizeCache if it goes beyond 256MB
// if (class_exists('autoptimizeCache')) {
//     $myMaxSize = 50000; # You may change this value to lower like 100000 for 100MB if you have limited server space
//     $statArr=autoptimizeCache::stats(); 
//     $cacheSize=round($statArr[1]/1024);
    
//     if ($cacheSize>$myMaxSize){
//       autoptimizeCache::clearall();
//       header("Refresh:0"); # Refresh the page so that autoptimize can create new cache files and it does breaks the page after clearall.
//     }
// }



/** ACF Load More Repeater */

add_action('wp_ajax_my_repeater_show_more', 'my_repeater_show_more');
add_action('wp_ajax_nopriv_my_repeater_show_more', 'my_repeater_show_more');

function my_repeater_show_more() {
	if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'my_repeater_field_nonce')) {
		exit;
	}
	if (!isset($_POST['post_id']) || !isset($_POST['offset'])) {
		return;
	}
	$show = 6; // how many more to show
	$start = $_POST['offset'];
	$end = $start+$show;
	$post_id = $_POST['post_id'];
	ob_start();
	if (have_rows('gallery', $post_id)) {
		$total = count(get_field('gallery', $post_id));
		$count = 1;
		while (have_rows('gallery', $post_id)) {
			the_row();
			if ($count < $start) {
				$count++;
				continue;
			}
			?>
			<?php $img_obj = get_sub_field( 'movie_cover' ); ?>
		   	<div class="col-md-4 col-sm-6 cover-grid" data-filter="movie-cover-<?php echo $cntr;?>-<?php echo $row;?>">
                <a class="popupimg" href="<?php the_sub_field('movie_cover'); ?>">
                    <!--<div class="cover-image bg-inline" style="background-image: url(<?php the_sub_field('movie_cover'); ?>);"></div>-->
                    <img src="<?php the_sub_field('movie_cover'); ?>">
                    <!-- <div class="overlay-hover">
                        <p><?php //the_sub_field('cover_description'); ?></p>
                    </div> -->
                </a>
                <h3><?php the_sub_field('cover_title'); ?></h3>
            </div>
		<?php 
			$count++;
			if ($count == $end) {
				break;
			}
		} // end while have rows
	} // end if have rows
	$content = ob_get_clean();
	$more = false;
	if ($total > $count) {
		$more = true;
	}
	echo json_encode(array('content' => $content, 'more' => $more, 'offset' => $end));
	exit;
} // end function my_repeater_show_more

add_action("wp_head", "gtag_manager");
function gtag_manager(){
	?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-179483694-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-179483694-1');
	</script>
	<?php
}

add_filter( ‘wpseo_metadesc’, ‘__return_false’ );
function remove_header_meta() {
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'start_post_rel_link');
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'adjacent_posts_rel_link');
}
add_action('init', 'remove_header_meta');