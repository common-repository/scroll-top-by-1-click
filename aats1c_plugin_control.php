<?php

 /** =================================================================================================
 *                                              Plugin Part
 * =================================================================================================*/
 //  ========================================= CSS Importting =================================
 function aats1c_enqueue_style(){
    wp_enqueue_style( 'aats1c_style', plugins_url( 'css/aats1c_style.css' , __FILE__ ) );
}
add_action( 'wp_enqueue_scripts' , 'aats1c_enqueue_style');

// =========================================== JS Importing ======================================
function aats1c_enqueue_scripts(){
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'aats1c_plugin_scripts' , plugins_url( 'js/aats1c_plugin.js' , __FILE__) , array(), '1.0.0' , true);
}
add_action( 'wp_enqueue_scripts' , 'aats1c_enqueue_scripts');

// ======================================== jQuery plugin setting activation ====================
function aats1c_plugin__option_activation(){
    ?>
    <script>
        jQuery(document).ready(function(){
            jQuery.scrollUp();
        });
    </script>
    <?php
}
add_action( 'wp_footer' , 'aats1c_plugin__option_activation' );




// ======================================= Button control from admin page =======================
function aats_custom_controls(){
    ?>
    <style>
        #scrollUp{
            background-color: <?php  echo esc_attr( get_option( 'aats1c_btn_bgc' ) );  ?> ;
            background-image: url("<?php 
                $aats_icon = get_option( 'aats1c_btn_icon' );
                echo esc_url( plugins_url("img/$aats_icon" , __FILE__)  );  
                ?>");
            border-radius: <?php echo  esc_attr( get_option( 'aats1c_btn_round' ) ); ?>;
            <?php echo  esc_attr( get_option( 'aats1c_btn_position' ) ); ?>: <?php echo  esc_attr( get_option( 'aats1c_btn_side' ) ); ?>;
            bottom:     <?php echo esc_attr( get_option( 'aats1c_btn_bottom' ) )  ; ?>;
            height:     <?php echo esc_attr( get_option( 'aats1c_btn_height' ) ) ; ?>;
            width:      <?php echo esc_attr( get_option( 'aats1c_btn_width' ) ) ; ?>;
        }
    </style>
    <?php
}
add_action( 'wp_head' , 'aats_custom_controls' );
?>