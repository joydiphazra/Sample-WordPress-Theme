<?php
/**
 * Twenty Fourteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link https://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

/**
 * Set up the content width value based on the theme's design.
 *
 * @see magview_content_width()
 *
 * @since Twenty Fourteen 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 474;
}

/**
 * Twenty Fourteen only works in WordPress 3.6 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '3.6', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'magview_setup' ) ) :
/**
 * Twenty Fourteen setup.
 *
 * Set up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support post thumbnails.
 *
 * @since Twenty Fourteen 1.0
 */
function magview_setup() {

	/*
	 * Make Twenty Fourteen available for translation.
	 *
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/magview
	 * If you're building a theme based on Twenty Fourteen, use a find and
	 * replace to change 'magview' to the name of your theme in all
	 * template files.
	 */
	load_theme_textdomain( 'magview' );

	// This theme styles the visual editor to resemble the theme style.
	add_editor_style( array( 'css/editor-style.css', magview_font_url(), 'genericons/genericons.css' ) );

	// Add RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// Enable support for Post Thumbnails, and declare two sizes.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 672, 372, true );
	add_image_size( 'magview-full-width', 1038, 576, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'   => __( 'Top primary menu', 'magview' ),
		'secondary' => __( 'Secondary menu in left sidebar', 'magview' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
	) );

	// This theme allows users to set a custom background.
	add_theme_support( 'custom-background', apply_filters( 'magview_custom_background_args', array(
		'default-color' => 'f5f5f5',
	) ) );

	// Add support for featured content.
	add_theme_support( 'featured-content', array(
		'featured_content_filter' => 'magview_get_featured_posts',
		'max_posts' => 6,
	) );

	// This theme uses its own gallery styles.
	add_filter( 'use_default_gallery_style', '__return_false' );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // magview_setup
add_action( 'after_setup_theme', 'magview_setup' );

/**
 * Adjust content_width value for image attachment template.
 *
 * @since Twenty Fourteen 1.0
 */
function magview_content_width() {
	if ( is_attachment() && wp_attachment_is_image() ) {
		$GLOBALS['content_width'] = 810;
	}
}
add_action( 'template_redirect', 'magview_content_width' );

/**
 * Getter function for Featured Content Plugin.
 *
 * @since Twenty Fourteen 1.0
 *
 * @return array An array of WP_Post objects.
 */
function magview_get_featured_posts() {
	/**
	 * Filter the featured posts to return in Twenty Fourteen.
	 *
	 * @since Twenty Fourteen 1.0
	 *
	 * @param array|bool $posts Array of featured posts, otherwise false.
	 */
	return apply_filters( 'magview_get_featured_posts', array() );
}

/**
 * A helper conditional function that returns a boolean value.
 *
 * @since Twenty Fourteen 1.0
 *
 * @return bool Whether there are featured posts.
 */
function magview_has_featured_posts() {
	return ! is_paged() && (bool) magview_get_featured_posts();
}

/**
 * Register three Twenty Fourteen widget areas.
 *
 * @since Twenty Fourteen 1.0
 */
function magview_widgets_init() {
	require get_template_directory() . '/inc/widgets.php';
	register_widget( 'Twenty_Fourteen_Ephemera_Widget' );

	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'magview' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Main sidebar that appears on the left.', 'magview' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Content Sidebar', 'magview' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Additional sidebar that appears on the right.', 'magview' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area', 'magview' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears in the footer section of the site.', 'magview' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Home Below Banner', 'magview' ),
		'id'            => 'home-below-banner',
		'description'   => __( 'Appears in the below banner section.', 'magview' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => __( 'Home Contact Widget', 'magview' ),
		'id'            => 'contact-widget',
		'description'   => __( 'Appears in the below Stories section.', 'magview' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
		register_sidebar( array(
		'name'          => __( 'About Us Request Demo Widget', 'magview' ),
		'id'            => 'about-request',
		'description'   => __( 'Appears in About Us page.', 'magview' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'magview_widgets_init' );

/**
 * Register Lato Google font for Twenty Fourteen.
 *
 * @since Twenty Fourteen 1.0
 *
 * @return string
 */
function magview_font_url() {
	$font_url = '';
	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Lato, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Lato font: on or off', 'magview' ) ) {
		$query_args = array(
			'family' => urlencode( 'Lato:300,400,700,900,300italic,400italic,700italic' ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);
		$font_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $font_url;
}

/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Twenty Fourteen 1.0
 */
function magview_scripts() {
	// Add Lato font, used in the main stylesheet.
	wp_enqueue_style( 'magview-lato', magview_font_url(), array(), null );

	// Add Genericons font, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.0.3' );

	// Load our main stylesheet.
	wp_enqueue_style( 'magview-style', get_stylesheet_uri() );

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'magview-ie', get_template_directory_uri() . '/css/ie.css', array( 'magview-style' ), '20131205' );
	wp_style_add_data( 'magview-ie', 'conditional', 'lt IE 9' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'magview-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20130402' );
	}

	if ( is_active_sidebar( 'sidebar-3' ) ) {
		wp_enqueue_script( 'jquery-masonry' );
	}

	if ( is_front_page() && 'slider' == get_theme_mod( 'featured_content_layout' ) ) {
		wp_enqueue_script( 'magview-slider', get_template_directory_uri() . '/js/slider.js', array( 'jquery' ), '20131205', true );
		wp_localize_script( 'magview-slider', 'featuredSliderDefaults', array(
			'prevText' => __( 'Previous', 'magview' ),
			'nextText' => __( 'Next', 'magview' )
		) );
	}

	wp_enqueue_script( 'magview-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150315', true );
}
add_action( 'wp_enqueue_scripts', 'magview_scripts' );

/**
 * Enqueue Google fonts style to admin screen for custom header display.
 *
 * @since Twenty Fourteen 1.0
 */
function magview_admin_fonts() {
	wp_enqueue_style( 'magview-lato', magview_font_url(), array(), null );
}
add_action( 'admin_print_scripts-appearance_page_custom-header', 'magview_admin_fonts' );

/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Fourteen 1.9
 *
 * @param array   $urls          URLs to print for resource hints.
 * @param string  $relation_type The relation type the URLs are printed.
 * @return array URLs to print for resource hints.
 */
function magview_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'magview-lato', 'queue' ) && 'preconnect' === $relation_type ) {
		if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '>=' ) ) {
			$urls[] = array(
				'href' => 'https://fonts.gstatic.com',
				'crossorigin',
			);
		} else {
			$urls[] = 'https://fonts.gstatic.com';
		}
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'magview_resource_hints', 10, 2 );

