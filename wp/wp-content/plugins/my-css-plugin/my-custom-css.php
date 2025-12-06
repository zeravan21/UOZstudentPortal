<?php
/**
 * Plugin Name: My Custom CSS
 * Description: Loads your custom CSS independently of the theme.
 * Version: 1.0
 * Author: Your Name
 */

// Load custom CSS
add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'my-custom-css',
        plugin_dir_url( __FILE__ ) . 'style.css',
        array(),
        filemtime( plugin_dir_path( __FILE__ ) . 'style.css' )
    );
    
    // Enqueue JavaScript for save course functionality
    wp_enqueue_script(
        'my-custom-js',
        plugin_dir_url( __FILE__ ) . 'script.js',
        array('jquery'),
        filemtime( plugin_dir_path( __FILE__ ) . 'script.js' ),
        true
    );
    
    // Pass AJAX URL to JavaScript
    wp_localize_script( 'my-custom-js', 'myAjax', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'nonce' => wp_create_nonce( 'save_course_nonce' )
    ));
});

// Load custom templates from plugin
add_filter( 'template_include', function( $template ) {
    $plugin_dir = plugin_dir_path( __FILE__ ) . 'templates/';
    
    // Course templates
    if ( is_post_type_archive( 'course' ) && file_exists( $plugin_dir . 'archive-course.php' ) ) {
        return $plugin_dir . 'archive-course.php';
    }
    if ( is_singular( 'course' ) && file_exists( $plugin_dir . 'single-course.php' ) ) {
        return $plugin_dir . 'single-course.php';
    }
    
    // User profile templates
    if ( is_post_type_archive( 'user_profile' ) && file_exists( $plugin_dir . 'archive-user_profile.php' ) ) {
        return $plugin_dir . 'archive-user_profile.php';
    }
    if ( is_singular( 'user_profile' ) && file_exists( $plugin_dir . 'single-user_profile.php' ) ) {
        return $plugin_dir . 'single-user_profile.php';
    }
    
    // Article templates
    if ( is_post_type_archive( 'article' ) && file_exists( $plugin_dir . 'archive-article.php' ) ) {
        return $plugin_dir . 'archive-article.php';
    }
    if ( is_singular( 'article' ) && file_exists( $plugin_dir . 'single-article.php' ) ) {
        return $plugin_dir . 'single-article.php';
    }
    
    return $template;
});

// AJAX handler for saving/unsaving courses
add_action( 'wp_ajax_save_course', 'handle_save_course' );
add_action( 'wp_ajax_nopriv_save_course', 'handle_save_course' );

function handle_save_course() {
    // Verify nonce
    check_ajax_referer( 'save_course_nonce', 'nonce' );
    
    $course_id = isset($_POST['course_id']) ? intval($_POST['course_id']) : 0;
    $user_profile_id = isset($_POST['user_profile_id']) ? intval($_POST['user_profile_id']) : 0;
    
    if ( !$course_id || !$user_profile_id ) {
        wp_send_json_error( array('message' => 'Invalid data') );
    }
    
    // Get current saved courses for this user profile
    $saved_courses = get_field( 'saved_courses', $user_profile_id );
    
    if ( !is_array($saved_courses) ) {
        $saved_courses = array();
    }
    
    // Check if course is already saved
    $is_saved = in_array( $course_id, $saved_courses );
    
    if ( $is_saved ) {
        // Remove course from saved list
        $saved_courses = array_diff( $saved_courses, array($course_id) );
        $action = 'removed';
    } else {
        // Add course to saved list
        $saved_courses[] = $course_id;
        $action = 'added';
    }
    
    // Update the field
    update_field( 'saved_courses', $saved_courses, $user_profile_id );
    
    wp_send_json_success( array(
        'action' => $action,
        'message' => $action === 'added' ? 'Course saved!' : 'Course removed from saved list'
    ));
}

// Function to check if a course is saved by a user
function is_course_saved( $course_id, $user_profile_id ) {
    $saved_courses = get_field( 'saved_courses', $user_profile_id );
    
    if ( !is_array($saved_courses) ) {
        return false;
    }
    
    return in_array( $course_id, $saved_courses );
}
