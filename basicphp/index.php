<?php 
$home = <<<HOD
<div class="container">
<div class="row">
    <div class="col-12">
        <h1>Home Page</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima aliquam iusto maiores veniam, amet praesentium eos nam modi, sapiente quam quas aut nulla quia temporibus optio, id excepturi tempora aperiam!</p>
    </div>
</div>
</div>
HOD;

$aung = <<<HOD
<div class="container">
<div class="row">
    <div class="col-12">
        <h1>Aung Aung</h1>
        <img src="fa.png" class="img-responsive" />
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima aliquam iusto maiores veniam, amet praesentium eos nam modi, sapiente quam quas aut nulla quia temporibus optio, id excepturi tempora aperiam!</p>
    </div>
</div>
</div>
HOD;
$thiha = <<<HOD
<div class="container">
<div class="row">
    <div class="col-12">
        <h1>Thiha</h1>
        <img src="memeone.png" class="img-responsive" />
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima aliquam iusto maiores veniam, amet praesentium eos nam modi, sapiente quam quas aut nulla quia temporibus optio, id excepturi tempora aperiam!</p>
    </div>
</div>
</div>
HOD;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <?php
        if(isset($_GET['name'])) {
            $name = $_GET['name'];
            if($name == "Aung") {
                echo $aung;
            } else {
                echo $thiha;
            }
        } else {
            echo $home;
        }
    ?>
</body>
</html>