if ( ! function_exists( 'magview_the_attached_image' ) ) :
/**
 * Print the attached image with a link to the next attached image.
 *
 * @since Twenty Fourteen 1.0
 */
function magview_the_attached_image() {
	$post                = get_post();
	/**
	 * Filter the default Twenty Fourteen attachment size.
	 *
	 * @since Twenty Fourteen 1.0
	 *
	 * @param array $dimensions {
	 *     An array of height and width dimensions.
	 *
	 *     @type int $height Height of the image in pixels. Default 810.
	 *     @type int $width  Width of the image in pixels. Default 810.
	 * }
	 */
	$attachment_size     = apply_filters( 'magview_attachment_size', array( 810, 810 ) );
	$next_attachment_url = wp_get_attachment_url();

	/*
	 * Grab the IDs of all the image attachments in a gallery so we can get the URL
	 * of the next adjacent image in a gallery, or the first image (if we're
	 * looking at the last image in a gallery), or, in a gallery of one, just the
	 * link to that image file.
	 */
	$attachment_ids = get_posts( array(
		'post_parent'    => $post->post_parent,
		'fields'         => 'ids',
		'numberposts'    => -1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'order'          => 'ASC',
		'orderby'        => 'menu_order ID',
	) );

	// If there is more than 1 attachment in a gallery...
	if ( count( $attachment_ids ) > 1 ) {
		foreach ( $attachment_ids as $idx => $attachment_id ) {
			if ( $attachment_id == $post->ID ) {
				$next_id = $attachment_ids[ ( $idx + 1 ) % count( $attachment_ids ) ];
				break;
			}
		}

		// get the URL of the next image attachment...
		if ( $next_id ) {
			$next_attachment_url = get_attachment_link( $next_id );
		}

		// or get the URL of the first image attachment.
		else {
			$next_attachment_url = get_attachment_link( reset( $attachment_ids ) );
		}
	}

	printf( '<a href="%1$s" rel="attachment">%2$s</a>',
		esc_url( $next_attachment_url ),
		wp_get_attachment_image( $post->ID, $attachment_size )
	);
}
endif;

