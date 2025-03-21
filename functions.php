<?php
/**
* Custom Post Types & Custom Taxonomies
*/
require get_template_directory() . '/inc/post-types-taxonomies.php';

// Change the placeholder of “Add title” to “Add student name”
function school_change_student_title_placeholder($title) {
    $screen = get_current_screen();
    if ($screen->post_type === 'fwd-student') {
        return 'Add student name';
    }
    return $title;
}
add_filter('enter_title_here', 'school_change_student_title_placeholder');

function school_setup() {
    // Loads style.css on the back-end editor
	// add_editor_style( get_stylesheet_uri() );

    // Add image sizes
    // Crop images to 400px by 500px
    add_image_size( '400x500', 400, 500, true );

    // Crop images to 200px by 250px
    add_image_size( '200x250', 200, 250, true );


    // Crop images to 400px by 200px
    add_image_size( '400x200', 400, 200, true );

    // Crop images to 800px by 400px
    add_image_size( '800x400', 800, 400, true );
}
add_action( 'after_setup_theme', 'school_setup' );

// Make custom sizes selectable from WordPress admin.
function school_add_custom_image_sizes( $size_names ) {
	$new_sizes = array(
		'400x500' => __( '400x500', 'school-theme' ),
		'200x250' => __( '200x250', 'school-theme' ),

        '400x200' => __( '400x200', 'school-theme' ),
		'800x400' => __( '800x400', 'school-theme' ),
	);
	return array_merge( $size_names, $new_sizes );
}
add_filter( 'image_size_names_choose', 'school_add_custom_image_sizes' );
?>