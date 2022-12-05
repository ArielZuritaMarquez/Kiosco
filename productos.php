<?php
  include ("PHP/Querys.php");
  include ("User/Usuarios.php");
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Productos</title>
  </head>
  <body>
    <div class="h-100 w-100">
      <nav class="navbar navbar-expand-lg border-bottom border-primary bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="http://localhost/Kiosco/kiosco.php">App Kiosco</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Kiosco</h5>
            </div>
            <hr class="mx-3 my-0 d-lg-none">
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="bi bi-cart4 nav-link" aria-current="page" href='<?php echo "$perfilLink" ?>'>Mi Carrito</a>
                </li>
                <li class="nav-item">
                  <a class="bi bi-person nav-link" href='<?php echo "$perfilLink" ?>'><?php echo "$perfilTxt" ?></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <div class="container" style="margin-top: 5rem; margin-bottom: 2rem">
        <div class="row mt-5" id="listaProductos">
        <?php
          querysProd();
        ?>      
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        var col = $('<div class="col-12"></div>');
        $('#listaProductos').append(col);
    </script>
  </body>
</html>