<?php
    // Separation of Concern
    // K.I.S.S Keep it Simple, Stupid
    // Semantic
    // Don't repeat
    if(isset($_GET['name'])) {
        $name = $_GET['name'];
        get_view($name);
    } else {
        get_view("home");
    }

    function get_view(string $title) {
        ob_start();
        $title = $title;
        require "../view/" . strtolower($title) . ".php";
        ob_end_flush();
    }
?>