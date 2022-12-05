<?php 

  $id=$_REQUEST['product'];

  $conexion=mysqli_connect("localhost:3306", "root", "", "kiosco");

  $registros = mysqli_query($conexion, "SELECT * from productos where id=$id");
  $row = mysqli_fetch_array($registros)
?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title><?php echo "$row[nombre]"; ?></title>
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
                  <a class="bi bi-cart4 nav-link" aria-current="page" href="carrito.html">Mi Carrito</a>
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
        <div class="card">
          <div class="d-flex justify-content-center">
            <img src="<?php echo "$row[imagen]"?>.jpg" style="width: 200px" class="card-img-top" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo "$row[nombre]"; ?></h5>
            <p class="card-text text-muted"><small><?php echo "$row[precio]"; ?></small></p>
            <p class="card-text"><?php echo "$row[cantidad] unidades"; ?></p>
            <a href="carrito.html" class="btn btn-primary">Añadir al carrito</a>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>