<?php
/**
* Plugin Name: Bigboss Date and years shortcode 
* Plugin URI: https://wordpress.org/plugins/bb-date-and-years-shortcode/
* Description: BB Date and years shortcode for displaying date years and day any where in your wordpress site using shortcode with multiple view.
* Version: 2.2.1
* Author: Bulbul bigboss
* Author URI: https://www.facebook.com/bulbulbigbossbd
* Tags: date years, show up date years, day date years, years shortcode, display date year
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

function shortcodebb_date($attr){
    
    $defualt=array(
        "format"=>"d-m-y"
        );
    
    $date_data=shortcode_atts($defualt,$attr);
    
    return date($date_data['format']);
    
    }
add_shortcode("bb-date","shortcodebb_date");