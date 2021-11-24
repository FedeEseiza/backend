<!DOCTYPE html>
<html lang="en">
    <head>
      <?php
      include 'php/head.php'; 
      include 'php/functions.php';
      session_start();
      $userid = get_user_id($_SESSION['user']);
      $carrito = obtener_productos_carrito($userid);
      ?>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <?php include 'php/simpleNavbar.php' ?>
        <!-- Carrito-->
        <section class="carrito-section" id="carrito">
            <div class="container">
                <div class="row mx-auto text-center">
                  <h3 class="mb-4"><i class="fas fa-shopping-basket fa-lg pr-3"></i>carrito de compras</h3>
                </div>
                <div class="row">
                  <div class="container">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="col-1"></th>
                          <th class="col-6 text-left">producto</th>
                          <th class="col-1 text-center">cantidad</th>
                          <th class="col-2 text-center">precio</th>
                          <th class="col-2 text-center">subtotal</th>
                          <th class="col-2 text-center">borrar</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($carrito as $item){ ?>
                        <tr>
                          <span hidden></span>
                          <td class="align-middle"><img src="<?php echo $item['img'];?>" /></td>
                          <td class="align-middle text-left"><?php echo $item['nombre'];?></td>
                          <td class="align-middle text-center">
                            <input type="number" class="form-control cantidad" placeholder="0">
                          </td>
                          <td class="align-middle text-center"><span class="precio"><?php echo $item['precio'];?></span></td>
                          <td class="align-middle text-center">$<span class="subtotal"><?php echo $item['precio'];?></span></td>
                          <td class="align-middle text-center"><button  data-id="<?php echo $item['id_producto'];?>" class="btn btn-primary btn-eliminar-producto"><i class="fas fa-times"></i></button></td>
                        </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                    <h5>Total compra: <span id="total">0</span></h5>
                  </div>
                </div>
                <div class="row justify-content-end">
                  <button class="btn btn-comprar">Iniciar compra</button>
                </div>
            </div>
        </section>
        <div class="fluid-container img-footer">
          <!-- Footer -->
         <?php include 'php/footer.php' ?>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
       
    </body>
</html>
