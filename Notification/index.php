<html>
<head>
    <title>
        Sends Notification
    </title>
</head>
<body>
    <container>
        <div class="row">
            <div class="col-md-8">
<?php
error_reporting(0);
/*
    Plugin Name: Send Notification
    Plugin URI: 
    Description:
    Version: 1.0.2
    Author: Anshu Sharma

*/

/* code for include css and js file */
function my_custom_function() {
    
    wp_enqueue_media();
    wp_register_style('my_style_css', plugins_url('css/card_style.css?'.time(),__FILE__ ));
    wp_enqueue_style('my_style_css');
    
    wp_register_style('bootstrap_css1','https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap_css1');
    wp_register_script( 'js_file', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
    wp_enqueue_script('js_file');

    wp_register_script( 'js_file1', plugins_url('js/certificate.js?'.time(),__FILE__));
    wp_enqueue_script('js_file1');
    
    wp_register_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js');
    wp_enqueue_script('bootstrap_js');
}
add_action( 'admin_enqueue_scripts','my_custom_function');


function wp_add_certificate_page(){

    add_menu_page(
        'Send Notification',
        'Send Notification',
        'edit_posts',
        'send-notification',
        'send_notification_function',
        'dashicons-businessman',
        30
    );
        add_submenu_page(
            'send-notification',
            'View Notification',
            'View Notification',
            'edit_posts',
            'view-all-notification',
            'view_notification_function'
        );
    }
add_action( 'admin_menu', 'wp_add_certificate_page' );



function view_notification_function(){
    require_once( plugin_dir_path( __FILE__ ) . '/inc/view-notification.php' );
}
function send_notification_function(){
    require_once( plugin_dir_path( __FILE__ ) . '/inc/send-notification.php' );
}


