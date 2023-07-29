<?php

require_once("../Config/empleado.php");

$datos = new empleado();

$all = $datos -> selectAll();


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Constructora</title>
</head>
<body>
<a href="constructora.php">Constructora</a>
<a href="clientes.php">Clientes</a>
<a href="empleado.php">Empleados</a>

<header>
    <h1>EMPLEADOS</h1>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  GUARDAR INFO
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../Insertar/insertarEmpleado.php" method="POST">
            <div>
                <label for="nombre">NOMBRE</label>
                <input type="text" name="nombre" id="id">
            </div>
            <div>
                <label for="telefono">TELEFONO</label>
                <input type="number" name="numero" id="numero">
            </div>
            <div>
                <label for="direccion">CARGO</label>
                <input type="text" name="cargo" id="cargo">
            </div>
            
        
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" id="enviar" name="enviar" value="enviar">
      </div>
      </form>
    </div>
  </div>
</div>

</header>
<main class="tablas">
    <tr>
        <th>#</th>
        <th>NOMBRE</th>
        <th>TELEFONO</th>
        <th>CARGO</th>
    </tr>
</main>
<!-- AQUI SE INYECTAN LOS DATOS -->

<?php

foreach ($all as $key => $val) {
  
?>

<div class="tablas">
    <tr>
        <td><?php echo $val["id_empleado"]?></td>
        <td><?php echo $val["nombre"]?></td>
        <td><?php echo $val["telefono"]?></td>
        <td><?php echo $val["cargo"]?></td>
        <td>
          <a href="../borrar/BorrarEmpleado.php?id=<?=$val["id_empleado"]?>&req='delete'" class="btn btn-danger">BORRAR</a>
        </td>
        <td>
          <a href="../editar/EditarEmpleado.php?id=<?=$val["id_empleado"]?>" class="btn btn-warning">EDITAR</a>
        </td>
    </tr>
</div>


<?php } ?>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>