if ( ! function_exists( 'magview_list_authors' ) ) :
/**
 * Print a list of all site contributors who published at least one post.
 *
 * @since Twenty Fourteen 1.0
 */
function magview_list_authors() {
	$contributor_ids = get_users( array(
		'fields'  => 'ID',
		'orderby' => 'post_count',
		'order'   => 'DESC',
		'who'     => 'authors',
	) );

	foreach ( $contributor_ids as $contributor_id ) :
		$post_count = count_user_posts( $contributor_id );

		// Move on if user has not published a post (yet).
		if ( ! $post_count ) {
			continue;
		}
	?>

	<div class="contributor">
		<div class="contributor-info">
			<div class="contributor-avatar"><?php echo get_avatar( $contributor_id, 132 ); ?></div>
			<div class="contributor-summary">
				<h2 class="contributor-name"><?php echo get_the_author_meta( 'display_name', $contributor_id ); ?></h2>
				<p class="contributor-bio">
					<?php echo get_the_author_meta( 'description', $contributor_id ); ?>
				</p>
				<a class="button contributor-posts-link" href="<?php echo esc_url( get_author_posts_url( $contributor_id ) ); ?>">
					<?php printf( _n( '%d Article', '%d Articles', $post_count, 'magview' ), $post_count ); ?>
				</a>
			</div><!-- .contributor-summary -->
		</div><!-- .contributor-info -->
	</div><!-- .contributor -->

	<?php
	endforeach;
}
endif;

/**
 * Extend the default WordPress body classes.
 *
 * Adds body classes to denote:
 * 1. Single or multiple authors.
 * 2. Presence of header image except in Multisite signup and activate pages.
 * 3. Index views.
 * 4. Full-width content layout.
 * 5. Presence of footer widgets.
 * 6. Single views.
 * 7. Featured content layout.
 *
 * @since Twenty Fourteen 1.0
 *
 * @param array $classes A list of existing body class values.
 * @return array The filtered body class list.
 */
function magview_body_classes( $classes ) {
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	if ( get_header_image() ) {
		$classes[] = 'header-image';
	} elseif ( ! in_array( $GLOBALS['pagenow'], array( 'wp-activate.php', 'wp-signup.php' ) ) ) {
		$classes[] = 'masthead-fixed';
	}

	if ( is_archive() || is_search() || is_home() ) {
		$classes[] = 'list-view';
	}

	if ( ( ! is_active_sidebar( 'sidebar-2' ) )
		|| is_page_template( 'page-templates/full-width.php' )
		|| is_page_template( 'page-templates/contributors.php' )
		|| is_attachment() ) {
		$classes[] = 'full-width';
	}

	if ( is_active_sidebar( 'sidebar-3' ) ) {
		$classes[] = 'footer-widgets';
	}

	if ( is_singular() && ! is_front_page() ) {
		$classes[] = 'singular';
	}

	if ( is_front_page() && 'slider' == get_theme_mod( 'featured_content_layout' ) ) {
		$classes[] = 'slider';
	} elseif ( is_front_page() ) {
		$classes[] = 'grid';
	}

	return $classes;
}
add_filter( 'body_class', 'magview_body_classes' );

/**
 * Extend the default WordPress post classes.
 *
 * Adds a post class to denote:
 * Non-password protected page with a post thumbnail.
 *
 * @since Twenty Fourteen 1.0
 *
 * @param array $classes A list of existing post class values.
 * @return array The filtered post class list.
 */
