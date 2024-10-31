<?php
/**
 * Plugin Name:         Scroll top by 1 Click
 * Description:         This is a Simple Plugin that allows you to create a button at bottom to scroll top by one click.
 * Version:             1.2.2
 * Requires at least:   5.2
 * Requires PHP:        7.2
 * Author:              Abdullah Almamun
 * Author URI:          https://almamun.life/
 * License:             GPL V2 or later
 * License URI:         https://gnu.org/licenses/gpl-2.0.html
 * Text Domain:         aats1c
 * 
 */



/** ===================================================================================================
 *                                              Admin Part
 * ==================================================================================================*/
// =========================================== CSS enqueue for admin page============================
function aats1c_enqueue_admin_style(){
    wp_enqueue_style( 'aats1c_style', plugins_url( 'css/aats1c_admin_style.css' , __FILE__ ) );

    wp_enqueue_script( 'jQuery');
    wp_enqueue_script( 'aats1c_admin_script', plugins_url( 'js/aats1c_custom.js' , __FILE__ ) );
}
add_action( 'admin_enqueue_scripts' , 'aats1c_enqueue_admin_style');


// =========================================== Creating menu for WP Dashboard ========================
function add_menu_for_plugin_aats1c(){
    add_menu_page( 'Scroll top by 1 Click', 'Scroll to top', 'manage_options', 'scroll_top', 'page_create_for_aats1c', plugins_url( 'img/menu_icon.png' , __FILE__ ), 101 );
}
add_action( 'admin_menu' , 'add_menu_for_plugin_aats1c');


// =========================================== Call Back Function ====================================
function page_create_for_aats1c(){
    // ====================================== This is inside of admin page ========================
    require_once('aats1c_admin.php');
}

// ======================================= Button Preview from admin page =======================
function aats1c_custom_preview(){
    ?>
    <style>
        #aats1c_btn_preview_main{
          background-color: <?php echo esc_attr( get_option( 'aats1c_btn_bgc' )); ?> ;
          border-radius:    <?php echo esc_attr( get_option( 'aats1c_btn_round' )); ?>;
          height:           <?php echo esc_attr( get_option( 'aats1c_btn_height' )); ?>;
          width:            <?php echo esc_attr( get_option( 'aats1c_btn_width' )); ?>;
          float:            <?php echo esc_attr( get_option( 'aats1c_btn_position' )); ?>;
        }
    </style>
    <?php
}
add_action( 'admin_head' , 'aats1c_custom_preview' );


/**
 * ========================================== Plugin Part ==========================================
 */
require_once('aats1c_plugin_control.php');



/**
 * After Installing the plugin user will automically redirected to Scroll top by 1 Click plugin page
 */
register_activation_hook( __FILE__, 'aats1c_plugin_activation' );
function aats1c_plugin_activation(){
  add_option('aats1c_plugin_do_activation_redirect', true );
}

add_action( 'admin_init', 'aats1c_plugin_redirect');
function aats1c_plugin_redirect(){
  if(get_option('aats1c_plugin_do_activation_redirect', false)){
    delete_option('aats1c_plugin_do_activation_redirect');
    if(!isset($_GET['active-multi'])){
      wp_safe_redirect(admin_url( 'admin.php?page=scroll_top' ));
      exit;
    }
  }
}


?>