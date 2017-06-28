<?php
/**
* ICI je mettrai toutes les fonctionsque j'ai eu à editer afin de construire le site **/

//MISE EN PLACE DE WOOCOMMERCE DANS MON THEME
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_outpiut_content_wrapper_end', 10);

//add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
//add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

//function my_theme_wrapper_start() {
//je ne suis pas trop certain du marqueur qui encadre le contenu de mon thème j'hésite entre le dslc-content qui englobe tout le site et le dslc-theme-co
//  echo '<section id="dslc-theme-content">';
//}

//function my_theme_wrapper_end() {
 // echo '</section>';
//}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
