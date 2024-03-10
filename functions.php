<?php
   

//    function add_scripts_and_styles(){
    
//     // wp_enqueue_style('stylesheet',get_template_directory_uri(). '/assets/fonts/stylesheet.css';  );
//     //wp_enqueue_style('test',get_template_directory_uri(). '/assets/css/test.css');   
//     wp_enqueue_style('style',get_stylesheet_uri(  ));


//    } 

//    add_action('wp_enqueue_scripts','add_scripts_and_styles');


//    function blog_style() {  
//     wp_enqueue_style( 'style', get_template_directory_uri() . './assets/css/test.css'  );
// }
// add_action('wp_enqueue_scripts','blog_style' );



add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
    add_theme_support( 'custom-logo' );

    function theme_name_scripts() {
        wp_enqueue_style( 'style', get_stylesheet_uri() );
        wp_enqueue_style( 'test', get_template_directory_uri(  ) . './assets/css/test.css' );
        
        
        // wp_deregister_script( 'jquery' );
        // wp_register_script('jquery', get_template_directory_uri(  ) . '/assets/js/jquery/-3.5.1.min.js', 
        // false , null, true );
        // wp_enqueue_script('jquery');
        // wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, 'footer',  true );
    }

?>