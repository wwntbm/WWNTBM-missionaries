<?php
/*
 * Plugin Name: WWNTBM Missionaries
 * Plugin URI: https://github.com/macbookandrew/wwntbm-missionaries
 * Description: WWNTBM custom post types and shortcodes
 * Version: 1.0.1
 * Author: AndrewRMinion Design
 * Author URI: https://andrewrminion.com
 */

if (!defined('ABSPATH')) {
    exit;
}

// Register Custom Post Types
function wwntbm_custom_post_types() {

    $missionary_labels = array(
        'name'                  => 'Missionaries',
        'singular_name'         => 'Missionary',
        'menu_name'             => 'Missionaries',
        'name_admin_bar'        => 'Missionary',
        'archives'              => 'Missionary Archives',
        'parent_item_colon'     => 'Parent Missionary:',
        'all_items'             => 'All Missionaries',
        'add_new_item'          => 'Add New Missionary',
        'add_new'               => 'Add New',
        'new_item'              => 'New Missionary',
        'edit_item'             => 'Edit Missionary',
        'update_item'           => 'Update Missionary',
        'view_item'             => 'View Missionary',
        'search_items'          => 'Search Missionary',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into missionary',
        'uploaded_to_this_item' => 'Uploaded to this missionary',
        'items_list'            => 'Missionaries list',
        'items_list_navigation' => 'Missionaries list navigation',
        'filter_items_list'     => 'Filter missionaries list',
    );
    $missionary_rewrite = array(
        'slug'                  => 'connect/missionaries',
        'with_front'            => false,
        'pages'                 => true,
        'feeds'                 => true,
    );
    $missionary_args = array(
        'label'                 => 'Missionary',
        'description'           => 'Missionaries',
        'labels'                => $missionary_labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', ),
        'taxonomies'            => array( 'wwntbm_ministries', 'wwntbm_status' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-admin-users',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'rewrite'               => $missionary_rewrite,
        'capability_type'       => 'page',
    );
    register_post_type( 'wwntbm_missionaries', $missionary_args );

    $updates_labels = array(
        'name'                  => 'Missionary Updates',
        'singular_name'         => 'Missionary Update',
        'menu_name'             => 'Missionary Updates',
        'name_admin_bar'        => 'Missionary Update',
        'archives'              => 'Missionary Update Archives',
        'parent_item_colon'     => 'Parent Missionary Update:',
        'all_items'             => 'All Missionary Updates',
        'add_new_item'          => 'Add New Missionary Update',
        'add_new'               => 'Add New',
        'new_item'              => 'New Missionary Update',
        'edit_item'             => 'Edit Missionary Update',
        'update_item'           => 'Update Missionary Update',
        'view_item'             => 'View Missionary Update',
        'search_items'          => 'Search Missionary Update',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into missionary update',
        'uploaded_to_this_item' => 'Uploaded to this missionary update',
        'items_list'            => 'Missionary updates list',
        'items_list_navigation' => 'Missionary updates list navigation',
        'filter_items_list'     => 'Filter missionary updates list',
    );
    $updates_rewrite = array(
        'slug'                  => 'connect/missionary-updates',
        'with_front'            => false,
        'pages'                 => true,
        'feeds'                 => true,
    );
    $updates_args = array(
        'label'                 => 'Missionary Update',
        'description'           => 'Missionary Updates',
        'labels'                => $updates_labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', ),
        'taxonomies'            => array( 'wwntbm_ministries' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-admin-page',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'rewrite'               => $updates_rewrite,
        'capability_type'       => 'page',
    );
    register_post_type( 'wwntbm_updates', $updates_args );

}
add_action( 'init', 'wwntbm_custom_post_types', 0 );

// Register Custom Taxonomies
function custom_taxonomies() {

    $labels = array(
        'name'                       => 'Ministry Types',
        'singular_name'              => 'Ministry Type',
        'menu_name'                  => 'Ministry Type',
        'all_items'                  => 'All Ministry Types',
        'parent_item'                => 'Parent Ministry Type',
        'parent_item_colon'          => 'Parent Ministry Type:',
        'new_item_name'              => 'New Ministry Type Name',
        'add_new_item'               => 'Add New Ministry Type',
        'edit_item'                  => 'Edit Ministry Type',
        'update_item'                => 'Update Ministry Type',
        'view_item'                  => 'View Ministry Type',
        'separate_items_with_commas' => 'Separate ministry types with commas',
        'add_or_remove_items'        => 'Add or remove ministry types',
        'choose_from_most_used'      => 'Choose from the most used',
        'popular_items'              => 'Popular Ministry Types',
        'search_items'               => 'Search Ministry Types',
        'not_found'                  => 'Not Found',
        'no_terms'                   => 'No ministry types',
        'items_list'                 => 'Ministry Types list',
        'items_list_navigation'      => 'Ministry Types list navigation',
    );
    $rewrite = array(
        'slug'                       => 'ministry',
        'with_front'                 => true,
        'hierarchical'               => true,
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'rewrite'                    => $rewrite,
    );
    register_taxonomy( 'wwntbm_ministries', array( 'wwntbm_missionaries' ), $args );

    $status_labels = array(
        'name'                       => 'Missionary Statuses',
        'singular_name'              => 'Missionary Status',
        'menu_name'                  => 'Missionary Status',
        'all_items'                  => 'All Missionary Statuses',
        'parent_item'                => 'Parent Missionary Status',
        'parent_item_colon'          => 'Parent Missionary Status:',
        'new_item_name'              => 'New Missionary Status Name',
        'add_new_item'               => 'Add New Missionary Status',
        'edit_item'                  => 'Edit Missionary Status',
        'update_item'                => 'Update Missionary Status',
        'view_item'                  => 'View Missionary Status',
        'separate_items_with_commas' => 'Separate Missionary Statuses with commas',
        'add_or_remove_items'        => 'Add or remove Missionary Statuses',
        'choose_from_most_used'      => 'Choose from the most used',
        'popular_items'              => 'Popular Missionary Statuses',
        'search_items'               => 'Search Missionary Statuses',
        'not_found'                  => 'Not Found',
        'no_terms'                   => 'No Missionary Statuses',
        'items_list'                 => 'Missionary Statuses list',
        'items_list_navigation'      => 'Missionary Statuses list navigation',
    );
    $status_rewrite = array(
        'slug'                       => 'status',
        'with_front'                 => true,
        'hierarchical'               => true,
    );
    $args = array(
        'labels'                     => $status_labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'rewrite'                    => $status_rewrite,
    );
    register_taxonomy( 'wwntbm_status', array( 'wwntbm_missionaries' ), $args );

}
add_action( 'init', 'custom_taxonomies', 0 );

// Sort by beginning date ascending
function sort_missionaries( $query ) {
    if ( isset($query->query_vars['post_type']) && $query->query_vars['post_type'] == 'wwntbm_missionaries' ) {
        $query->set( 'order', 'ASC' );
        $query->set( 'orderby', 'meta_value' );
        $query->set( 'meta_key', 'missionary_key' );
    }
    return $query;
}
add_filter( 'pre_get_posts', 'sort_missionaries' );

// Add settings page
add_action( 'admin_menu', 'wwntbm_missionaries_add_admin_menu' );
add_action( 'admin_init', 'wwntbm_missionaries_settings_init' );

// add to menu
function wwntbm_missionaries_add_admin_menu() {
    add_submenu_page( 'edit.php?post_type=wwntbm_missionaries', 'WWNTBM Missionaries', 'Settings', 'manage_options', 'wwntbm-missionaries', 'wwntbm_missionaries_options_page' );
}

// add settings section and fields
function wwntbm_missionaries_settings_init() {
    register_setting( 'wwntbm_missionaries_options', 'wwntbm_missionaries_settings' );

    // API settings
    add_settings_section(
        'wwntbm_missionaries_options_keys_section',
        __( 'Add your Google API Key', 'wwntbm_missionaries' ),
        'wwntbm_missionaries_api_settings_section_callback',
        'wwntbm_missionaries_options'
    );

    add_settings_field(
        'wwntbm_missionaries_api_key',
        __( 'Google API Key', 'wwntbm_missionaries' ),
        'wwntbm_missionaries_api_key_render',
        'wwntbm_missionaries_options',
        'wwntbm_missionaries_options_keys_section'
    );
}

// print API Key field
function wwntbm_missionaries_api_key_render() {
    $options = get_option( 'wwntbm_missionaries_settings' ); ?>
    <input type="text" name="wwntbm_missionaries_settings[wwntbm_missionaries_api_key]" placeholder="AIzaSyD4iE2xVSpkLLOXoyqT-RuPwURN3ddScAI" size="45" value="<?php echo $options['wwntbm_missionaries_api_key']; ?>">
    <?php
}

// print API settings description
function wwntbm_missionaries_api_settings_section_callback(  ) {
    echo __( 'Enter your API Keys below. Don’t have it? <a href="https://console.developers.google.com/" target="_blank">Get it here on the Google Developers Console</a>.', 'wwntbm_missionaries' );
}

// print form
function wwntbm_missionaries_options_page(  ) { ?>
    <div class="wrap">
       <h2>Google Maps Embed API Key</h2>
        <form action="options.php" method="post">

            <?php
            settings_fields( 'wwntbm_missionaries_options' );
            do_settings_sections( 'wwntbm_missionaries_options' );
            submit_button();
            ?>

        </form>
    </div>
    <?php
}

// Register frontend scripts and styles
function wwntbm_register_google_map() {
    wp_register_script( 'google-map-api', 'https://maps.googleapis.com/maps/api/js?key=' . get_option( 'wwntbm_missionaries_settings' )['wwntbm_missionaries_api_key'] . '&amp;callback=initMap', array( 'wwntbm-missionaries-map' ), NULL, true );
    wp_register_script( 'wwntbm-missionaries-map', plugins_url( 'js/initializeMap.min.js', __FILE__ ), array( 'jquery' ), NULL, true );
    wp_register_style( 'wwntbm-missionaries-map', plugins_url( 'css/wwntbm-missionaries-map.css', __FILE__ ) );
}
add_action( 'wp_enqueue_scripts', 'wwntbm_register_google_map' );

// Register shortcode
function wwntbm_register_shortcode( $atts ) {
    return return_shortcode_map( $atts );
}
add_shortcode( 'wwntbm_missionary_map', 'wwntbm_register_shortcode' );

// Print missionary info
function return_missionary( $id, $name, $link = NULL, $image = NULL, $status = NULL, $type_string = NULL, $status_string = NULL ) {
    $output = '<h2 class="missionary-listed">';
    if ( $link ) {
        $output .= '<a href="' . $link . '">';
    }
    if ( $image ) {
        $output .= $image;
    }
    $output .= '<span class="missionary-name">' . $name . '</span>';
    if ( $link ) {
        $output .= '</a>';
    }
    if ( $type_string ) {
        $output .= '<span class="field-of-service">' . $type_string . '</span>';
    }
    if ( $status_string && $status[0]->name !== 'Field' ) {
        $output .= '<span class="field-of-service">' . $status_string . '</span>';
    }
    $output .= '</h2>';

    return $output;
}
function print_missionary( $id, $name, $link = NULL, $image = NULL, $status = NULL, $type_string = NULL, $status_string = NULL ) {
    echo return_missionary( $id, $name, $link, $image, $status, $type_string, $status_string );
}

// include shortcode files
include( 'includes/shortcode-map.php' );
