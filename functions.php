<?php 
/**
 * functions.php
 *
 * Constants , functions and definitions.
 */

/**
1.0 -	Constants
2.0	-	load core
3.0	-	set content width 
4.0	-	bitwali setup for default and register features
5.0	-	information of specific post
 * ----------------------------------------------------------------------------------------
 * 1.0 - Define constants.
 * ----------------------------------------------------------------------------------------
 */
define( 'THEMEROOT', get_stylesheet_directory_uri() );
define( 'ASSETS', THEMEROOT . '/assets' );
define( 'IMAGES', ASSETS . '/images' );
define( 'SCRIPTS', ASSETS . '/js' );


// define( 'FRAMEWORK', get_template_directory() . '/framework' );

/**
 * ----------------------------------------------------------------------------------------
 * 2.0 - Load the framework.
 * ----------------------------------------------------------------------------------------
 */
// require_once( FRAMEWORK . '/init.php' );


/**
 * ----------------------------------------------------------------------------------------
 * 3.0 - set the width of content
 * ----------------------------------------------------------------------------------------
 */
if ( ! isset( $content_width ) ) {
	$content_width = 800;
}


/**
 * ----------------------------------------------------------------------------------------
 * 4.0 - default and registered features
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'bitwali_setup' ) ) {
	function bitwali_setup() {
		
		$lang_dir = THEMEROOT . '/assets/languages';
		load_theme_textdomain( 'bitwali', $lang_dir );

		/**
		 * Formats of post.
		 */
		add_theme_support( 'post-formats',
			array(
				'gallery',
				'link',
				'image',
				'quote',
				'video',
				'audio'
			)
		);

		/**
		 *  support for automatic feed links.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 *  support for post thumbnails.
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Register nav menus.
		 */
		 // add_theme_support( 'menus' );
		register_nav_menus(
			array(
				'header-menu' => __( 'Header Menu', 'bitwali' ),
				
			)
		);
	}

	add_action( 'after_setup_theme', 'bitwali_setup' );
}


/**
 * ----------------------------------------------------------------------------------------
 * 5.0 - Display meta information for a specific post.
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'bitwali_post_meta' ) ) {
	function bitwali_post_meta() {
		echo '<ul class="list-inline entry-meta" ';

		if ( get_post_type() === 'post' ) {
			// If the post is sticky, mark it.
			if ( is_sticky() ) {
				echo '<li class="meta-featured-post"><i class="fa fa-thumb-tack"></i> ' . __( 'Sticky', 'bitwali' ) . ' </li>';
			}

			// Get the post author.
			/*printf(
				'<li class="meta-author  " ><a href="%1$s" rel="author"><li class="fa fa-user"></li>%2$s </a></li>',
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				get_the_author()
			);*/

			// Get the date.
			// echo '<li class="meta-date "> ' . get_the_date() . ' </li>';

			// The categories.
			// $category_list = get_the_category_list( ', ' );
			// if ( $category_list ) {
			// 	echo '<li class="meta-categories"> ' . $category_list . ' </li>';
			// }

			// The tags.
			// $tag_list = get_the_tag_list( '', ', ' );
			// if ( $tag_list ) {
			// 	echo '<li class="meta-tags"> ' . $tag_list . ' </li>';
			// }

			// Comments link.
			if ( comments_open() ) :
				echo '<li>';
				echo '<span class="meta-reply">';
				comments_popup_link( __( 'Leave a comment', 'bitwali' ), __( 'One comment so far', 'bitwali' ), __( 'View all % comments', 'bitwali' ) );
				echo '</span>';
				echo '</li>';
			endif;

			// Edit link.
			//if ( is_user_logged_in() ) {
			//	echo '<li>';
			//	edit_post_link( __( 'Edit', 'bitwali' ), '<span class="meta-edit">', '</span>' );
			//	echo '</li>';
			//}
		}//end of if ( get_post_type() === 'post' )
		echo '</ul>';
	}//end of function bitwali_post_meta()
}//End of if ( ! function_exists( 'bitwali_post_meta' ) )


