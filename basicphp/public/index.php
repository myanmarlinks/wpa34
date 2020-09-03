<?php
    // Separation of Concern
    // K.I.S.S Keep it Simple, Stupid
    // Semantic
    // Don't repeat (Reusable)
    // Decoupling

    // $GLOBALS / $_SERVER

    // URI Extractor!
    $request_uri = explode("/", $_SERVER['REQUEST_URI']);
    $script_name = explode("/", $_SERVER['SCRIPT_NAME']);
    $result_request = array_diff($request_uri, $script_name);
    $final_request = array_values($result_request);
    
    // required functions
    require "../wpa34/functions.php";
    require "../app/controller/controllers.php";
    
    // controller assignment
    if(empty($final_request)) {
        $controller = "HomeController";
    } else {
        $controller = ucfirst($final_request[0]) . "Controller";
    }
    
    // route
    if(function_exists($controller)) {
        call_user_func($controller);
    } else {
        echo "<h1>404 Not Found! Idiot!</h1>";
    }
    
    
?>