function magview_post_classes( $classes ) {
	if ( ! post_password_required() && ! is_attachment() && has_post_thumbnail() ) {
		$classes[] = 'has-post-thumbnail';
	}

	return $classes;
}
add_filter( 'post_class', 'magview_post_classes' );

/**
 * Create a nicely formatted and more specific title element text for output
 * in head of document, based on current view.
 *
 * @since Twenty Fourteen 1.0
 *
 * @global int $paged WordPress archive pagination page count.
 * @global int $page  WordPress paginated post page count.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function magview_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	// Add a page number if necessary.
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'magview' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'magview_wp_title', 10, 2 );

// Implement Custom Header features.
require get_template_directory() . '/inc/custom-header.php';

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

// Add Customizer functionality.
require get_template_directory() . '/inc/customizer.php';

/*
 * Add Featured Content functionality.
 *
 * To overwrite in a plugin, define your own Featured_Content class on or
 * before the 'setup_theme' hook.
 */
if ( ! class_exists( 'Featured_Content' ) && 'plugins.php' !== $GLOBALS['pagenow'] ) {
	require get_template_directory() . '/inc/featured-content.php';
}

/**
 * Add an `is_customize_preview` function if it is missing.
 *
 * Enables installing Twenty Fourteen in WordPress versions before 4.0.0 when the
 * `is_customize_preview` function was introduced.
 */
if ( ! function_exists( 'is_customize_preview' ) ) :
function is_customize_preview() {
	global $wp_customize;

	return ( $wp_customize instanceof WP_Customize_Manager ) && $wp_customize->is_preview();
}
endif;

function theme_settings_page(){ 	
?>
	    <div class="wrap">
	    <h1>Theme Settings</h1>
	    <form method="post" action="options.php">
	        <?php
	            settings_fields("section");
	            do_settings_sections("theme-options");      
	            submit_button(); 
	        ?>          
	    </form>
		</div>
<?php
}