/**
 * ----------------------------------------------------------------------------------------
 * 6.0 - Display navigation to the next/previous set of posts.
 * ----------------------------------------------------------------------------------------
 */
	if ( ! function_exists( 'bitwali_paging_nav' ) ) {
		function bitwali_paging_nav() { ?>
			<ul style=" list-style-type: none; ">
				<?php 
					if ( get_previous_posts_link() ) : ?>
					<li class="next" >
						  <?php previous_posts_link( __( '&larr;Newer Posts ', 'bitwali' ) ); ?>
					</li>
					<?php endif;
				 ?>
				<?php 
					if ( get_next_posts_link() ) : ?>
					<li class="previous">
						<?php next_posts_link( __( ' Older Posts &rarr;', 'bitwali' ) ); ?>
					</li>
					<?php endif;
				 ?>
			</ul> <?php
		}//function bitwali_paging_nav()
	}//if ( ! function_exists( 'bitwali_paging_nav' ) )


/**
 * ----------------------------------------------------------------------------------------
 * 7.0 - Register the widget areas.
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'bitwali_widget_init' ) ) {
	function bitwali_widget_init() {
		if ( function_exists( 'register_sidebar' ) ) {
			register_sidebar(
				array(
					'name' => __( 'Main Widget Area', 'bitwali' ),
					'id' => 'sidebar-1',
					'description' => __( 'Appears on posts and pages .', 'bitwali' ),
					'before_widget' => '<div id="%1$s" class="  widget %2$s">',
					'after_widget' => '</div> <!-- end widget -->',
					'before_title' => '<h5 class="widget-title">',
					'after_title' => '</h5>',
				)
			);

			register_sidebar(
				array(
					'name' => __( 'Right Sidebar Widget Area', 'bitwali' ),
					'id' => 'sidebar-2'	,
					'description' => __( 'Appears on the posts and pages on right side.', 'bitwali' ),
					'before_widget' => '<div id="%1$s" class="rightsidebar  widget col-sm-3 %2$s">',
					'after_widget' => '</div> <!-- end widget -->',
					'before_title' => '<h5 class="widget-title">',
					'after_title' => '</h5>',
				)
			);
		}
	}

	add_action( 'widgets_init', 'bitwali_widget_init' );
 }
/*
Similar Category hook 
*/

add_filter('the_content',function ($content){
	//Displays the numeric ID of the current post. This tag must be within The Loop. Note: This function displays the ID of the post, to return the ID use get_the_ID().
	
	if (!is_singular('post')) {
		return $content;
	}
	if ($post==='page') {
		return $content;
	}
	$postid=get_the_ID();
	$catids=array();
	$terms=get_the_terms($postid,'catigory');
	foreach ($terms as $term) {
		$catids[]=$term->cat_ID;
	}
	$loop=new WP_Query(
		array(
			'posts_per_page'=>10,
			'category__in'=>$cat,
			'orderby'=>'rand',
			'post__not_in'=>array($postid)
			)
		);
	if ($loop->have_posts()) {
		$content.='<h2 class="widget-title"> You are similar like me in categories</h2>';
		$content.='<ul> ';
		while ($loop->have_posts()) {

			$loop->the_post();
			
			$content.='<li class="entry-header" style="margin-top:2px;padding:5px;"><a href="'.get_the_permalink().'" >'.get_the_title().'</a></li> ';
		}
		$content.='</ul>';
		wp_reset_query();
	}
	
	return $content;
});

if (!function_exists('bitwali_customizer')) {

	function bitwali_customizer($wp_customize) {
		$wp_customize->add_section('bitwali_color_section',array(
			'title'=>__('Color','bitwali'),
			'description'=>'Secect a backgroud color as you like'
			));
		/*background color*/
		$wp_customize->add_setting('background_color',array(
			'default'=>'#fff',
			));
		$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize ,'background_color',array(
			'label'=>__('Controls','bitwali'),
			'section'=>'bitwali_color_section',
			'settings'=>'background_color'
			 )));
		/*link color*/
		$wp_customize->add_setting('link_color',array(
			'default'=>'#4b4b4b',
			));
		$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize ,'link_color',array(
			'label'=>__('Edit Link Control','bitwali'),
			'section'=>'bitwali_color_section',
			'settings'=>'link_color'
			 )));
		/*link background color*/
		$wp_customize->add_setting('link_background_color',array(
			'default'=>'#894387',
			));
		$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize ,'link_background_color',array(
			'label'=>__('Edit Link  Background Color ','bitwali'),
			'section'=>'bitwali_color_section',
			'settings'=>'link_background_color'
			 )));
		/*link background hovercolor*/
		$wp_customize->add_setting('link_background_hover',array(
			'default'=>'#f1f2f3',
			));
		$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize ,'link_background_hover',array(
			'label'=>__('Edit hover Color ','bitwali'),
			'section'=>'bitwali_color_section',
			'settings'=>'link_background_hover'
			 )));


	}
	function bitwali_background_color()
	{
		?>
		<style type="text/css">
			body{background-color: #<?php echo get_theme_mod('background_color');?>}
			ul.topnav li a{
				color: <?php echo get_theme_mod('link_color')?>; 
				background-color: <?php echo get_theme_mod('link_background_color')?>;
			}
			.leftmenu li:hover{
				background-color:<?php echo get_theme_mod('link_background_hover')?>;	
			}
		</style>

				<?php 
	}

	add_action('wp_head','bitwali_background_color');
	add_action('customize_register','bitwali_customizer');
}//if (!function_exists('bitwali_customizer'))

