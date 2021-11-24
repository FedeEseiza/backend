<?php 
  include 'php/functions.php';
  $productos = obtenerProductosQuery();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'php/head.php' ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <?php include 'php/fullNavbar.php' ?>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
              <div class="col-6 mx-auto">
                <div class="text-left">
                    <h1 class="my-0">Las mejores hamburguesas !</h1>
                    <h2 class="mt-3 mb-5">¡Nosotros te las llevamos!</h2>
                    <h2 class="mt-1 mb-1 description-about">Horarios de atencion jueves a domingo de: <span class="typing"></span></h2>
                </div>
              </div>
              <div class="col-6">
                  <img class="img-about" src="img/burguer-about.jpg" alt="">
              </div>
            </div>
        </header>
        <!-- Productos-->
        <section class="productos-section" id="productos">
            <div class="container">
                <div class="row mx-auto text-center">
                  <div class="col-lg-8 mx-auto">
                      <h3 class="mb-4">Nuestras Hamburguesas</h3>
                  </div>
                </div>
                <div class="row align-items-end">
                  <?php foreach ($productos as $value): ?>
                  <div class="col-xl-3 col-6 mt-4">
                    <div class="producto text-center p-4">
                      <img src="<?php echo $value['url'] ?>" />
                      <h4 class="text-left"><?php echo $value['nombre']; ?></h4>
                      <p class="producto-descripcion"><?php echo $value['descripcion'] ?></p>
                      <h5 class="text-left">$<?php echo $value['precio']; ?></h5>
                      <?php if(isset($_SESSION['user'])){ ?>
                        <button class="btn btn-agregar" data-id-user="<?php echo get_user_id($_SESSION['user'])?>" data-id-producto="<?php echo $value['id'];?>" data-nombre="<?php echo $value['nombre']; ?>" data-precio="<?php echo $value['precio']; ?>" data-imagen="<?php echo $value['url'];?>">Agregar</button>
                      <?php } ?>
                    </div>
                  </div>
                  <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- Contacto-->
        <?php include 'php/contacto.php' ?>
        <!-- Footer -->
        <?php include 'php/footer.php' ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
