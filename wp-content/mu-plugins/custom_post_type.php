<?php 
add_action('init', 'necas_slider_post_type', 0);
add_action('init', 'necas_team_post_type', 0);
add_action('init', 'necas_affiliation_post_type', 0);
add_action('init', 'necas_testimonial_post_type', 0);
add_action('init', 'necas_study_post_type', 0);
add_action('init', 'necas_course_post_type', 0);
add_action('init', 'necas_university_post_type', 0);
add_action('init', 'necas_gallery_post_type', 0);
add_action('init', 'necas_faq_post_type', 0);
add_action('init', 'necas_services_post_type', 0);
add_action('init', 'necas_tests_post_type', 0);


function necas_slider_post_type() {
      // Labels for the Post Type
    $labels = array(
      'name'                => _x( 'Sliders', 'Post Type General Name', 'necas' ),
      'singular_name'       => _x( 'Slider', 'Post Type Singular Name', 'necas' ),
      'menu_name'           => __( 'Sliders', 'necas' ),
      'parent_item_colon'   => __( 'Parent Slider', 'necas' ),
      'all_items'           => __( 'All Sliders', 'necas' ),
      'view_item'           => __( 'View Slider', 'necas' ),
      'add_new_item'        => __( 'Add New Slider', 'necas' ),
      'add_new'             => __( 'Add New Slider', 'necas' ),
      'edit_item'           => __( 'Edit Slider', 'necas' ),
      'update_item'         => __( 'Update Slider', 'necas' ),
      'search_items'        => __( 'Search Slider', 'necas' ),
      'not_found'           => __( 'No sliders found', 'necas' ),
      'not_found_in_trash'  => __( 'Not found in trash', 'necas' ),
    );
    // Another Customizations
    $args = array(
        'label'   => __('Sliders','necas' ),
        'description' => __('Sliders for necas', 'necas'),
        'labels'  => $labels,
        'supports' => array('title', 'thumbnail',),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menus' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 15,
        'menu_icon' => 'dashicons-images-alt2',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'capability_type' => 'page',
    );
    // register the post Type
    register_post_type( 'sliders', $args);
}
function necas_team_post_type() {
  // Labels for the Post Type
$labels = array(
  'name'                => _x( 'teams', 'Post Type General Name', 'necas' ),
  'singular_name'       => _x( 'team', 'Post Type Singular Name', 'necas' ),
  'menu_name'           => __( 'teams', 'necas' ),
  'parent_item_colon'   => __( 'Parent team', 'necas' ),
  'all_items'           => __( 'All teams', 'necas' ),
  'view_item'           => __( 'View team', 'necas' ),
  'add_new_item'        => __( 'Add New team', 'necas' ),
  'add_new'             => __( 'Add New team', 'necas' ),
  'edit_item'           => __( 'Edit team', 'necas' ),
  'update_item'         => __( 'Update team', 'necas' ),
  'search_items'        => __( 'Search team', 'necas' ),
  'not_found'           => __( 'No teams found', 'necas' ),
  'not_found_in_trash'  => __( 'Not found in trash', 'necas' ),
);
// Another Customizations
$args = array(
    'label'   => __('teams','necas' ),
    'description' => __('teams for necas', 'necas'),
    'labels'  => $labels,
    'supports' => array('title', 'thumbnail',),
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menus' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'menu_position' => 15,
    'menu_icon' => 'dashicons-groups',
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'capability_type' => 'page',
);
// register the post Type
register_post_type( 'teams', $args);
}