// /**
//  * ----------------------------------------------------------------------------------------
//  * 8.0 - Function that validates a field's length.
//  * ----------------------------------------------------------------------------------------
//  */
// if ( ! function_exists( 'bitwali_validate_length' ) ) {
// 	function alpha_validate_length( $fieldValue, $minLength ) {
// 		// First, remove trailing and leading whitespace
// 		return ( strlen( trim( $fieldValue ) ) > $minLength );
// 	}
// }


/**
 * ----------------------------------------------------------------------------------------
 * 9.0 - Include the generated CSS in the page header.
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'bitwali_load_wp_head' ) ) {
	function bitwali_load_wp_head() {
		// Get the logos
		// $logo = IMAGES . '/logo.png';
		// $logo_retina = IMAGES . '/logo@2x.png';

		// $logo_size = getimagesize( $logo );
		?>
		
		<!-- Logo CSS -->
		<style type="text/css">
			/*.site-logo a {
				background: transparent url( <?php //echo $logo; ?> ) 0 0 no-repeat;
				width: <?php// echo $logo_size[0] ?>px;
				height: <?php //echo $logo_size[1] ?>px;
				display: inline-block;
			}

			@media only screen and (-webkit-min-device-pixel-ratio: 1.5),
			only screen and (-moz-min-device-pixel-ratio: 1.5),
			only screen and (-o-min-device-pixel-ratio: 3/2),
			only screen and (min-device-pixel-ratio: 1.5) {
				.site-logo a {
					background: transparent url( <?php //echo $logo_retina; ?> ) 0 0 no-repeat;
					background-size: <?php //echo $logo_size[0]; ?>px <?php //echo $logo_size[1]; ?>px;
				}
			}*/
		</style>

		<?php
	}//end of function bitwali_load_wp_head()

	// add_action( 'wp_head', 'bitwali_load_wp_head' );
}//if ( ! function_exists( 'bitwali_load_wp_head' ) )

/**
 * ----------------------------------------------------------------------------------------
 * 10.0 - Load the custom scripts for the theme.
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'bitwali_scripts' ) ) {
	function bitwali_scripts() {

	
// 		// Adds support for pages with threaded comments
// 		// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
// 		// 	wp_enqueue_script( 'comment-reply' );
// 		// }

// 		// // Register scripts
// 		// wp_register_script( 'bootstrap-js', 'http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js', array( 'jquery' ), false, true );
		wp_register_script( 'biwali-scripts', SCRIPTS . '/scripts.js', array( 'jquery' ), '1.1.0', false );
// 		//die(SCRIPTS. '/scripts.js');
// // 		// // Load the custom scripts
// // 		// wp_enqueue_script( 'bootstrap-js' );
		wp_enqueue_script( 'biwali-scripts' );

		

// 		// // Load the stylesheets
		wp_enqueue_style( 'bitwali-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
		wp_enqueue_style( 'bitwali-w3', 'https://www.w3schools.com/w3css/4/w3.css' );
		// wp_enqueue_style( 'bitwali-awesome', THEMEROOT . '/css/font-awesome.min.css' );
		wp_enqueue_style( 'bitwali-main', ASSETS . '/css/main.css' );
	}//end of function bitwali_scripts()

	add_action( 'wp_enqueue_scripts', 'bitwali_scripts' );
}//end of if ( ! function_exists( 'bitwali_scripts' ) )
