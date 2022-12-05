<?php 

  function querysProd(){

  $conexion=mysqli_connect("localhost:3306", "root", "", "kiosco");
  $registros = mysqli_query($conexion, "SELECT * from productos");


  while($row = mysqli_fetch_array($registros)){ ?>
    <div class="col-12">
      <div class="card mb-3">
        <div class="row g-0 d-flex justify-content-center">
          <div class="col-auto">
            <img src="<?php echo "$row[imagen]"?>.jpg" style="max-width: 200px" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col">
            <div class="card-body">
              <a href="productoIndividual.html" style="text-decoration: none;"><h5 class="card-title text-black"><?php echo "$row[nombre]"; ?></h5></a>
              <p class="card-text"><small class="text-muted"><?php echo "$row[precio]"; ?></small></p>
              <p class="card-text"><small class="text-muted"><?php echo "$row[cantidad] unidades"; ?></small></p>
              <form action="http://localhost/Kiosco/productoIndividual.php" method="get">
                <button class="btn btn-primary mt-3" type="submit" name="product" value="<?php echo "$row[id]"; ?>">Ver producto</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php }
  mysqli_close($conexion);}
  
  function querysTitleProdInd(){
    $id=$_REQUEST['product'];

    $conexion=mysqli_connect("localhost:3306", "root", "", "kiosco");
  
    $registros = mysqli_query($conexion, "SELECT * from productos where id=$id");
    $row = mysqli_fetch_array($registros);
    echo "$row[nombre]";
  }
  function prodInd(){
    $id=$_REQUEST['product'];

    $conexion=mysqli_connect("localhost:3306", "root", "", "kiosco");
  
    $registros = mysqli_query($conexion, "SELECT * from productos where id=$id");
    $row = mysqli_fetch_array($registros);
    
    ?>
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
    <?php
  }
?>