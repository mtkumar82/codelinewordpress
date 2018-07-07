<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'unite-bootstrap','unite-icons' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );


add_shortcode( 'latest_films_sidebar', 'chld_thm_latest_films' );
function chld_thm_latest_films() {
    $args=5;
	if ( is_numeric( $args ) ) {
        $args = array( 'numberposts' => absint( $args ) );
    }

	$defaults = array(
        'numberposts' => 5, 'offset' => 0,
        'orderby' => 'post_date',
        'order' => 'DESC', 
		'post_type' => 'films', 'post_status' => 'publish'
    );
 
    $r = wp_parse_args( $args, $defaults );
 
    $results = get_posts( $r );
 
    // Backward compatibility. Prior to 3.1 expected posts to be returned in array.
    if ( ARRAY_A == $output ){
        foreach ( $results as $key => $result ) {
            $results[$key] = get_object_vars( $result );
        }
        //$results = $results ? $results : array();
    }
	if(is_array($results) && !empty($results)){
	   foreach($results as $key=>$postObjects){
	   	?>
		<div class="latest-films">
				<div class="person-content"><?php echo $postObjects->post_content; ?></div>
				<p class="person-name"><?php echo $postObjects->post_title; ?></p>			
		</div>
		<?php
	   }
	}
	
}

//Widget for latest films

// Register and load the widget
function latestfilm_load_widget() {
    register_widget( 'latest_film_widget' );
}
add_action( 'widgets_init', 'latestfilm_load_widget' );
 
// Creating the widget 
class latest_film_widget extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'latest_film_widget', 
 
// Widget name will appear in UI
__('Latest Films', 'wpb_widget_domain'), 
 
// Widget description
array( 'description' => __( 'Show Latest Films posts in sidebar', 'wpb_widget_domain' ), ) 
);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
 
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];
 
// This is where you run the code and display the output
 $args=5;
	if ( is_numeric( $args ) ) {
        $args = array( 'numberposts' => absint( $args ) );
    }

	$defaults = array(
        'numberposts' => 5, 'offset' => 0,
        'orderby' => 'post_date',
        'order' => 'DESC', 
		'post_type' => 'films', 'post_status' => 'publish'
    );
 
    $r = wp_parse_args( $args, $defaults );
 
    $results = get_posts( $r );
 
    // Backward compatibility. Prior to 3.1 expected posts to be returned in array.
    if ( ARRAY_A == $output ){
        foreach ( $results as $key => $result ) {
            $results[$key] = get_object_vars( $result );
        }
    }
	if(is_array($results) && !empty($results)){
	   foreach($results as $key=>$postObjects){
	   	?>
		<div class="latest-films" >
				<div class="person-content"><?php echo $postObjects->post_content; ?></div>
				<p class="person-name"><?php echo $postObjects->post_title; ?></p>			
		</div>
		<?php
	   }
	}
echo $args['after_widget'];
}
         
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'wpb_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
     
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} 
// END ENQUEUE PARENT ACTION
