<?php

/**
 * required ../view folder
 * required view file
 */

function get_view(string $view, array $data = null) {
    ob_start();
    if($data != null) {
        extract($data);
    }
    $view =  "../app/view/" . strtolower($view) . ".php";
    if(file_exists($view)) {
        require $view;
    } else {
       trigger_error("VIEW FILE မတွေ့ဘူး၊ ချီးထုတ်", E_USER_ERROR); 
    }
    ob_end_flush();
}