function necas_affiliation_post_type() {
  // Labels for the Post Type
$labels = array(
  'name'                => _x( 'affiliations', 'Post Type General Name', 'necas' ),
  'singular_name'       => _x( 'affiliation', 'Post Type Singular Name', 'necas' ),
  'menu_name'           => __( 'affiliations', 'necas' ),
  'parent_item_colon'   => __( 'Parent affiliation', 'necas' ),
  'all_items'           => __( 'All affiliations', 'necas' ),
  'view_item'           => __( 'View affiliation', 'necas' ),
  'add_new_item'        => __( 'Add New affiliation', 'necas' ),
  'add_new'             => __( 'Add New affiliation', 'necas' ),
  'edit_item'           => __( 'Edit affiliation', 'necas' ),
  'update_item'         => __( 'Update affiliation', 'necas' ),
  'search_items'        => __( 'Search affiliation', 'necas' ),
  'not_found'           => __( 'No affiliations found', 'necas' ),
  'not_found_in_trash'  => __( 'Not found in trash', 'necas' ),
);
// Another Customizations
$args = array(
    'label'   => __('affiliations','necas' ),
    'description' => __('affiliations for necas', 'necas'),
    'labels'  => $labels,
    'supports' => array('title', 'thumbnail',),
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menus' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'menu_position' => 15,
    'menu_icon' => 'dashicons-share-alt',
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'capability_type' => 'page',
);
// register the post Type
register_post_type( 'affiliations', $args);
}
function necas_testimonial_post_type() {
  // Labels for the Post Type
$labels = array(
  'name'                => _x( 'testimonials', 'Post Type General Name', 'necas' ),
  'singular_name'       => _x( 'testimonial', 'Post Type Singular Name', 'necas' ),
  'menu_name'           => __( 'testimonials', 'necas' ),
  'parent_item_colon'   => __( 'Parent testimonial', 'necas' ),
  'all_items'           => __( 'All testimonials', 'necas' ),
  'view_item'           => __( 'View testimonial', 'necas' ),
  'add_new_item'        => __( 'Add New testimonial', 'necas' ),
  'add_new'             => __( 'Add New testimonial', 'necas' ),
  'edit_item'           => __( 'Edit testimonial', 'necas' ),
  'update_item'         => __( 'Update testimonial', 'necas' ),
  'search_items'        => __( 'Search testimonial', 'necas' ),
  'not_found'           => __( 'No testimonials found', 'necas' ),
  'not_found_in_trash'  => __( 'Not found in trash', 'necas' ),
);
// Another Customizations
$args = array(
    'label'   => __('testimonials','necas' ),
    'description' => __('testimonials for necas', 'necas'),
    'labels'  => $labels,
    'supports' => array('title', 'thumbnail','editor'),
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menus' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'menu_position' => 15,
    'menu_icon' => 'dashicons-admin-page',
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'capability_type' => 'page',
);
// register the post Type
register_post_type( 'testimonials', $args);
}


function necas_study_post_type() {
  // Labels for the Post Type
$labels = array(
  'name'                => _x( 'studys', 'Post Type General Name', 'necas' ),
  'singular_name'       => _x( 'study', 'Post Type Singular Name', 'necas' ),
  'menu_name'           => __( 'studys', 'necas' ),
  'parent_item_colon'   => __( 'Parent study', 'necas' ),
  'all_items'           => __( 'All studys', 'necas' ),
  'view_item'           => __( 'View study', 'necas' ),
  'add_new_item'        => __( 'Add New study', 'necas' ),
  'add_new'             => __( 'Add New study', 'necas' ),
  'edit_item'           => __( 'Edit study', 'necas' ),
  'update_item'         => __( 'Update study', 'necas' ),
  'search_items'        => __( 'Search study', 'necas' ),
  'not_found'           => __( 'No studys found', 'necas' ),
  'not_found_in_trash'  => __( 'Not found in trash', 'necas' ),
);
// Another Customizations
$args = array(
    'label'   => __('studys','necas' ),
    'description' => __('studys for necas', 'necas'),
    'labels'  => $labels,
    'supports' => array('title', 'thumbnail','editor','excerpt'),
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menus' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'menu_position' => 15,
    'menu_icon' => 'dashicons-book-alt',
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'capability_type' => 'page',
);
// register the post Type
register_post_type( 'studys', $args);
}