function add_theme_menu_item()
{
	add_menu_page("Theme Settings", "Theme Settings", "manage_options", "theme-settings", "theme_settings_page", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");

function display_twitter_element()
{
	?>
    	<input type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>" style="width: 50%;" />
    <?php
}

function display_facebook_element()
{
	?>
    	<input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" style="width: 50%;"/>
    <?php
}

function display_linkedin_element()
{
	?>
    	<input type="text" name="linked_url" id="linked_url" value="<?php echo get_option('linked_url'); ?>" style="width: 50%;"/>
    <?php
}

function display_youtube_element()
{
	?>
    	<input type="text" name="youtube_url" id="youtube_url" value="<?php echo get_option('youtube_url'); ?>" style="width: 50%;"/>
    <?php
}

function display_address_element()
{
	?>
	<textarea name="address" id="address" rows="5" col="40"><?php echo get_option('address'); ?></textarea>    
    <?php
}
function display_phone_element()
{
	?>
    	<input type="text" name="phone" id="phone" value="<?php echo get_option('phone'); ?>" style="width: 50%;"/>
    <?php
}
function display_email_element()
{
	?>
    	<input type="text" name="email" id="email" value="<?php echo get_option('email'); ?>" style="width: 50%;"/>
    <?php
}






function display_theme_panel_fields()
{
	add_settings_section("section", "All Settings", null, "theme-options");
	
	add_settings_field("twitter_url", "Twitter Profile Url", "display_twitter_element", "theme-options", "section");
    add_settings_field("facebook_url", "Facebook Profile Url", "display_facebook_element", "theme-options", "section");	
	add_settings_field("linked_url", "Linkedin Profile Url", "display_linkedin_element", "theme-options", "section");
	add_settings_field("youtube_url", "Youtube Profile Url", "display_youtube_element", "theme-options", "section");	
	add_settings_field("address", "Address", "display_address_element", "theme-options", "section");	
	add_settings_field("phone", "Phone", "display_phone_element", "theme-options", "section");	
	add_settings_field("email", "Email", "display_email_element", "theme-options", "section");	
	

    
    register_setting("section", "twitter_url");
    register_setting("section", "facebook_url");
	register_setting("section", "linked_url");
	register_setting("section", "youtube_url");
	register_setting("section", "address");
	register_setting("section", "phone");
	register_setting("section", "email");
}

add_action("admin_init", "display_theme_panel_fields");

function create_slider_post_type() {
	register_post_type( 'slider',
		array(
			'labels' => array(
				'name' => 'Slider',
				'singular_name' => 'Slider',
				'add_new' => 'Add New',
				'add_new_item' => 'Add New Slider',
				'edit_item' => 'Edit Slider',
				'new_item' => 'New Slider',
				'view_item' => 'View Slider',
				'search_items' => 'Search Slider',
				'not_found' =>  'Nothing Found',
				'not_found_in_trash' => 'Nothing found in the Trash',
				'parent_item_colon' => ''
			),
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			//'menu_icon' => get_stylesheet_directory_uri() . '/yourimage.png',
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title','editor','revisions','thumbnail','page-attributes')
		)
	);
}
add_action( 'init', 'create_slider_post_type' );


function create_successstories_post_type() {
	register_post_type( 'stories',
		array(
			'labels' => array(
				'name' => 'Success Stories',
				'singular_name' => 'Success Story',
				'add_new' => 'Add New',
				'add_new_item' => 'Add New Success Story',
				'edit_item' => 'Edit Success Story',
				'new_item' => 'New Success Story',
				'view_item' => 'View Success Story',
				'search_items' => 'Search Success Story',
				'not_found' =>  'Nothing Found',
				'not_found_in_trash' => 'Nothing found in the Trash',
				'parent_item_colon' => ''
			),
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			//'menu_icon' => get_stylesheet_directory_uri() . '/yourimage.png',
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title','editor','revisions','thumbnail','page-attributes')
		)
	);
}
add_action( 'init', 'create_successstories_post_type' );

function add_project_meta_boxes() {
	add_meta_box("stories_meta", "Stories Details", "add_stories_meta_box", "stories", "normal", "low");
}

function add_stories_meta_box()
{
	global $post;
	$custom = get_post_custom( $post->ID );
 
	?>
	<style>.width99 {width:99%;}</style>
	<p>
		<label>Sub Heading:</label><br />
		<input type="text" name="subhead" value="<?= @$custom["subhead"][0] ?>" class="width99" />
	</p>
	<p>
		<label>Short Description:</label><br />
		<textarea rows="5" name="sdesc" class="width99"><?= @$custom["sdesc"][0] ?></textarea>
	</p>
	<?php
}
function save_stories_custom_fields(){
  global $post;
 
  if ( $post )
  {
	update_post_meta($post->ID, "subhead", @$_POST["subhead"]);
	update_post_meta($post->ID, "sdesc", @$_POST["sdesc"]);
  }
}
add_action( 'admin_init', 'add_project_meta_boxes' );
add_action( 'save_post', 'save_stories_custom_fields' );


function create_teammember_post_type() {
	register_post_type( 'teammember',
		array(
			'labels' => array(
				'name' => 'Team Member',
				'singular_name' => 'Team Member',
				'add_new' => 'Add New',
				'add_new_item' => 'Add New Team Member',
				'edit_item' => 'Edit Team Member',
				'new_item' => 'New Team Member',
				'view_item' => 'View Team Member',
				'search_items' => 'Search Team Member',
				'not_found' =>  'Nothing Found',
				'not_found_in_trash' => 'Nothing found in the Trash',
				'parent_item_colon' => ''
			),
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			//'menu_icon' => get_stylesheet_directory_uri() . '/yourimage.png',
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title','editor','revisions','thumbnail','page-attributes')
		)
	);
}
add_action( 'init', 'create_teammember_post_type' );

function add_teammember_meta_boxes() {
	add_meta_box("teammember_meta", "Teammember Details", "add_teammember_meta_box", "teammember", "normal", "low");
}

function add_teammember_meta_box()
{
	global $post;
	$custom = get_post_custom( $post->ID );
 
	?>
	<style>.width99 {width:99%;}</style>
	<p>
		<label>Designation:</label><br />
		
		<textarea rows="3" name="designation" class="width99"><?= @$custom["designation"][0] ?></textarea>		
	</p>
	<p>
		<label>Short Bio:</label><br />
		<textarea rows="5" name="shortbio" class="width99"><?= @$custom["shortbio"][0] ?></textarea>
	</p>
	<?php
}

function save_teammember_custom_fields(){
  global $post;
 
  if ( $post )
  {
	update_post_meta($post->ID, "designation", @$_POST["designation"]);
	update_post_meta($post->ID, "shortbio", @$_POST["shortbio"]);
  }
}
add_action( 'admin_init', 'add_teammember_meta_boxes' );
add_action( 'save_post', 'save_teammember_custom_fields' );



function create_partner_post_type() {
	register_post_type( 'pwithus',
		array(
			'labels' => array(
				'name' => 'Partnering with US',
				'singular_name' => 'Partnering with US',
				'add_new' => 'Add New',
				'add_new_item' => 'Add New Section',
				'edit_item' => 'Edit Section',
				'new_item' => 'New Section',
				'view_item' => 'View Section',
				'search_items' => 'Search Section',
				'not_found' =>  'Nothing Found',
				'not_found_in_trash' => 'Nothing found in the Trash',
				'parent_item_colon' => ''
			),
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			//'menu_icon' => get_stylesheet_directory_uri() . '/yourimage.png',
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title','editor','revisions','thumbnail','page-attributes')
		)
	);
}
add_action( 'init', 'create_partner_post_type' );

function add_partner_meta_boxes() {
	add_meta_box("partner_meta", "Section Details", "add_partner_meta_box", "pwithus", "normal", "low");
}

function add_partner_meta_box()
{
	global $post;
	$custom = get_post_custom( $post->ID );
 
	?>
	<style>.width99 {width:99%;}</style>
	<p>
		<label>Button Text:</label><br />
		<input type="text" name="btext" value="<?= @$custom["btext"][0] ?>" class="width99" />		
	</p>
	<p>
		<label>Button Link:</label><br />
		<input type="text" name="blink" value="<?= @$custom["blink"][0] ?>" class="width99" />		
	</p>
	<?php
}

function save_partner_custom_fields(){
  global $post;
 
  if ( $post )
  {
	update_post_meta($post->ID, "btext", @$_POST["btext"]);
	update_post_meta($post->ID, "blink", @$_POST["blink"]);
  }
}
add_action( 'admin_init', 'add_partner_meta_boxes' );
add_action( 'save_post', 'save_partner_custom_fields' );

function new_submenu_class($menu) {    
    $menu = preg_replace('/ class="sub-menu"/','/ class="" /',$menu);        
    return $menu;      
}

add_filter('wp_nav_menu','new_submenu_class');


function create_riskmodelcasestudies_post_type() {
	register_post_type( 'rmcasestudies',
		array(
			'labels' => array(
				'name' => 'Risk Model Case Studies',
				'singular_name' => 'Risk Model Case Studies',
				'add_new' => 'Add New',
				'add_new_item' => 'Add New',
				'edit_item' => 'Edit',
				'new_item' => 'New',
				'view_item' => 'View',
				'search_items' => 'Search',
				'not_found' =>  'Nothing Found',
				'not_found_in_trash' => 'Nothing found in the Trash',
				'parent_item_colon' => ''
			),
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			//'menu_icon' => get_stylesheet_directory_uri() . '/yourimage.png',
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title','editor','revisions','thumbnail','page-attributes')
		)
	);
}
add_action( 'init', 'create_riskmodelcasestudies_post_type' );

function add_rmcasestudies_meta_boxes() {
	add_meta_box("rmcasestudies_meta", "Case Studies Short Description", "add_rmcasestudies_meta_box", "rmcasestudies", "normal", "low");
}

function add_rmcasestudies_meta_box()
{
	global $post;
	$custom = get_post_custom( $post->ID );
 
	?>
	<style>.width99 {width:99%;}</style>
	<p>
		<label>Short Description:</label><br />
		<textarea rows="5" name="shortdesc" class="width99"><?= @$custom["shortdesc"][0] ?></textarea>
	</p>
	<?php
}

function save_rmcasestudies_custom_fields(){
  global $post;
 
  if ( $post )
  {
	update_post_meta($post->ID, "shortdesc", @$_POST["shortdesc"]);
  }
}
add_action( 'admin_init', 'add_rmcasestudies_meta_boxes' );
add_action( 'save_post', 'save_rmcasestudies_custom_fields' );


function create_testimonials_post_type() {
	register_post_type( 'testi',
		array(
			'labels' => array(
				'name' => 'Testimonials',
				'singular_name' => 'Testimonials',
				'add_new' => 'Add New',
				'add_new_item' => 'Add New',
				'edit_item' => 'Edit',
				'new_item' => 'New',
				'view_item' => 'View',
				'search_items' => 'Search',
				'not_found' =>  'Nothing Found',
				'not_found_in_trash' => 'Nothing found in the Trash',
				'parent_item_colon' => ''
			),
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			//'menu_icon' => get_stylesheet_directory_uri() . '/yourimage.png',
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title','editor','revisions','thumbnail','page-attributes')
		)
	);
}
add_action( 'init', 'create_testimonials_post_type' );


function tr_create_my_taxonomy() {

    register_taxonomy(
        'testi-category',
        'testi',
        array(
            'label' => __( 'Category' ),
            'rewrite' => array( 'slug' => 'testi-category' ),
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'tr_create_my_taxonomy' );


function create_events_post_type() {
	register_post_type( 'events',
		array(
			'labels' => array(
				'name' => 'Events',
				'singular_name' => 'Events',
				'add_new' => 'Add New',
				'add_new_item' => 'Add New Event',
				'edit_item' => 'Edit Event',
				'new_item' => 'New Event',
				'view_item' => 'View Event',
				'search_items' => 'Search Event',
				'not_found' =>  'Nothing Found',
				'not_found_in_trash' => 'Nothing found in the Trash',
				'parent_item_colon' => ''
			),
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			//'menu_icon' => get_stylesheet_directory_uri() . '/yourimage.png',
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title','editor','revisions','thumbnail','page-attributes')
		)
	);
}
add_action( 'init', 'create_events_post_type' );

function add_events_meta_boxes() {
	add_meta_box("events_meta", "Event Details", "add_events_meta_box", "events", "normal", "low");
}

function add_events_meta_box()
{
	global $post;
	$custom = get_post_custom( $post->ID );
 
	?>
	<style>.width99 {width:99%;}</style>
	<p>
		<label>Who:</label><br />
		<input type="text" name="who" value="<?= @$custom["who"][0] ?>" class="width99" />
	</p>
	<p>
		<label>Where:</label><br />
		<input type="text" name="where" value="<?= @$custom["where"][0] ?>" class="width99" />
	</p>
	<p>
		<label>When Start:</label><br />
		<input type="text" name="wstart" value="<?= @$custom["wstart"][0] ?>" class="width99" />
	</p>
	<p>
		<label>When End:</label><br />
		<input type="text" name="wend" value="<?= @$custom["wend"][0] ?>" class="width99" />
	</p>
	<p>
		<label>Booth:</label><br />
		<input type="text" name="booth" value="<?= @$custom["booth"][0] ?>" class="width99" />
	</p>
	<?php
}

function save_events_custom_fields(){
  global $post;
 
  if ( $post )
  {
	update_post_meta($post->ID, "who", @$_POST["who"]);
	update_post_meta($post->ID, "where", @$_POST["where"]);
	update_post_meta($post->ID, "wstart", @$_POST["wstart"]);
	update_post_meta($post->ID, "wend", @$_POST["wend"]);
	update_post_meta($post->ID, "booth", @$_POST["booth"]);
  }
}
add_action( 'admin_init', 'add_events_meta_boxes' );
add_action( 'save_post', 'save_events_custom_fields' );



