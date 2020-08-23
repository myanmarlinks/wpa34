<?php
    // Separation of Concern
    // K.I.S.S Keep it Simple, Stupid
    // Semantic
    // Don't repeat (Reusable)
    // Decoupling

    require "../wpa34/functions.php";

    if(isset($_GET['name'])) {
        $name = $_GET['name'];
        $data = [
            'title' => $name
        ];
        get_view($name, $data);
    } else {
        $data = [
            'title' => 'Myanmar Links',
            'another' => 'How are you?',
            'next'  => 'How do you do?'  
        ];
        get_view("home", $data);
    }
    
?>