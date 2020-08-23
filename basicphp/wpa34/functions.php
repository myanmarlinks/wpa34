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
    require "../app/view/" . strtolower($view) . ".php";
    ob_end_flush();
}