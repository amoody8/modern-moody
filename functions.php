<?php 
//Register Menu
add_theme_support( 'menus' );
register_nav_menu ( 'primary', __( 'Primary') );

//Bootstrap Hover Menus
require_once( '/menu/wp_bootstrap_navwalker.php' );
		
//Register Google CDN jQuery
if (!is_admin()) add_action('wp_enqueue_scripts', 'googleCDN_jquery_enqueue', 11);
function googleCDN_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js", false, null, true);
   wp_register_script('jquery-migrate', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://code.jquery.com/jquery-migrate-1.2.1.min.js", false, null, true);
   wp_enqueue_script('jquery');
   wp_enqueue_script('jquery-migrate');
}

function am_scripts_with_jquery()
{
// Register Scripts 
	wp_register_script( 'bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), false, true );
    wp_register_script( 'old-browser', get_template_directory_uri() . '/outdatedbrowser/outdatedBrowser.min.js', array( 'jquery' ), false, true );
// Enqueue Scripts
	wp_enqueue_script( 'bootstrap-min' );
    wp_enqueue_script( 'old-browser' );
}
add_action( 'wp_enqueue_scripts' , 'am_scripts_with_jquery' );

function oldbrowser() {
?>
<script type="text/javascript">
  if ( undefined !== window.jQuery ) {
    //plugin function, place inside DOM ready function
    outdatedBrowser({
        bgColor: '#f25648',
        color: '#ffffff',
        lowerThan: 'transform',
        languagePath: '/outdatedbrowser/lang/en.html'
    })
  }
</script>
<?php
}
add_action( 'wp_footer', 'oldbrowser' );

function am_enqueue_styles() {
// Enqueue Styles      
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() .'/css/bootstrap.min.css' );
    //wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() .'/font-awesome-4.1.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'old-browser-css', get_template_directory_uri() .'/outdatedbrowser/outdatedBrowser.min.css' );
}
add_action( 'wp_enqueue_scripts' , 'am_enqueue_styles', 10);

?>