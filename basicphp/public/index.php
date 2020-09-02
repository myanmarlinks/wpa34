<?php
    // Separation of Concern
    // K.I.S.S Keep it Simple, Stupid
    // Semantic
    // Don't repeat (Reusable)
    // Decoupling

    // $GLOBALS / $_SERVER

    $request_uri = explode("/", $_SERVER['REQUEST_URI']);
    $script_name = explode("/", $_SERVER['SCRIPT_NAME']);
    $result_request = array_diff($request_uri, $script_name);
    $final_request = array_values($result_request);
    
    require "../wpa34/functions.php";
    
    if(empty($final_request)) {
        get_view("home");
    } else {
        $file = "../app/view/" . $final_request[0] . ".php";
        if(file_exists($file)) {
            get_view($final_request[0]);
        } else {
            echo "404 Not Found! Idiot!";
        }
    }
    
?>