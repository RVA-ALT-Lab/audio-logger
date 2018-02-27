<?php
/* Plugin Name: ALT Lab Audio Logger
 *
 *
 *
 *
 *
 *
*/

function audio_logger_shortcode($atts = [], $content = null){

    ob_start();


    require_once(plugin_dir_path(__FILE__) . '/audio-logger-scripts.php');

    $output = ob_get_clean();
    $run_shortcodes = do_shortcode($output);
    return $run_shortcodes;
}


function init_shortcode_audio_logger(){
	add_shortcode('audio-logger', 'audio_logger_shortcode');
}

add_action('init', 'init_shortcode_audio_logger');





?>