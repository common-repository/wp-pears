<?php
/*
Plugin Name: WP-Pears
Plugin URI: http://www.belive.jp/archives/WP-Pears/
Description: The WP-Pears is a plug-in to use PEAR. This plug-in offers the folder that puts the PEAR library.
Author: Masarki Kondo
Version: 1.0
Author URI: http://www.belive.jp/
*/

/**
 * WP-Pears Class
 *
 */
class wp_pears_class{

    var $incpath;

    /**
     * Constructor
     */
    function wp_pears_class(){
        $this->incpath = ini_get( 'include_path');
        $this->incpath .= strpos( $this->incpath, ';') ? ';' : ':';
        $this->incpath .= dirname(__FILE__);
        ini_set ( 'include_path', $this->incpath);
    }
}

if( class_exists('wp_pears_class') && !isset($WP_Pears)){
    $WP_Pears = new wp_pears_class();
}
?>