function necas_course_post_type() {
  // Labels for the Post Type
$labels = array(
  'name'                => _x( 'courses', 'Post Type General Name', 'necas' ),
  'singular_name'       => _x( 'course', 'Post Type Singular Name', 'necas' ),
  'menu_name'           => __( 'courses', 'necas' ),
  'parent_item_colon'   => __( 'Parent course', 'necas' ),
  'all_items'           => __( 'All courses', 'necas' ),
  'view_item'           => __( 'View course', 'necas' ),
  'add_new_item'        => __( 'Add New course', 'necas' ),
  'add_new'             => __( 'Add New course', 'necas' ),
  'edit_item'           => __( 'Edit course', 'necas' ),
  'update_item'         => __( 'Update course', 'necas' ),
  'search_items'        => __( 'Search course', 'necas' ),
  'not_found'           => __( 'No courses found', 'necas' ),
  'not_found_in_trash'  => __( 'Not found in trash', 'necas' ),
);
// Another Customizations
$args = array(
    'label'   => __('courses','necas' ),
    'description' => __('courses for necas', 'necas'),
    'labels'  => $labels,
    'supports' => array('title'),
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menus' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'menu_position' => 15,
    'menu_icon' => 'dashicons-book',
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'capability_type' => 'page',
);
// register the post Type
register_post_type( 'courses', $args);
}



function necas_university_post_type() {
  // Labels for the Post Type
$labels = array(
  'name'                => _x( 'universitys', 'Post Type General Name', 'necas' ),
  'singular_name'       => _x( 'university', 'Post Type Singular Name', 'necas' ),
  'menu_name'           => __( 'universitys', 'necas' ),
  'parent_item_colon'   => __( 'Parent university', 'necas' ),
  'all_items'           => __( 'All universitys', 'necas' ),
  'view_item'           => __( 'View university', 'necas' ),
  'add_new_item'        => __( 'Add New university', 'necas' ),
  'add_new'             => __( 'Add New university', 'necas' ),
  'edit_item'           => __( 'Edit university', 'necas' ),
  'update_item'         => __( 'Update university', 'necas' ),
  'search_items'        => __( 'Search university', 'necas' ),
  'not_found'           => __( 'No universitys found', 'necas' ),
  'not_found_in_trash'  => __( 'Not found in trash', 'necas' ),
);
// Another Customizations
$args = array(
    'label'   => __('universitys','necas' ),
    'description' => __('universitys for necas', 'necas'),
    'labels'  => $labels,
    'supports' => array('title'),
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menus' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'menu_position' => 15,
    'menu_icon' => 'dashicons-welcome-learn-more',
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'capability_type' => 'page',
);
// register the post Type
register_post_type( 'universitys', $args);
}

function necas_gallery_post_type() {
  // Labels for the Post Type
$labels = array(
  'name'                => _x( 'gallerys', 'Post Type General Name', 'necas' ),
  'singular_name'       => _x( 'gallery', 'Post Type Singular Name', 'necas' ),
  'menu_name'           => __( 'gallerys', 'necas' ),
  'parent_item_colon'   => __( 'Parent gallery', 'necas' ),
  'all_items'           => __( 'All gallerys', 'necas' ),
  'view_item'           => __( 'View gallery', 'necas' ),
  'add_new_item'        => __( 'Add New gallery', 'necas' ),
  'add_new'             => __( 'Add New gallery', 'necas' ),
  'edit_item'           => __( 'Edit gallery', 'necas' ),
  'update_item'         => __( 'Update gallery', 'necas' ),
  'search_items'        => __( 'Search gallery', 'necas' ),
  'not_found'           => __( 'No gallerys found', 'necas' ),
  'not_found_in_trash'  => __( 'Not found in trash', 'necas' ),
);
// Another Customizations
$args = array(
    'label'   => __('gallerys','necas' ),
    'description' => __('gallerys for necas', 'necas'),
    'labels'  => $labels,
    'supports' => array('title','thumbnail'),
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menus' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'menu_position' => 15,
    'menu_icon' => 'dashicons-format-gallery',
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'capability_type' => 'page',
);
// register the post Type
register_post_type( 'gallerys', $args);
}

