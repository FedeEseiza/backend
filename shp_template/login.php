<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'php/head.php' ?>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <?php include 'php/simpleNavbar.php' ?>
        <?php if (!empty($error)) { ?> 
          <p class="title-error"><?php echo $error; ?></p> 
        <?php } ?>
        <!-- Masthead-->
        <header class="masthead-login">
            <div class="container d-flex h-100 align-items-center">
              <div class="col-4">
                <div class="text-left">
                    <h1 class="my-0 txt-black mb-4">Login</h1>
                    <form method="POST" action="php/loginAuth.php">
                      <input type="text" class="form-control mb-4" name="email" placeholder="Email" id="email">
                      <input type="password" class="form-control mb-4" name="password" placeholder="Contraseña" id="password">
                      <button type="submit" class="btn btn-login btn-block">Ingresar</button>
                    </form>
                </div>
              </div>
            </div>
        </header>
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
