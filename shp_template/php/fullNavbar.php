<?php session_start(); 
?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php"><img class="burger-icon" src="img/burger-icon" /></a>
        <h5 class="title-icon-navbar">Burgers&Burgers</h5>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#productos">productos</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contacto">contacto</a></li>
                <?php 
                if (!isset($_SESSION['user'])){
                    ?>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login.php">ingresar</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="registrarseView.php">registrarse</a></li>
                <?php } ?>
                <?php if (isset($_SESSION['user'])) { ?>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="logout.php">Logout</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="carrito.php"><i class="fas fa-shopping-basket"></i></a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger user-icon"><i class="fas fa-user"></i><?php echo $_SESSION['user'] ?></a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger"></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>