function necas_faq_post_type() {
  // Labels for the Post Type
$labels = array(
  'name'                => _x( 'faqs', 'Post Type General Name', 'necas' ),
  'singular_name'       => _x( 'faq', 'Post Type Singular Name', 'necas' ),
  'menu_name'           => __( 'faqs', 'necas' ),
  'parent_item_colon'   => __( 'Parent faq', 'necas' ),
  'all_items'           => __( 'All faqs', 'necas' ),
  'view_item'           => __( 'View faq', 'necas' ),
  'add_new_item'        => __( 'Add New faq', 'necas' ),
  'add_new'             => __( 'Add New faq', 'necas' ),
  'edit_item'           => __( 'Edit faq', 'necas' ),
  'update_item'         => __( 'Update faq', 'necas' ),
  'search_items'        => __( 'Search faq', 'necas' ),
  'not_found'           => __( 'No faqs found', 'necas' ),
  'not_found_in_trash'  => __( 'Not found in trash', 'necas' ),
);
// Another Customizations
$args = array(
    'label'   => __('faqs','necas' ),
    'description' => __('faqs for necas', 'necas'),
    'labels'  => $labels,
    'supports' => array('title','editor'),
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menus' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'menu_position' => 15,
    'menu_icon' => 'dashicons-editor-help',
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'capability_type' => 'page',
);
// register the post Type
register_post_type( 'faqs', $args);
}

function necas_services_post_type() {
  // Labels for the Post Type
$labels = array(
  'name'                => _x( 'services', 'Post Type General Name', 'necas' ),
  'singular_name'       => _x( 'service', 'Post Type Singular Name', 'necas' ),
  'menu_name'           => __( 'services', 'necas' ),
  'parent_item_colon'   => __( 'Parent service', 'necas' ),
  'all_items'           => __( 'All services', 'necas' ),
  'view_item'           => __( 'View service', 'necas' ),
  'add_new_item'        => __( 'Add New service', 'necas' ),
  'add_new'             => __( 'Add New service', 'necas' ),
  'edit_item'           => __( 'Edit service', 'necas' ),
  'update_item'         => __( 'Update service', 'necas' ),
  'search_items'        => __( 'Search service', 'necas' ),
  'not_found'           => __( 'No services found', 'necas' ),
  'not_found_in_trash'  => __( 'Not found in trash', 'necas' ),
);
// Another Customizations
$args = array(
    'label'   => __('services','necas' ),
    'description' => __('services for necas', 'necas'),
    'labels'  => $labels,
    'supports' => array('title','editor','thumbnail'),
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menus' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'menu_position' => 15,
    'menu_icon' => 'dashicons-clipboard',
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'capability_type' => 'page',
);
// register the post Type
register_post_type( 'services', $args);
}

function necas_tests_post_type() {
  // Labels for the Post Type
$labels = array(
  'name'                => _x( 'tests', 'Post Type General Name', 'necas' ),
  'singular_name'       => _x( 'test', 'Post Type Singular Name', 'necas' ),
  'menu_name'           => __( 'tests', 'necas' ),
  'parent_item_colon'   => __( 'Parent test', 'necas' ),
  'all_items'           => __( 'All tests', 'necas' ),
  'view_item'           => __( 'View test', 'necas' ),
  'add_new_item'        => __( 'Add New test', 'necas' ),
  'add_new'             => __( 'Add New test', 'necas' ),
  'edit_item'           => __( 'Edit test', 'necas' ),
  'update_item'         => __( 'Update test', 'necas' ),
  'search_items'        => __( 'Search test', 'necas' ),
  'not_found'           => __( 'No tests found', 'necas' ),
  'not_found_in_trash'  => __( 'Not found in trash', 'necas' ),
);
// Another Customizations
$args = array(
    'label'   => __('tests','necas' ),
    'description' => __('tests for necas', 'necas'),
    'labels'  => $labels,
    'supports' => array('title','editor','thumbnail','excerpt'),
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menus' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'menu_position' => 15,
    'menu_icon' => 'dashicons-welcome-write-blog',
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'capability_type' => 'page',
);
// register the post Type
register_post_type( 'tests', $args);
}
?>