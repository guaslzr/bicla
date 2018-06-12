<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Sunflower:300" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="stylesheet" href="css/bar-nav.css">
<?php

?>

<nav id="navbar">
    <div class="main_nav">
        <a href="index.php"><img src="./img/bicla_menu.png"></a>
        <a href="#">Nosotros</a>
        <a href="#">Arma tu bici</a>
        <a href="#">Tienda</a>
        <a href="#">Nosotros</a>
        <a href="faqs.php">FAQs</a>

        <?php
        if (isset($_SESSION) && empty($_SESSION)){?>
            <a href="registro.php">REGISTRARSE</a>
        <?php } ?>

        <?php
        if (isset($_SESSION)&& !empty($_SESSION)){?>
            <a href="logout.php">LOG OUT</a>
        <?php } ?>

        <a href="registro.php">REGISTRARSE</a>
        <div class="sec_nav">
            <a href="#"><i class="fas fa-search"></i></a>
            <a href="login.php"><i class="fas fa-user-circle"></i></a>
            <a href="carrito"><i class="fas fa-shopping-cart"></i></a>
        </div>
    </div>
</nav>
