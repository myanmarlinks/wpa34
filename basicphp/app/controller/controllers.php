<?php

function HomeController() {
    $data = [
        'title' => 'Myanmar Links',
        'another' => 'Testing',
        'next' => 'Hello World'
    ];
    get_view("home", $data);
}

function ThihaController() {
    $data = [
        'title' => 'Thiha'
    ];
    get_view("thiha", $data);
}

function AungContontroller() {
    $data = [
        'title' => 'Aung'
    ];
    get_view("aung", $data);

}