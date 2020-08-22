<?php
    if(isset($_GET['name'])) {
        $name = $_GET['name'];
        if($name == "Aung") {
            require "../view/aung.php";
        } else {
            require "../view/thiha.php";
        }
    } else {
        require "../view/home.php";
    }
?>
